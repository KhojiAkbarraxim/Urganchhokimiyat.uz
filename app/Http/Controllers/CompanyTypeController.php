<?php

namespace App\Http\Controllers;

use App\Models\CompanyType;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyTypeStoreRequest;

class CompanyTypeController extends Controller
{
    public function ApiIndex()
    {
        $companytype = CompanyType::all();
        return response()->json([
            'Tuman tashkilotlari' => $companytype
        ]);
    }

    public function index()
    {
        $companytypes = CompanyType::orderBy('id','desc')->get();

        return view('adminpanel.tables.CompanyType.companytypes', compact('companytypes'));
    }

    public function create()
    {
        return view('adminpanel.tables.CompanyType.createdata');
    }
   
    public function store(CompanyTypeStoreRequest $request)
    {
        CompanyType::create($request->validated());

        return to_route('companytype.index')->with('Succes' , 'Malumot muvafaqqqiyatli qo\'shildi!');
    }

    public function edit(Companytype $companytype)
    {
        return view('adminpanel.tables.CompanyType.editdata', compact('companytype'));
    }

    public function update(CompanyTypeStoreRequest $request, CompanyType $companytype)
    {
        $companytype->update($request->validated());

        return to_route('companytype.index');
    }

    public function destroy(CompanyType $companytype)
    {
        $companytype->delete();

        return to_route('companytype.index')->with('success', 'Muvaffaqqiyatli o\'chirildi!');
    }
}
