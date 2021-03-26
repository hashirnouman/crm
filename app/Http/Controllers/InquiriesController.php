<?php

namespace App\Http\Controllers;

use App\Models\Inquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['result'] =  Inquiries::orderBy('id','desc')->get();
        return view('inquiries.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inquiries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inquiries = new Inquiries;

        $inquiries->name = $request->name;
        $inquiries->email = $request->email;
        $inquiries->number = $request->contact;
        $inquiries->city = $request->city;
        $inquiries->course_id = $request->course_id;
        $inquiries->interest = $request->interest;
        $inquiries->status = $request->status;
        $inquiries->follow_up = $request->date;
        $inquiries->added_by = Auth::id();

        $inquiries->save();

        return redirect(route('inquiries.index'))->with('success','Record has been entered');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiries $inquiries)
    {
      return view('inquiries.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiries $inquiries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiries $inquiries)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $inquiries=Inquiries::where('id',$id)->delete();
        return back()->with('success','record is deleted');
    }
 
}
