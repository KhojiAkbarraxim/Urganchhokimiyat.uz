<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot qo'shish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="box"><br><br>
            <form id="createForm" action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title_uz" name="title_uz" placeholder="Mavzu o'zbekcha qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title_eng" name="title_eng" placeholder="Mavzu inglizcha qo'shish">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title_ru" name="title_ru" placeholder="Mavzu ruscha  qo'shish">
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="title_uz" name="content_uz" placeholder="Text o'zbekcha qo'shish"></textarea>
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="title_eng" name="content_eng" placeholder="Text inglizcha qo'shish"></textarea>
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="title_ru" name="content_ru" placeholder="Text ruscha  qo'shish"></textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="file" class="form-control" id="image_path" name="image_path">
                </div>
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Tashkilot turini qo'shish</label>
                    <select class="form-select" name="category_id" required>
                        @foreach ($eventtypes as $eventtype)
                            <option value="{{ $eventtype->id }}">{{ $eventtype->name_uz}}</option>
                        @endforeach
                    </select>
                    @error('eventtype')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{route('event.index')}}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    {{-- @extends('adminpanel.layouts.createAlert') --}}
    @section('content')
    @endsection
</body>

</html>
