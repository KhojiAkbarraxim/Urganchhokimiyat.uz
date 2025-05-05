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
        <div class="box">
            <br>
            <br>
            <br>
            <form id="createForm" action="{{ route('mfysector.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Sektor nomini qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="director" name="director"
                        placeholder="Sektor rahbarini qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="tel" name="tel"
                        placeholder="Telefon raqam qo'shish">
                </div>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="address" name="address" 
                        placeholder="Manzilini qo'shish">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{ route('mfysector.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    {{-- @extends('adminpanel.layouts.js.createAlert') --}}
    @section('content')
    @endsection
</body>

</html>
