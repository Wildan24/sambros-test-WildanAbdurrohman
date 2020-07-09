<?php

namespace App\Http\Controllers;

use File;
use App\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $no = 0;
        // $company = Company::all();
        return view('Companys.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Companys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_company'      => 'required',
            'phone'             => 'required',
            'address'           => 'required',
            'logo'              => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $company  = New Company;
        $company->name_company = $request->name_company;
        $company->name_company = $request->name_company;
        $company->name_company = $request->name_company;

        $logo = $request->logo;
        $namafile = time().'.'.$logo->getClientOriginalExtension();
        $logo->move('images/',$namafile);

        $company->logo = $namafile;
        $company->save();
        return redirect('/Company/Home')->with('pesan','Data Company has been Added');
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
    }
}
