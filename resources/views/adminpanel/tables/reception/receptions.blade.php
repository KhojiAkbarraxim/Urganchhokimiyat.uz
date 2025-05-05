@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Sayyor Qabullar')
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
                    Sayyor Qabullar
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Sayyor qabullar jadvali</h1>
            </div>
            <div>
                <a href="{{ route('reception.create') }}"><button class="btn btn-primary">
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
                            <th class="border-0">Qabul joyi manzili</th>
                            <th class="border-0">Boshlanish sanasi</th>
                            <th class="border-0">Arxiv</th>
                            <th class="border-0">Izoh (Uz)</th>
                            <th class="border-0">Izoh (Eng)</th>
                            <th class="border-0">Izoh (Ru)</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($public_receptions as $public_reception)
                            <tr>
                                <td>{{ $public_reception->id }}</td>
                                <td>{{ $public_reception->apparat->ismi_sharifi }}</td>
                                <td>{{ $public_reception->qabul_joyi_manzili }}</td>
                                <td>{{ $public_reception->begin_date }}</td>
                                <td>{{ $public_reception->status }}</td>
                                <td>{{ $public_reception->desc_uz }}</td>
                                <td>{{ $public_reception->desc_eng }}</td>
                                <td>{{ $public_reception->desc_ru }}</td>
                                <td style="display: flex">
                                  <form action="{{ route('reception.destroy',['reception' => $public_reception->id]) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger me-3">
                                          <i class="fa-solid fa-trash-can"></i>
                                      </button>
                                  </form>
                                  <a href="{{ route('reception.edit', ['reception' => $public_reception->id]) }}">
                                      <button type="submit" class="btn btn-success">
                                          <i class="fa-regular fa-pen-to-square text-white"></i>
                                      </button>
                                  </a>
                              </td>
                                {{-- <td>6 </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
