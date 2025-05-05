@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Xaritalar')
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
                    Xaritalar
                </li>
            </ol>
        </nav>
        <div class="d-flex align-items-center justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Xaritalar jadvali</h1>
            </div>

            <div class="d-flex align-items-center">
                <input type="date" class="me-2 rounded border-1 px-2" id="dateFilter"
                    style="width: 180px; height: 40px;" oninput="filterRows()" />
                <div class="mb-0 me-2">
                    <select class="form-select border-1" id="categoryFilter" name="category" required style="width: 120px;height: 40px;">
                        <option selected value="Barchasi">Barchasi</option>
                        <option value="Siyosiy">Yashil makon</option>
                        <option value="Ijtimoiy">Axlat yig'ish joylari</option>
                    </select>
                </div>
                <a href="{{ route('map.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Joy qo'shish
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
                            <th class="border-0">Tashkilot nomi</th>
                            <th class="border-0">Kenglik (Latitude)</th>
                            <th class="border-0">Uzunlik (Longitude)</th>
                            <th class="border-0">Daraxtlar soni</th>
                            <th class="border-0">Manzil</th>
                            <th class="border-0">Obyekt turi</th>
                            <th class="border-0">Yaratilgan Vaqti</th>
                            <th class="border-0">O'zgartirilgan Vaqti</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($maps as $map)
                            <!-- Item -->
                            <tr>
                                <td>{{ $map->id }}</td>
                                <td class="contentItem">{{ $map->companies->name }}</td> 
                                <td class="contentItem">{{ $map->latitude }}</td>
                                <td>{{ $map->longitude }}</td>
                                <td class="contentItem">{{ $map->tree_count }}</td>
                                <td class="contentItem">{{ $map->address }}</td>
                                <td class="contentItem">{{ $map->obj_type }}</td>
                                <td>{{ $map->created_at->format('m.d.Y') }}</td>
                                <td>{{ $map->updated_at->format('m.d.Y') }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('map.destroy', $map->id) }}" method="POST" id="deleteForm{{ $map->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" onclick="deleteSwallButton({{ $map->id }})">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('map.edit', ['map' => $map->id]) }}">
                                        <button type="submit" class="btn btn-success me-3">
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
