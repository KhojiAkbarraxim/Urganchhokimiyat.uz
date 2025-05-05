<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot o'zgartirish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="box">
            <br>
            <h3>
                {{ $company->id }} - Malumot
            </h3>
            <br>
            <form id="editForm" action="{{ route('company.update', ['company' => $company->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $company->name }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Tashkilot turini O'zgartirish</label>
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
                        value="{{ $company->director }}">
                        @error('director')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ $company->address }}"> 
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="latitude" name="latitude"
                        value="{{ $company->latitude }}"> 
                        @error('latitude')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="longitude" name="longitude"
                        value="{{ $company->longitude }}"> 
                        @error('longitude')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="tel" name="tel"
                        value="{{ $company->tel }}"> 
                        @error('tel')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ $company->email }}">
                         @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="site_url" name="site_url"
                        value="{{ $company->site_url }}">
                         @error('site_url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="description_uz" name="description_uz">{{ $company->description_uz }}</textarea> 
                    @error('description_uz')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="description_eng" name="description_eng">{{ $company->description_eng }}</textarea> 
                    @error('description_eng')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <textarea type="text" class="form-control" id="description_ru" name="description_ru">{{ $company->description_ru }}</textarea> 
                    @error('description_ru')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">O'zgartirish</button>
                    <a href="{{ route('company.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
            </form>
        </div>
    </div>
    @extends('adminpanel.layouts.editAlert')
    @section('content')
    @endsection
</body>

</html>
