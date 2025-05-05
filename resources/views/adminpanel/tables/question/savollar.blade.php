@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Savollar')
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
            Savollar
          </li>
        </ol>
      </nav>
      <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
          <h1 class="h4">Savollar jadvali</h1>
        </div>
        <div>
          <a href="{{route('question.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
            Savollar qo'shish
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
                <th class="border-0">Savol_uz</th>
                <th class="border-0">Savol_eng</th>
                <th class="border-0">Savol_ru</th>
                <th class="border-0">Javob_uz</th>
                <th class="border-0">Javob_eng</th>
                <th class="border-0">Javob_ru</th>
                <th class="border-0 rounded-end">Amallar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($questions as $question)
              <tr>
                <td>{{$question->id}}</td>
                <td>{{$question->question_uz}}</td>
                <td>{{$question->question_eng}}</td>
                <td>{{$question->question_ru}}</td>
                <td>{{$question->answer_uz}}</td>
                <td>{{$question->answer_eng}}</td>
                <td>{{$question->answer_ru}}</td>
                <td style="display: flex">
                  <form action="{{ route('question.destroy', ['question' => $question->id]) }}" method="POST" id="deleteForm{{ $question->id }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger me-3" onclick="deleteSwallButton({{ $question->id }})">
                          <i class="fa-solid fa-trash-can"></i>
                      </button>
                  </form>
                  <a href="{{ route('question.edit', ['question' => $question->id]) }}">
                      <button type="submit" class="btn btn-success sat" >
                          <i class="fa-regular fa-pen-to-square text-white"></i>
                      </button>
                  </a>
              </td>
              </tr>
              @endforeach
              <!-- End of Item -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection  