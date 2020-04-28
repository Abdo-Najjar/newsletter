<?php
namespace App\Http\Controllers\Admin;


use App\DataTables\NewsletterDataTable;
use App\Newsletter;
use App\Http\Requests\Newsletter\UpdateRequest;
use App\Http\Requests\Newsletter\StoreRequest;
use App\Http\Controllers\Controller;
class NewsletterController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsletterDataTable $datatable)
    {
        
        $title = "Liste des newsletters";

       return  $datatable->render('dashboard.cruds.index' ,compact('title') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $title = "";
        
        return view('dashboard.cruds.newsletter.create' , compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $newsletter =  Newsletter::create($request->all());

        $this->flashCreatedSuccessfully();

        return redirect($newsletter->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */

    public function show(Newsletter $newsletter)
    {
        return view('dashboard.cruds.newsletter.show' , compact('newsletter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {

        $title = "";
        
        return view('dashboard.cruds.newsletter.edit' , compact('newsletter' , 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateRequest $request , Newsletter $newsletter)
    {

        $newsletter->update($request->all());

        $this->flashUpdatedSuccessfully();

        return redirect($newsletter->path());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}