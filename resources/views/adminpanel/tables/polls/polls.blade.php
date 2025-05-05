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
            So'rovnomalar
          </li>
        </ol>
      </nav>
      <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
          <h1 class="h4 mb-0">So'rovnoma jadvali</h1>
        </div>
        <div>
          <a href="{{route('polls.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
            So'rovnoma qo'shish
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
                <th class="border-0">Savol (uz)</th>
                <th class="border-0">Savol (eng)</th>
                <th class="border-0">Savol (ru)</th>
                <th class="border-0">A'lo</th>
                <th class="border-0">Yaxshi</th>
                <th class="border-0">Qoniqarli</th>
                <th class="border-0">Qoniqarsiz</th>
                <th class="border-0">Boshlanish sanasi</th>
                <th class="border-0">Tugash sanasi</th>
                <th class="border-0">Nashr qilish vaqt chegarasi</th>
                <th class="border-0">Yaratilgan sana</th>
                <th class="border-0">O'zgartirilgan sana</th>
                <th class="border-0 rounded-end">Amallar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $polls as $poll)
              <tr>
                <td class="contentItem"> {{$poll->id}}</td>
                <td class="contentItem"> {{$poll->companies->name}}</td>
                <td class="contentItem"> {{$poll->question}}</td>
                <td class="contentItem"> {{$poll->ru_question}}</td>
                <td class="contentItem"> {{$poll->eng_question}}</td>
                <td class="contentItem"> {{$poll->great}}</td>
                <td class="contentItem"> {{$poll->good}}</td>
                <td class="contentItem"> {{$poll->acceptable}}</td>
                <td class="contentItem"> {{$poll->unacceptable}}</td>
                <td class="contentItem"> {{$poll->begin_date}}</td>
                <td class="contentItem"> {{$poll->end_date}}</td>
                <td class="contentItem"> {{$poll->publish_limit}}</td>
                <td class="contentItem"> {{$poll->created_at}}</td>
                <td class="contentItem"> {{$poll->updated_at}}</td> 
                <td style="display: flex" >
                  <form action="{{ route('polls.destroy', $poll->id) }}" method="POST" id="deleteForm{{ $poll->id }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger me-3" onclick="deleteSwallButton({{ $poll->id }})">
                          <i class="fa-solid fa-trash-can"></i>
                      </button>
                  </form>
                  <a href="{{ route('polls.edit', ['poll' => $poll->id]) }}">
                      <button type="submit" class="btn btn-success">
                          <i class="fa-regular fa-pen-to-square text-white"></i>
                      </button>
                  </a>
              </td>
                <td></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection
