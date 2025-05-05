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
            <form id="createForm" action="{{ route('schedule.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="categoryDataList" class="form-label">Hokimiyat vakilini qo'shish</label>
                    <select class="form-select" name="apparat_id" required>
                        <option value="">Tanlang</option>
                        @foreach ($apparats as $apparat)
                            <option value="{{ $apparat->id }}">{{ $apparat->ismi_sharifi }}</option>
                        @endforeach
                    </select>
                    @error('apparat_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="day"
                        placeholder="Qabul kunini qo'shish">
                    @error('day')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="time">Qabul vaqtini qo'shish</label>
                    <input type="text" class="form-control" id="time" name="time"
                        placeholder="Qabul vaqtini qo'shish">
                    @error('time')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_eng"
                        placeholder="Izoh (Eng) qo'shish">
                    @error('desc_eng')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_uz"
                        placeholder="Izoh (Uz) qo'shish">
                    @error('desc_uz')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_ru"
                        placeholder="Izoh (Ru) qo'shish">
                    @error('desc_ru')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{ route('schedule.index') }}"><button type="button" class="btn btn-secondary"
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
