<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\VacancyStoreRequest;

class VacanacyController extends Controller
{

    public function ApiIndex()
    {
        $vacancy = Vacancy::all();
        return response()->json([
            'Vacancies'=> $vacancy,
        ]); 
    }
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('adminpanel.tables.vacancy.vacancies', compact('vacancies'));
    }

    public function create()
    {
        return view('adminpanel.tables.vacancy.createdata');
    }

    public function store(VacancyStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('file_path'))
        {
            $fileName = $request->file('file_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($fileName, '.');
            $name = chop($fileName, $nameWithoutExtension);
            $ext = $request->file('file_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h') . '.' . $ext;
            $request->file('file_path')->move(public_path('files/vacancies/'), $new_name);
            $data['file_path'] = $new_name;
        }
        
        Vacancy::create($data);
        return to_route('vacancy.index');
    }

    public function edit(Vacancy $vacancy)
    {
        return view('adminpanel.tables.vacancy.editdata', compact('vacancy'));
    }

    public function update(VacancyStoreRequest $request, Vacancy $vacancy)
    {
        $data = $request->validated();
        if ($request->hasFile('file_path')) {
            if (isset($vacancy->file_path)) {
                File::delete(public_path('files/vacancies/' . $vacancy->file_path));
            }
            $name = $request->file('file_path')->getClientOriginalName();
            $nameWithoutExtension = strrchr($name, '.');
            $name = chop($name, $nameWithoutExtension);
            $ext = $request->file('file_path')->getClientOriginalExtension();
            $new_name = $name . '_' . now()->format('d-m-y-h') . '.' . $ext;
            $request->file('file_path')->move(public_path('files/vacancies/'), $new_name);
            $data['file_path'] = $new_name;
        }
        $vacancy->update($data);
        return to_route('vacancy.index');
    }
   
    public function destroy(Vacancy $vacancy)
    {
        if (File::exists(public_path('files/vacancies/' . $vacancy->file_path))) {
            File::delete(public_path('files/vacancies/' . $vacancy->file_path));
        }
        $vacancy->delete();
        return to_route('vacancy.index');
    }
}
