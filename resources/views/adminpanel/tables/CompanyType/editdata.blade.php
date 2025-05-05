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
            <h3>{{ $companytype->id }} - Malumot</h3>
            <br>
            <form id="editForm" action="{{ route('companytype.update', ['companytype' => $companytype->id]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">

                    <span>
                        <label for="name">Tashkilot turi (uz)</label><input type="text" class="form-control"
                            id="name" name="name_uz" value="{{ $companytype->name_uz }}">
                        @error('name_uz')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror <br><br>
                    </span>
                    <label for="name_eng">Tashkilot turi (eng)</label>
                    <input type="text" class="form-control" id="name_eng" name="name_eng"
                        value="{{ $companytype->name_eng }}">
                    @error('name_eng')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror <br><br>
                    <label for="name_ru">Tashkilot turi (ru)</label>
                    <input type="text" class="form-control" id="name_ru" name="name_ru"
                        value="{{ $companytype->name_ru }}">
                    @error('name_ru')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">O'zgartirish</button>
                    <a href="{{ route('companytype.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    @extends('adminpanel.layouts.editAlert')
    @section('content')
    @endsection
</body>

</html>
