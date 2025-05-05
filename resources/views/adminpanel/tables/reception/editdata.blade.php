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
        <div class="box"><br>
           <h3>  {{$reception ->id}} - Malumot </h3>
            <br>
            <form id="editForm" action="{{ route('reception.update', ['reception' => $reception->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group mb-3">
                    <label for="">Hokimiyat vakilini tanlang</label>
                    <select class="form-select" name="apparat_id" required>
                        <option value="">Tanlang</option>
                        @foreach ($apparats as $apparat)
                            <option value="{{ $apparat->id }}">{{ $apparat->ismi_sharifi }}</option>
                        @endforeach
                    </select>
                </div>
                <p>Qabul joy manzili</p>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="qabul_joyi_manzili"
                        value="{{ $reception->qabul_joyi_manzili }}">
                </div>
                <p>Boshlang'ich sanasi</p>
                <div class="form-group mb-3">
                    <input type="datetime-local" class="form-control" id="title" name="begin_date"
                        value="{{ $reception->begin_date }}">
                </div>
                <p>Izoh (eng)</p>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_eng"
                        value="{{ $reception->desc_eng }}">
                </div>
                <p>Izoh (uz)</p>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_uz"
                        value="{{ $reception->desc_uz }}">
                </div>
                <p>Izoh (ru)</p>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="title" name="desc_ru"
                        value="{{ $reception->desc_ru }}">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">O'zgartirish</button>
                    <a href="{{ route('reception.index') }}"><button type="button" class="btn btn-secondary"
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
