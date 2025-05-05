<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot qo'shish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="box"><br><br>
            <form id="createForm" action = "{{route('question.store')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="question" name="question_eng"
                        placeholder="(ENG) Savolni qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="question" name="question_uz"
                        placeholder="(UZ) Savolni qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="question" name="question_ru"
                        placeholder="(RU) Savolni qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="answer" name="answer_eng"
                        placeholder="(ENG) Javobni qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="answer" name="answer_uz"
                        placeholder="(UZ) Javobni qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="answer" name="answer_ru"
                        placeholder="(RU) Javobni qo'shish">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{route('question.index')}}" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiqish</a>
                </div>
            </form>
        </div>
    </div>
    {{-- @extends('adminpanel.layouts.js.createAlert') --}}
    @section('content')
    @endsection
</body>

</html>
