@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Vakansiyalar')
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
                    Vakansiyalar
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Vakansiyalar jadvali</h1>
            </div>
            <div>
                <a href="{{ route('vacancy.create') }}"class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Vakansiyalar qo'shish
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
                            <th class="border-0">Fayl nomi</th>
                            <th class="border-0">Izoh (uz)</th>
                            <th class="border-0">Izoh (eng)</th>
                            <th class="border-0">Izoh (ru)</th>
                            <th class="border-0">Yaratilgan da</th>
                            <th class="border-0">O'zgartirilgan da</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacancies as $vacancy)
                            <tr>
                                <td>{{ $vacancy->id }}</td>
                                <td>{{ $vacancy->file_path }}</td>
                                <td>{{ $vacancy->desc_uz }}</td>
                                <td>{{ $vacancy->desc_eng }}</td>
                                <td>{{ $vacancy->desc_ru }}</td>
                                <td>{{ $vacancy->created_at }}</td>
                                <td>{{ $vacancy->updated_at }}</td>
                                <td style="display: flex">
                                  <form action="{{ route('vacancy.destroy', $vacancy->id) }}" method="POST" id="deleteForm{{ $vacancy->id }}">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger me-3" onclick="deleteSwallButton({{ $vacancy->id }})">
                                          <i class="fa-solid fa-trash-can"></i>
                                      </button>
                                  </form>
                                  <a href="{{ route('vacancy.edit', ['vacancy' => $vacancy->id]) }}">
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
