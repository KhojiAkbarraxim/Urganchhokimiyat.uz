<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuman tashkilotlarini qo'shish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br><br>
    <div class="container">
        <div class="box">
            <form id="createForm" action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Tashkilot nomini qo'shish">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Tashkilot turini qo'shish</label>
                    <select class="form-select" name="type_id" required>
                        @foreach ($companytypes as $companytype)
                            <option value="{{ $companytype->id }}">{{ $companytype->name_uz }}</option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="director" name="director"
                        placeholder="Tashkilot rahbarini qo'shish">
                    @error('director')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Tashkilot manzilini  qo'shish">
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="latitude" name="latitude"
                        placeholder="Tashkilot kenglikini  qo'shish">
                    @error('latitude')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="longitude" name="longitude"
                        placeholder="Tashkilot uzunlikini  qo'shish">
                    @error('longitude')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="tel" name="tel"
                        placeholder="Telefon raqam qo'shish">
                    @error('tel')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Tashkilot emailini  qo'shish">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="site_url" name="site_url"
                        placeholder="Saytini qo'shish">
                    @error('site_url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="description_uz" name="description_uz"
                        placeholder="O'zbekcha izoh qo'shish"></textarea>
                    @error('description_uz')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="description_eng" name="description_eng"
                        placeholder="Inglizcha izoh qo'shish"></textarea>
                    @error('description_eng')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="description_ru" name="description_ru"
                        placeholder="Ruscha izoh qo'shish"></textarea>
                    @error('description_ru')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{ route('company.index') }}"><button type="button" class="btn btn-secondary"
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
