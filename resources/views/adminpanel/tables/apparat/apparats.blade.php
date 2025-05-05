@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Apparat')
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
                    Apparat
                </li>
            </ol>
        </nav>
        <div class="d-flex align-items-center justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Hokimiyat vakillari jadvali</h1>
            </div>

            <div class="d-flex align-items-center">
                <input type="date" class="me-2 rounded border-1 px-2" id="dateFilter"
                    style="width: 180px; height: 40px;" oninput="filterRows()" />
                <a href="{{ route('apparat.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Ma'lumot qo'shish
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
                            <th class="border-0">Ismi_sharifi</th>
                            <th class="border-0">Hodim_malumotlari</th>
                            <th class="border-0">Hodim_malumotlari_eng</th>
                            <th class="border-0">Hodim_malumotlari_ru</th>
                            <th class="border-0">Kasbi</th>
                            <th class="border-0">Kasbi_eng</th>
                            <th class="border-0">Kasbi_ru</th>
                            <th class="border-0">Tel.raqami</th>
                            <th class="border-0">Majburiyati</th>
                            <th class="border-0">Majburiyati_eng</th>
                            <th class="border-0">Majburiyati_ru</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">Manzil</th>
                            <th class="border-0">Rasm</th>
                            <th class="border-0">Yaratilgan Vaqti</th>
                            <th class="border-0">O'zgartirilgan Vaqti</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apparats as $apparat)
                            <!-- Item -->
                            <tr>
                                <td>{{ $apparat->id }}</td>
                                <td class="contentItem">{{ $apparat->ismi_sharifi }}</td>
                                <td class="contentItem">{{ $apparat->hodim_malumotlari }}</td>
                                <td class="contentItem">{{ $apparat->hodim_malumotlari_eng }}</td>
                                <td class="contentItem">{{ $apparat->hodim_malumotlari_ru }}</td>
                                <td>{{ $apparat->kasbi }}</td>
                                <td>{{ $apparat->kasbi_eng }}</td>
                                <td>{{ $apparat->kasbi_ru }}</td>
                                <td class="contentItem">{{ $apparat->tel }}</td>
                                <td class="contentItem">{{ $apparat->majburiyati }}</td>
                                <td class="contentItem">{{ $apparat->majburiyati_eng }}</td>
                                <td class="contentItem">{{ $apparat->majburiyati_ru }}</td>
                                <td class="contentItem">{{ $apparat->email }}</td>
                                <td class="contentItem">{{ $apparat->address }}</td>
                                <td><img src="{{ asset('images') . '/apparats/' . $apparat->image_path }}" alt="rasm" width="80"></td>
                                <td>{{ $apparat->created_at->format('m.d.Y') }}</td>
                                <td>{{ $apparat->updated_at->format('m.d.Y') }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('apparat.destroy', $apparat->id) }}" method="POST" id="deleteForm{{ $apparat->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger me-3" onclick="deleteSwallButton({{ $apparat->id }})">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('apparat.edit', ['apparat' => $apparat->id]) }}">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-regular fa-pen-to-square text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <!-- End of Item -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
