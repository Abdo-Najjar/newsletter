<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Http\Requests\Mail\StoreRequest;
use App\Http\Requests\Mail\UpdateRequest;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $mail = Mail::create($request->all());

        return redirect($mail->path());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Mail $mail)
    {
        $mail->update($request->all());

        return redirect($mail->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        $mail->delete();

        return redirect('mails');
    }
}