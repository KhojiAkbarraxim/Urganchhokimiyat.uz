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
            {{ $event->id }} - Malumot
        </h3>
        <br>
        <div class="box">
            <form id="editForm" action="{{ route('event.update', ['event' => $event->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="title" name="title_uz">{{ $event->title_uz }}</textarea>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="title" name="title_eng">{{ $event->title_eng }}</textarea>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="title" name="title_ru">{{ $event->title_ru }}</textarea>
                    </div>
                </div>
                <textarea id="text_ru" name="content_uz" class="form-control">{{ $event->content_uz }}</textarea>
                <textarea id="text_ru" name="content_eng" class="form-control">{{ $event->content_eng }}</textarea>
                <textarea id="text_ru" name="content_ru" class="form-control">{{ $event->content_ru }}</textarea>
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Tashkilot turini</label>
                    <select class="form-select" name="category_id" required>
                        @foreach ($eventtypes as $eventtype)
                            <option value="{{ $eventtype->id }}">{{ $eventtype->name_uz}}</option>
                        @endforeach
                    </select>
                    @error('eventtype')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Rasm qo'shish</label>
                    <input type="file" class="form-control" name="image_path" style=" z-index: 1;"
                        value="{{ $event->image_path }}">
                    <br>
                    <img src="{{ asset('images/events') . '/' . $event->image_path }}" alt="l" width="60"
                        name="image_name">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">O'zgartirish</button>
                    <a href="{{ route('event.index') }}"><button type="button" class="btn btn-secondary"
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
