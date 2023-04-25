<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $academic_years=DB::table('academic_years')->get();
        return view('admin/academic_year.index',['academic_years'=>$academic_years]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/academic_year.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'academic_year'=>'required'
        ]);
        DB::table('academic_years')->insert($request->only(['academic_year']));
        return redirect()->route(('academic_year.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $academic_year=DB::table('academic_years')->find($id);
        return view('admin/academic_year.view',['academic_year'=>$academic_year]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $academic_year=DB::table('academic_years')->find($id);
        return view('admin/academic_year.edit',['academic_year'=>$academic_year]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'academic_year'=>'required'
        ]);
        // dd($request);
        DB::table('academic_years')->where('id',$id)->update($request->only(['academic_year']));
        return redirect()->route(('academic_year.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('academic_years')->where('id',$id)->delete();
        return redirect()->route(('academic_year.index'));
    }
}