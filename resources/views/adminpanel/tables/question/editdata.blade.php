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
            <h3>{{$question->id}} - Malumot</h3>
            <br>
            <form id="createForm" action = "{{ route('question.update', ['question' => $question->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="form-control" id="form-control">(ENG) Savolni O'zgartirish</label>
                    <input type="text" class="form-control" id="question" name="question_eng"
                        value="{{ $question->question_eng }}">
                </div>
                <div class="form-group mb-3">
                    <label for="form-control" id="form-control">(RU) Savolni O'zgartirish</label>
                    <input type="text" class="form-control" id="question" name="question_ru"
                        value="{{ $question->question_ru }}">
                </div>
                <div class="form-group mb-3">
                    <label for="form-control" id="form-control">(UZ) Savolni O'zgartirish</label>
                    <input type="text" class="form-control" id="question" name="question_uz"
                        value="{{ $question->question_uz }}">
                </div>
                <div class="form-group mb-3">
                    <label for="form-control" id="form-control">(ENG) Javobni O'zgartirish</label>
                    <input type="text" class="form-control" id="answer" name="answer_eng"
                        value="{{ $question->answer_eng }}">
                </div>
                <div class="form-group mb-3">
                    <label for="form-control" id="form-control">(RU) Javobni O'zgartirish</label>
                    <input type="text" class="form-control" id="answer" name="answer_ru"
                        value="{{ $question->answer_ru }}">
                </div>
                <div class="form-group mb-3">
                    <label for="form-control" id="form-control">(UZ) Javobni O'zgartirish</label>
                    <input type="text" class="form-control" id="answer" name="answer_uz"
                        value="{{ $question->answer_uz }}">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">O'zgartirish</button>
                    <a href="{{ route('question.index') }}" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Chiqish</a>
                </div>
            </form>
        </div>
    </div>
    {{-- @extends('adminpanel.layouts.editAlert') --}}
    @section('content')
    @endsection
</body>

</html>
