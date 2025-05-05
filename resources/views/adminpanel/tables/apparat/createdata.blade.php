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
    <div class="container">
        <div class="box">
            <form id="createForm" action="{{ route('apparat.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_uz" name="ismi_sharifi"
                            placeholder="Ismi sharifi qo'shish">
                        @error('ismi_sharifi')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <textarea id="text_uz" name="hodim_malumotlari" class="form-control rounded-3"
                        placeholder="Hodim malumotlari qo'shish..."></textarea>
                    @error('hodim_malumotlari')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                    <textarea id="text_uz" name="hodim_malumotlari_eng" class="form-control rounded-3"
                        placeholder="Inglizcha hodim malumotlari qo'shish..."></textarea>
                    @error('hodim_malumotlari_eng')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                    <textarea id="text_uz" name="hodim_malumotlari_ru" class="form-control rounded-3"
                        placeholder="Ruscha hodim malumotlari qo'shish..."></textarea>
                    @error('hodim_malumotlari_ru')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_eng" name="kasbi"
                            placeholder="Kasbini qo'shish">
                        @error('kasbi')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="title_eng" name="kasbi_ru"
                            placeholder="Kasbini rus tilida qo'shish">
                        @error('kasbi_ru')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="title_eng" name="kasbi_eng"
                            placeholder="Kasbini ingliz tilida qo'shish">
                        @error('kasbi_eng')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <textarea id="text_ru" name="majburiyati" class="form-control" placeholder="Majburiyatini qo'shish..."></textarea>
                    @error('majburiyati')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                    <textarea id="text_ru" name="majburiyati_ru" class="form-control" placeholder="Majburiyatini rus tilida qo'shish..."></textarea>
                    @error('majburiyati_ru')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                    <textarea id="text_ru" name="majburiyati_eng" class="form-control"
                        placeholder="Majburiyatini ingliz tilida qo'shish..."></textarea>
                    @error('majburiyati_eng')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_ru" name="tel"
                            placeholder="telefon raqami qo'shish">
                        @error('tel')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="title_ru" name="email"
                            placeholder="Email pochtani qo'shish">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title_ru" name="address"
                            placeholder="Manzilni qo'shish">
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                            <br>
                        @enderror
                    </div>

                </div>
                <div class="">
                    <label for="image" class="form-label">Rasmini qo'shish</label>
                    <input type="file" class="form-control mb-2" id="image" name="image_path">
                    @error('image_path')
                        <small class="text-danger">{{ $message }}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                </div>
                <a href="{{ route('apparat.index') }}">
                    <button type="button" class="btn btn-secondary">Chiqish</button></a>
            </form>
        </div>
    </div>
    <!-- Include SweetAlert script -->
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
    </script> --}}
    {{-- @extends('adminpanel.layouts.js.createAlert') --}}
    @section('content')
    @endsection
</body>

</html>
