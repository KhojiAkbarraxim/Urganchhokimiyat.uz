@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Tadbir turlari')
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
                    Tadbir turlari
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Tadbir turlari</h1>
            </div>
            <div>
                <a href="{{ route('types.create') }}"><button class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Malumot qo'shish
                    </button></a>
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
                            <th class="border-0">Tadbir turlari (Uzbekcha)</th>
                            <th class="border-0">Tadbir turlari (Ruscha)</th>
                            <th class="border-0">Tadbir turlari (Inglizcha)</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventtypes as $eventtype)
                            <tr>
                                <td>{{ $eventtype->id }}</td>
                                <td>{{ $eventtype->name_uz }}</td>
                                <td>{{ $eventtype->name_ru }}</td>
                                <td>{{ $eventtype->name_eng }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('types.destroy', ['type' => $eventtype->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-3">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('types.edit', ['type' => $eventtype->id]) }}">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-regular fa-pen-to-square text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @session('succes')
                    {{-- @succes; --}}
                @endsession
            </div>
        </div>
    </div>
@endsection
