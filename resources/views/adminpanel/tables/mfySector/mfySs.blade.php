@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Mahalla Fuqarolar Yig\'ini Sektorlari')
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
            MFY Sektorlari
          </li>
        </ol>
      </nav>
      <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
          <h1 class="h4 mb-0"> Mahalla Fuqarolar Yig'ini Sektorlar jadvali</h1>
        </div>
        <div>
          <a href="{{route('mfysector.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
             MFY sektor qo'shish
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
                <th class="border-0">nomi</th>
                <th class="border-0">rahbari</th>
                <th class="border-0">manzili</th>
                <th class="border-0">tel raqami</th>
                <th class="border-0 rounded-end">Amallar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mfysector as $mfyS)
              <tr>
                <td>{{$mfyS->id}}</td>
                <td>{{$mfyS->name}}</td>
                <td>{{$mfyS->director}}</td>
                <td>{{$mfyS->address}}</td>
                <td>{{$mfyS->tel}}</td>
                <td style="display: flex">
                  <form action="{{ route('mfysector.destroy', $mfyS->id) }}" method="POST" id="deleteForm{{ $mfyS->id }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger me-3" >
                          <i class="fa-solid fa-trash-can"></i>
                      </button>
                  </form>
                  <a href="{{ route('mfysector.edit', ['mfysector' => $mfyS->id]) }}">
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
