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
        <br>
        <h3>{{ $vacancy->id }} - Malumot</h3>
        <br>
        <form id="editForm" action="{{ route('vacancy.update', ['vacancy' => $vacancy->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <h5> Fayl joylash </h5> <br> <span class="d-block"> Ruxsat berilgan fayl turlari: <span
                        style="color:green">xls,xlsx,docx,doc,pdf</span></span>
                <input style="max-width: 35em; margin-right: 10px;" type="file" class="form-control d-inline"
                    id="file_path" name="file_path">
                <p class="fs-5 d-inline">(oldingi fayl: <span
                        style="color: rgb(13, 57, 168)">{{ $vacancy->file_path }}</span>)</p><br>
                @error('file_path')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <br>
            <div class="form-group mb-3">
                <label for="desc_uz">izoh (uz)</label>
                <input type="text" class="form-control" id="desc_uz" name="desc_uz"
                    value="{{ $vacancy->desc_uz }}">
                @error('desc_uz')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="desc_eng">izoh (eng)</label>
                <input type="text" class="form-control" id="desc_eng" name="desc_eng"
                    value="{{ $vacancy->desc_eng }}">
                @error('desc_eng')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="desc_ru">izoh (ru)</label>
                <input type="text" class="form-control" id="desc_ru" name="desc_ru"
                    value="{{ $vacancy->desc_ru }}">
                @error('desc_ru')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-2" onclick="submitForm()">O'zgartirish</button>
                <a href="{{ route('vacancy.index') }}"><button type="submit" class="btn btn-secondary"
                        data-bs-dismiss="modal">Chiqish</button></a>
            </div>
        </form>
    </div>
    </div>
    </div>
    {{-- @extends('adminpanel.layouts.editAlert') --}}
    @section('content')
    @endsection
</body>

</html>
