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
        <br>
        <h3>
            {{ $apparat->id }} - Malumot
        </h3>
        <br>
        <div class="box">
            <form id="editForm" action="{{ route('apparat.update', ['apparat' => $apparat->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <label for="ismi_sharifi">Ismi Sharifi</label>
                        <input type="text" class="form-control" id="ismi_sharifi" name="ismi_sharifi"
                            value="{{ $apparat->ismi_sharifi }}">
                        @error('ismi_sharifi')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hodim_malumotlari">Hodim malumotlari (uz)</label>
                        <textarea type="text" class="form-control" id="hodim_malumotlari" name="hodim_malumotlari">{{ $apparat->hodim_malumotlari }}</textarea>
                        @error('hodim_malumotlari')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror 
                    </div>
                    <div class="mb-3">
                        <label for="hodim_malumotlari_eng">Hodim malumotlari (eng)</label>
                        <textarea type="text" class="form-control" id="hodim_malumotlari_eng" name="hodim_malumotlari_eng">{{ $apparat->hodim_malumotlari_eng }}</textarea>
                        @error('hodim_malumotlari_eng')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hodim_malumotlari_ru">Hodim malumotlari (ru)</label>
                        <textarea type="text" class="form-control" id="hodim_malumotlari_ru" name="hodim_malumotlari_ru">{{ $apparat->hodim_malumotlari_ru }}</textarea>
                        @error('hodim_malumotlari_ru')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <label for="kasbi">Kasbi (uz)</label>
                        <input type="text" class="form-control" id="kasbi" name="kasbi"
                            value="{{ $apparat->kasbi }}">
                        @error('kasbi')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kasbi_eng">Kasbi (eng)</label>
                        <input type="text" class="form-control" id="kasbi_eng" name="kasbi_eng"
                            value="{{ $apparat->kasbi_eng }}">
                        @error('kasbi_eng')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kasbi_ru">Kasbi (ru) </label>
                        <input type="text" class="form-control" id="kasbi_ru" name="kasbi_ru"
                            value="{{ $apparat->kasbi_ru }}">
                        @error('kasbi_ru')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                </div>
                <label for="majburiyati">Majburiyati (uz)</label>
                <textarea type="text" id="majburiyati" name="majburiyati" class="form-control">{{ $apparat->majburiyati }}</textarea>
                @error('majburiyati')
                    <small class="text-danger">{{ $message }}</small>
                    <br>
                @enderror
                <label for="majburiyati_eng">Majburiyati (eng)</label>
                <textarea type="text" id="majburiyati_eng" name="majburiyati_eng" class="form-control">{{ $apparat->majburiyati_eng }}</textarea>
                @error('majburiyati_eng')
                    <small class="text-danger">{{ $message }}</small>
                    <br>
                @enderror
                <label for="majburiyati_ru">Majburiyati (ru)</label>
                <textarea type="text" id="majburiyati_ru" name="majburiyati_ru" class="form-control">{{ $apparat->majburiyati_ru }}</textarea>
                @error('majburiyati_ru')
                    <small class="text-danger">{{ $message }}</small>
                    <br>
                @enderror
                <label for=""></label>
                <div class="mb-3">
                    <label for="tel">Telefon raqami</label>
                    <input type="text" class="form-control" id="tel" name="tel"
                        value="{{ $apparat->tel }}">
                    @error('tel')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Emaili</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ $apparat->email }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address">Manzili</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ $apparat->address }}">
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image_path" class="form-label">Rasm qo'shish</label>
                    <input type="file" class="form-control" id="image_path" name="image_path" style=" z-index: 1;"
                        value="{{ $apparat->image_path }}">
                    @error('image_path')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                    <br>
                    <img src="{{ asset('images/apparats') . '/' . $apparat->image_path }}" alt="l"
                        width="60" name="image_name">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">O'zgartirish</button>
                    <a href="{{ route('apparat.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    @extends('adminpanel.layouts.editAlert') --}}
    @section('content')
    @endsection
</body>

</html>
