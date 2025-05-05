<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\QuestionStoreRequest;

class QuestionController extends Controller
{
    public function ApiIndex()
    {
        return response()->json([
            Question::latest('id')->paginate(10)
        ]); 
    }
    public function index()
    {
        $questions = Question::all();
        return view('adminpanel.tables.question.savollar', compact('questions'));   
    }
    public function create()
    {
        return view('adminpanel.tables.question.createdata');
    }
    public function store(QuestionStoreRequest $request)
    {
        Question::create($request->validated());
        return to_route('question.index')->with('succes', 'Muvaffaqiyatli yaratildi');   
    }
    public function edit(Question $question)
    {
        return view('adminpanel.tables.question.editdata', compact('question'));
    }
    public function update(QuestionStoreRequest $request, Question $question)
    {
        $question->update($request->validated());
        return to_route('question.index')->with('succes', 'Muvaffaqqiyatli o\'chirildi');
    }
    public function destroy(Question $question)
    {
        $question->delete();
        return to_route('question.index')->with('succes', 'Muvaffaqqiyatli o\'chirildi');
    }
}
