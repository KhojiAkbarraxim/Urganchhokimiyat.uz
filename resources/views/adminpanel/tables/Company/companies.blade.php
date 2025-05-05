@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Tuman tashkilotlari')
@section('content')

    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Jadvallar</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Tuman tashkilotlari
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Tuman tashkilotlari jadvali</h1>
            </div>
            <div>
                <a href="{{route('company.create')}}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Malumot qo'shish
                </a>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Id</th>
                            <th class="border-0">Turi</th>
                            <th class="border-0">Nomi</th>
                            <th class="border-0">Rahbari</th>
                            <th class="border-0">Manzili</th>
                            <th class="border-0">Tel. raqami</th>
                            <th class="border-0">Emaili</th>
                            <th class="border-0">Sayti</th>
                            <th class="border-0">Kenglik</th>
                            <th class="border-0">Uzunlik</th>
                            <th class="border-0">Izoh_uz</th>
                            <th class="border-0">Izoh_eng</th>
                            <th class="border-0">Izoh_ru</th>
                            <th class="border-0">Yaratilgan_vaqt</th>
                            <th class="border-0">O'zgartirilgan_vaqti</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                {{-- @dd($company) --}}
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->companytypes->name_uz }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->director }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->tel }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->site_url }}</td>
                                <td>{{ $company->latitude }}</td>
                                <td>{{ $company->longitude }}</td>
                                <td>{{ $company->description_uz }}</td>
                                <td>{{ $company->description_eng }}</td>
                                <td>{{ $company->description_ru }}</td>
                                <td>{{ $company->created_at }}</td>
                                <td>{{ $company->updated_at }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('company.destroy', ['company' => $company->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-3">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('company.edit', ['company' => $company->id]) }}">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-regular fa-pen-to-square text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- End of Item -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
