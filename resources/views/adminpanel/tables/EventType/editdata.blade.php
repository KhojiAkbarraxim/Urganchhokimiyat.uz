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
    <div class="container"><br>
        <h3>ID - {{ $type->id }}</h3>
        <div class="box"><br>
            <br>
            <form id="editForm" action="{{ route('types.update', ['type' => $type->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="name_uz" name="name_uz"
                        value="{{ $type->name_uz }}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="name_eng" name="name_eng"
                        value="{{ $type->name_eng }}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="name_ru" name="name_ru"
                        value="{{ $type->name_ru }}">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">O'zgartirish</button>
                    <a href="{{ route('types.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    {{-- @extends('adminpanel.layouts.editAlert') --}}
    @section('content')
    @endsection
</body>

</html>
