@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Qabul jadvali')
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
                    Qabul jadvali
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Hokimiyat vakillari qabul vaqtlari</h1>
            </div>
            <div>
                <a href="{{ route('schedule.create') }}"><button class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Jadvali qo'shish
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
                            <th class="border-0">Hokimiyat vakili</th>
                            <th class="border-0">Hafta kuni</th>
                            <th class="border-0">Qabul vaqti</th>
                            <th class="border-0">Izoh (Uz)</th>
                            <th class="border-0">Izoh (Eng)</th>
                            <th class="border-0">Izoh (Ru)</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->id }}</td>
                                <td>{{ $schedule->apparat->ismi_sharifi }}</td>
                                <td>{{ $schedule->day }}</td>
                                <td>{{ $schedule->time }}</td>
                                <td>{{ $schedule->desc_uz }}</td>
                                <td>{{ $schedule->desc_eng }}</td>
                                <td>{{ $schedule->desc_ru }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('schedule.destroy', ['schedule' => $schedule->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-3">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('schedule.edit', ['schedule' => $schedule->id]) }}">
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
