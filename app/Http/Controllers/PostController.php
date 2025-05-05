<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Mail\NewPosted;
use Illuminate\Http\Request;
use App\Models\SubscribedEmail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function apiindex($date = null)
    {
        if($date){
            $new = Post::where('created_at', 'like', "%{$date}%")->get();
            return response()->json([
                'news' => $new
            ]);
        }
        else
        return  Post::latest()->paginate(6); 
    }
    public function eachindex(Post $post = null)
    {
        return response()->json([
            'news' => $post
        ]);
    }
    public function index()
    {
        $newss = Post::latest()->get();
        return view('adminpanel.tables.new.news')->with('newss', $newss);
    }

    public function create()
    {
        return view('adminpanel.tables.new.createdata');
    }
    public function mail()
    {
        $new = Post::latest()->first();  
        $all_email = SubscribedEmail::all();
        foreach($all_email as $email)
        {
            Mail::to($email->email)->send(new NewPosted($new));
        }
        return redirect()->route('newss.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required','string',
            'content' => 'required','string',
            'category' => 'required','string',
            'image_path' => 'mimes:jpg,png,jpeg|max:5048',
            'eng_title' => 'required','string',
            'eng_content' => 'required','string',
            'ru_title' => 'required','string',
            'ru_content' => 'required','sitrng'
        ]);
        $news = new Post;
        if ($request->hasFile('image_path')) {
            $name = $request->file('image_path')->getClientOriginalName();
            $request->file('image_path')->move(public_path('images/news'), $name);
        }
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->category = $request->input('category');
        $news->image_path = $name ?? null;
        $news->eng_title = $request->input('eng_title');
        $news->eng_content = $request->input('eng_content');
        $news->ru_title = $request->input('ru_title');
        $news->ru_content = $request->input('ru_content');
        $news->save();
        $this->mail();
    }
    
    public function show(Post $newss)
    {
        return view('adminpanel.tables.new.showdata')->with('newss', $newss);
    }

    public function edit(Post $newss)
    {
        return view('adminpanel.tables.new.editdata')->with('newss', $newss);
    }

    public function update(Request $request, Post $newss)
    {
        $request->validate([
            'image_path' => 'mimes:jpg,png,jpeg|max:5048',
        ]);
        try {
            if ($request->hasFile('image_path')) { //agar htmlda image_pathda rasm kirizilgan bo'lsa
                if (isset($newss->image_path)) { //agar mbazada rasm_yoli bo'lsa
                    File::delete(public_path('images/news/' . $newss->image_path)); //public folderdan  ham o'chiradi
                }
                $new_image = $request->file('image_path')->getClientOriginalName();
                $request->image_path->move(public_path('images/news'), $new_image);
            }
        } catch (Exception $e) {
            echo $e;
        }
        $newss->update([
            'title' => $request->title ?? $newss->title,
            'content' => $request->content ?? $newss->content,
            'category' => $request->category ?? $newss->category,
            'image_path' => $new_image ?? $newss->image_path,
            'eng_title' => $request->eng_title ?? $newss->eng_title,
            'eng_content' => $request->eng_content ?? $newss->eng_content,
            'ru_title' => $request->ru_title ?? $newss->ru_title,
            'ru_content' => $request->ru_content ?? $newss->ru_content,
        ]);
        return redirect()->route('newss.index');
    }
    public function destroy(Post $newss)
    {
        if (File::exists(public_path('images/news/' . $newss->image_path))) {
            File::delete(public_path('images/news/' . $newss->image_path));
        }
        $newss->delete();
        return redirect()->route('newss.index');
    }
}
