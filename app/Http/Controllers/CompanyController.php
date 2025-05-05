<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyType;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyStoreRequest;

class CompanyController extends Controller
{
    public function ApiIndex()
    {
        $companies = Company::query()
        ->join('company_types as company_type', 'company_type.id', 'companies.type_id')
        ->select([
            'companies.id',
            'companies.name',
            'companies.director',
            'companies.longitude',
            'companies.latitude',
            'companies.address',
            'companies.tel',
            'companies.email',
            'companies.site_url',
            'companies.description_uz',
            'companies.description_eng',
            'companies.description_ru',
            'company_type.name_uz as company_type_uz',
            'company_type.name_eng as company_type_eng',
            'company_type.name_ru as company_type_ru'
        ])->latest()->paginate(10);
        return response()->json([
            'Tuman_tashkilotlari' => $companies
        ]);
    }

    public function index()
    {
        $companies = Company::all();
        return view('adminpanel.tables.Company.companies', compact('companies'));
    }
    public function create()
    {
        $companytypes= CompanyType::all();
        return view('adminpanel.tables.Company.createdata',compact('companytypes'));
    }

    public function store(CompanyStoreRequest $request)
    {
        Company::create($request->validated());
        return to_route('company.index');
    }

    public function edit(Company $company)
    {
        $companytypes = CompanyType::all();
        return view('adminpanel.tables.Company.editdata',compact('company','companytypes'));
    }

    public function update(CompanyStoreRequest $request, Company $company)
    {
        $company->update($request->validated());
        return to_route('company.index')->with('succes','Muvaffaqqiyatli yangilandi');
    }
    public function destroy(Company $company)
    {
        $company->delete();
        return to_route('company.index');        
    }
}
