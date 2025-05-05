<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Company;
use App\Http\Requests\PollStoreRequest;

class PollController extends Controller
{
    public function ApiIndex()
    {
        $poll = Poll::query()
        ->join('companies as company', 'company.id', 'polls.company_id')
        ->select([
            'polls.id',         
            'polls.question',
            'polls.ru_question',
            'polls.eng_question',
            'polls.good',
            'polls.great',
            'polls.acceptable',
            'polls.unacceptable',
            'polls.end_date',
            'polls.begin_date',
            'polls.publish_limit',
            'polls.archive_status',
            'company.name as company_name'])
       ->where('publish_limit','>',now())->orderBy('polls.created_at', 'desc')->paginate(3); 
            return response()->json([
                'polls' => $poll
            ]);
    }
    public function vote($answer_id, Poll $poll)
    {
        if($poll->where('archive_status','=', 0)){
            switch($answer_id){
                case 1:
                    $poll->increment('great');
                    break;
                case 2:
                    $poll->increment('good');
                    break;
                case 3:
                    $poll->increment('acceptable');
                    break;
                case 4:
                    $poll->increment('unacceptable');
                    break;
                default: 
                    return response()->json(['You are wrong URL Bro :))']);
                }
            }
        else{
                return response()->json([
                    'text' =>'Kechirasiz so\'rovnoma muddati tugadi'
                ]);
            }
    }
    public function index()
    {
        $polls = Poll::latest()->get();
        return view('adminpanel.tables.polls.polls')->with('polls', $polls);
    }

    public function create()
    {
        $companies = Company::all();
        return view('adminpanel.tables.polls.createdata', compact('companies'));
    }

    public function store(PollStoreRequest $request)
    {
        Poll::create($request->validated());
        return redirect()->route('polls.index');
    }

    public function edit(Poll $poll)
    {
        $companies = Company::all();
        return view('adminpanel.tables.polls.editdata',compact('poll','companies'));
    }

    public function update(PollStoreRequest $request, Poll $poll)
    {
        $poll->update($request->validated());
        return to_route('polls.index')->with('succes', 'Muvaffaqqiyatli yangilandi');
    }

    public function destroy(Poll $poll)
    {
        $poll->delete();
        return redirect()->route('polls.index');
    }
}