<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot qo'shish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
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

    .ck-file-dialog-button,
    .ck.ck-dropdown .ck-button.ck-dropdown__button:not(.ck-button_with-text) {
        display: none !important;
    }
</style>

<body>
    <div class="container"><br><br>
        <div class="box">
            <form id="createForm" action="{{ route('map.store') }}" method="POST">
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
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_uz" name="latitude"
                            placeholder="kenglik (latitude)" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_eng" name="longitude"
                            placeholder="uzunlik (longitude)" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_ru" name="address" placeholder="manzil"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Obyekt turi</label>
                    <select class="form-select" name="obj_type" required>
                        @foreach(\App\Enums\ObjectTypes::cases() as $types)
                        <option value="{{ $types->value }}">{{ $types->value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_ru" name="tree_count"
                            placeholder="daraxtlar soni">
                    </div>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{ route('map.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    <!-- Include SweetAlert script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
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
    </script>
    {{-- @extends('adminpanel.layouts.js.createAlert') --}}
    @section('content')
    @endsection
</body>

</html>
