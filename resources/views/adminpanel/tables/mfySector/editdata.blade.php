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
        <h3>ID - {{$mfysector->id}}</h3>
        <br>
        <div class="box">
            <form id="editForm" action="{{ route('mfysector.update', ['mfysector' => $mfysector->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="MFY_nomi" name="name"
                        value="{{ $mfysector->name }}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="MFY_raisi" name="director"
                        value="{{ $mfysector->director }}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="tel_nomer" name="tel"
                        value="{{ $mfysector->tel }}">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ $mfysector->address }}">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2" onclick="submitForm()">O'zgartirish</button>
                    <a href="{{ route('mfysector.index') }}"><button type="button" class="btn btn-secondary"
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
