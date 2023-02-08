<?php

namespace App\Http\Controllers;

use App\Models\prepod;
use Illuminate\Http\Request;

class PrepodController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    Public function index()
{
    $data = prepod::all();
    return view('prepodTable', compact('data'));
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
public function store(Request $request)
{
//
}

/**
* Display the specified resource.
*
* @param \App\Models\stud $stud
* @return \Illuminate\Http\Response
*/
public function show(stud $stud)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param \App\Models\stud $stud
* @return \Illuminate\Http\Response
*/
public function edit(stud $stud)
{
//
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Models\stud $stud
* @return \Illuminate\Http\Response
*/
public function update(Request $request, stud $stud)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param \App\Models\stud $stud
* @return \Illuminate\Http\Response
*/
public function destroy(stud $stud)
{
//
}
}