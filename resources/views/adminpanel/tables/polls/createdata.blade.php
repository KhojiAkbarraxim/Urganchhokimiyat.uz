<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot qo'shish</title>
    <link href="https://cdn.jsdelivr.net/npm/x@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="box">
            <form id="createForm" action="{{route('polls.store')}}"  method="POST">
                @csrf
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Tashkilotni qo'shish</label>
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
                    <label for="image" class="form-label">Savol qo'shish</label>
                    <input type="text" class="form-control" id="question" name="question"
                        placeholder="Savolni qo'shish">
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Savolni ingliz tilida qo'shish</label>
                    <input type="text" class="form-control" id="question_eng" name="eng_question"
                        placeholder="Savolni ingliz tilida qo'shish">
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Savolni rus tilida qo'shish</label>
                    <input type="text" class="form-control" id="question_ru" name="ru_question"
                        placeholder="Savolni rus tilida qo'shish">
                </div>
                <div class="form-group mb-3">
                    <label for="begin_date" class="form-label">Boshlanish sanasini qo'shish</label>
                    <input type="datetime-local" class="form-control" id="begin_date" name="begin_date"
                        placeholder="Boshlanish sanasini qo'shish">
                </div>
                <div class="form-group mb-3">
                    <label for="end_date" class="form-label">Tugash sanasini qo'shish</label>
                    <input type="datetime-local" class="form-control" id="end_date" name="end_date"
                        placeholder="Tugash sanasini qo'shish">
                </div>
                <div class="form-group mb-3">
                    <label for="end_date" class="form-label">Nashr qilish vaqt chegarasini qo'shish</label>
                    <input type="datetime-local" class="form-control" id="publish_limit" name="publish_limit"
                        placeholder="Nashr qilish vaqt chegarasini qo'shish">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{route('polls.index')}}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    {{-- @extends('adminpanel.layouts.createAlert') --}}
    @section('content')
    @endsection
</body>

</html>
