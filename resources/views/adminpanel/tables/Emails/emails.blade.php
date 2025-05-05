@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Foydalauvchilar elektron pochtalari')
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
                    Emaillar
                </li>
            </ol>
        </nav>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Id</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">Yaratilgan sana</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emails as $email)
                            <tr>
                                <td>{{ $email->id }}</td>
                                <td>{{ $email->email }}</td>
                                <td>{{ $email->created_at }}</td>
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
