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
            <form id="createForm" action="{{ route('reception.store') }}" method="POST">
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
                    <input type="text" class="form-control" id="title" name="qabul_joyi_manzili"
                        placeholder="Qabul manzili qo'shish">
                    @error('qabul_joyi_manzili')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="datetime-local" class="form-control" id="title" name="begin_date"
                        placeholder="Boshlangich sana qo'shish">
                    @error('begin_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_eng"
                        placeholder="Izoh (Eng) qo'shish">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_uz"
                        placeholder="Izoh (Uz) qo'shish">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_ru"
                        placeholder="Izoh (Ru) qo'shish">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{ route('reception.index') }}"><button type="button" class="btn btn-secondary"
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
