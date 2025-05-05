@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Ko\'p beriladigan jadvallarga javoblar')
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
                    Mahall fuqarolar yig'ini
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0"> Mahall fuqarolar yig'ini jadvali</h1>
            </div>
            <div>
                <a href="{{ route('mfy.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Mahall fuqarolar yig'ini qo'shish
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
                            <th class="border-0">MFY nomi</th>
                            <th class="border-0">MFY rais</th>
                            <th class="border-0">MFY sektori</th>
                            <th class="border-0">Telefon Raqami</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mfys as $mfy)
                            <tr>
                                <td>{{ $mfy->id }}</td>
                                <td>{{ $mfy->name }}</td>
                                <td>{{ $mfy->raisi }}</td>
                                <td>{{ $mfy->MfySector->name }}</td>
                                <td>{{ $mfy->tel }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('mfy.destroy', $mfy->id) }}" method="POST"
                                        id="deleteForm{{ $mfy->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-3"
                                            onclick="deleteSwallButton({{ $mfy->id }})">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('mfy.edit', ['mfy' => $mfy->id]) }}">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-regular fa-pen-to-square text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
