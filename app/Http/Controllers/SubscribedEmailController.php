<?php

namespace App\Http\Controllers;

use App\Models\SubscribedEmail;
use App\Http\Requests\SubscriptionStoreRequest;

class SubscribedEmailController extends Controller
{
    public function index()
    {
        $emails = SubscribedEmail::all();
        return view('adminpanel.tables.Emails.emails',compact('emails'));
    }
    public function store(SubscriptionStoreRequest $request)
    {
        SubscribedEmail::create($request->validated());
        return to_route('home')->with('succes');
    }
}