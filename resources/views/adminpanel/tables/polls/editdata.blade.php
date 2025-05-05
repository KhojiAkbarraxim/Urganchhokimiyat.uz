<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot o'zgartirish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="box">
            <br>
            <h3>
                {{ $poll->id }} - Ma'lumot
            </h3>
            <br>
            <form action="{{ route('polls.update', ['poll' => $poll->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Tashkilotni yangilash</label>
                    <select class="form-select" name="company_id" required>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                    @error('mfyS')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="question" name="question"
                        placeholder="Savolni qo'shish" value="{{$poll->question}}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="question_eng" name="eng_question"
                        placeholder="Savolni ingliz tilida qo'shish" value="{{$poll->eng_question}}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="question_ru" name="ru_question"
                        placeholder="Savolni rus tilida qo'shish" value="{{$poll->ru_question}}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="begin_date" name="begin_date"
                        placeholder="Boshlanish sanasini qo'shish" value="{{$poll->begin_date}}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="end_date" name="end_date"
                        placeholder="Tugash sanasini qo'shish" value="{{$poll->end_date}}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="publish_limit" name="publish_limit"
                        placeholder="Nashr qilish chegarasini qo'shish" value="{{$poll->publish_limit}}">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{route('polls.index')}}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    @extends('adminpanel.layouts.editAlert')
    @section('content')
    @endsection
</body>

</html>
