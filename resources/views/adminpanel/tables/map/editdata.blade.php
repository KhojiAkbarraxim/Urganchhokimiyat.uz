<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot o'zgartirish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
</head>
<style>
    .box {
        width: 100%;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 16px;
        margin: 0 auto;
    }

    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 300px;
    }
</style>

<body>
    <div class="container">
        <div class="box">
            <h3><br>
                {{ $map->id }} - Malumot
            </h3>
            <br>
            <form id="editForm" action="{{ route('map.update', ['map' => $map->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group mb-3">
                    {{-- @error('title')     --}}
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
                    {{-- @enderror --}}
                    <div class="mb-3">
                        <p>Kenglik (Latitude)</p>
                        <input type="text" class="form-control" id="latitude" name="latitude"
                            value="{{ $map->latitude }}">
                    </div>
                    <div class="mb-3">
                        <p>Uzunlik (Longitude)</p>
                        <input type="text" class="form-control" id="latitude" name="longitude"
                            value="{{ $map->longitude }}">
                    </div>
                    <div class="mb-3">
                        <label for="categoryDataList" class="form-label">Obyekt turi</label>
                        <select class="form-select" name="obj_type" required>
                            @foreach(\App\Enums\ObjectTypes::cases() as $types)
                            <option value="{{ $types->value }}">{{ $types->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <p>Daraxtlar soni</p>
                        <input type="number" class="form-control" id="latitude" name="tree_count"
                            value="{{ $map->tree_count }}">
                    </div>
                    <div class="mb-3">
                        <p>Manzil</p>
                        <input type="text" class="form-control" id="latitude" name="address"
                            value="{{ $map->address }}">
                    </div>

                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2" onclick="submitForm()">O'zgartirish</button>
                    <a href="{{ route('map.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script>
        // Funktsiya yaratish, CKEditorni alohida maydonlar uchun ishga tushirish
        function initCKEditor(selector) {
            ClassicEditor
                .create(document.querySelector(selector))
                .catch(error => {
                    console.error(error);
                });
        }

        // CKEditorni alohida maydonlar uchun ishga tushirish
        initCKEditor('#text_uz');
        initCKEditor('#text_eng');
        initCKEditor('#text_ru');
    </script> --}}
    {{-- @extends('adminpanel.layouts.editAlert') --}}
    @section('content')
    @endsection
</body>

</html>
