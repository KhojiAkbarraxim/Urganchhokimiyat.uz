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
            <br>
            <h3>
                {{ $newss->id }} - Malumot
            </h3>
            <br>
            <form id="editForm" action="{{ route('newss.update', ['newss' => $newss->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Mavzu qo'shish" value="{{ $newss->title }}">
                    </div>
                    <textarea id="text_uz" name="content" class="form-control rounded-3" placeholder="Text qo'shish...">{{ $newss->content }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title" name="eng_title"
                            placeholder="Mavzuni ingliz tilida qo'shish" value="{{ $newss->eng_title }}">
                    </div>
                    <textarea id="text_eng" name="eng_content" class="form-control"placeholder="Textni ingliz tilida qo'shish...">{{ $newss->eng_content }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="title" name="ru_title"
                            placeholder="Mavzuni rus tilida qo'shish" value="{{ $newss->ru_title }}">
                    </div>
                    <textarea id="text_ru" name="ru_content" class="form-control"placeholder="Textni rus tilida qo'shish...">{{ $newss->ru_content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Kategoriya qo'shish</label>
                    <select class="form-select" name="category">
                        @foreach(\App\Enums\NewsCategoryEnum::cases() as $category)
                        <option value="{{ $category->value }}">{{ $category->value }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="mb-3">
                    {{-- <label class="form-label">Rasm qo'shish</label> --}}
                    <h5> Rasm O'zgartirish </h5> Ruxsat berilgan fayl turlari: <span
                        style="color:green">png,jpg,jpeg</span>
                    <input type="file" class="form-control" name="image_path" style=" z-index: 1;"
                        value="{{ $newss->image_path }}">
                    <br>
                    @if (isset($newss->image_path))
                        <label for="">oldingi rasm</label>
                    <img src="{{ asset('images/news') . '/' . $newss->image_path }}" alt="oldin rasm bo'lmagan" width="380" height="180" style="border: 1px solid black"
                        name="image_name">
                    @else
                        <h5 style="color: red">oldin rasm bo'lamgan</h6>
                    @endif
                    
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="button" class="btn btn-primary me-2" onclick="submitForm()">O'zgartirish</button>
                    <a href="{{ route('newss.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
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
    @extends('adminpanel.layouts.editAlert')
    @section('content')
    @endsection
</body>

</html>
