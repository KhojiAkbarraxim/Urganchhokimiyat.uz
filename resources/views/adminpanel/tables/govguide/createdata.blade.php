<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumot Qo'shish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <br>
        <div class="box">
            <form id="createForm" action="{{ route('govguide.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <h5> Fayl joylash </h5> <br> Ruxsat berilgan fayl turlari: <span
                        style="color:green">xls,xlsx,docx,doc,pdf</span>
                    <input style="width: 35rem" type="file" class="form-control" id="file_path" name="file_path">
                    @error('file_path')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="desc_uz" name="desc_uz"
                        placeholder="izoh (uz) qo'shish">
                    @error('desc_uz')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="desc_ru" name="desc_ru"
                        placeholder="izoh (ru) qo'shish">
                    @error('desc_ru')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="desc_eng" name="desc_eng"
                        placeholder="izoh (eng) qo'shish">
                    @error('desc_eng')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Qo'shish</button>
                    <a href="{{ route('govguide.index') }}"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Chiqish</button></a>
                </div>
        </div>
        </form>
    </div>
    </div>
    {{-- @extends('adminpanel.layouts.createAlert') --}}
    @section('content')
    @endsection
</body>

</html>
