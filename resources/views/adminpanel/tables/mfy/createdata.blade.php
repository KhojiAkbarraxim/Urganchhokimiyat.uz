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
            <form id="createForm" action="{{ route('mfy.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="MFY_nomi" name="name"
                        placeholder="MFY nomini qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="MFY_raisi" name="raisi"
                        placeholder="MFY raisini qo'shish">
                </div>
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Sektor qo'shish</label>
                    <select class="form-select" name="sector_id" required>
                        @foreach ($mfySs as $mfyS)
                            <option value="{{ $mfyS->id }}">{{ $mfyS->name }}</option>
                        @endforeach
                    </select>
                    @error('mfyS')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="tel" name="tel"
                        placeholder="Telefon raqam qo'shish">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{ route('logout') }}"><button type="button" class="btn btn-secondary"
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
