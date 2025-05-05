@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Tadbirlari Jadvali')
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
                    Tadbirlari
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Tadbirlar</h1>
            </div>
            <div>
                <a href="{{ route('event.create') }}"><button class="btn btn-primary">
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
                            <th class="border-0">Mavzu (Uz)</th>
                            <th class="border-0">Mavzu (Ru)</th>
                            <th class="border-0">Mavzu (Eng)</th>
                            <th class="border-0">Text (Uz)</th>
                            <th class="border-0">Text (Ru)</th>
                            <th class="border-0">Text (Eng)</th>
                            <th class="border-0">Tadbir turi (uz)</th>
                            <th class="border-0">Rasm</th>
                            <th class="border-0">Yaratilgan vaqt</th>
                            <th class="border-0">O'zgartirilgan vaqt</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->title_uz }}</td>
                                <td>{{ $event->title_ru }}</td>
                                <td>{{ $event->title_eng }}</td>
                                <td>{{ $event->content_uz }}</td>
                                <td>{{ $event->content_ru }}</td>
                                <td>{{ $event->content_eng }}</td>
                                <td>{{ $event->EventType->name_uz }}</td>
                                <td><img src="{{ asset('images') . '/events/' . $event->image_path }}" alt="rasm" width="80"></td>                                
                                <td>{{ $event->created_at }}</td>
                                <td>{{ $event->updated_at }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('event.destroy', ['event' => $event->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-3">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('event.edit', ['event' => $event->id]) }}">
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
