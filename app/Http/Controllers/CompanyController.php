<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CompanyController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $companies = Company::all();
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::find(1);
        return view('companies.create', compact(['companies']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {

        $inputs = $request->only(['name', 'email', 'website']);
        $image = Input::file('logo');
        $inputs['logo'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('logos');
        $image->move($destinationPath, $inputs['logo']);
        Company::create($inputs);
        return redirect('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Company::find($id)){
            abort(404);
        };
        $companies = Company::find($id);
        // dd($companies);
        return view('companies.show', compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($company);
        $company = Company::find($id);
        return view('companies.edit', compact(['company']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->only(['name', 'email', 'website']);
        Company::find($id)->update($inputs);
        return redirect('/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
