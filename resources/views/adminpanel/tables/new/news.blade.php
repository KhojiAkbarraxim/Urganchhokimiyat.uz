@extends('adminpanel.layouts.main')
@section('title', 'new.amudarya.uz admin - Yangiliklar')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Jadvallar</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Yangiliklar
                </li>
            </ol>
        </nav>
        <div class="d-flex align-items-center justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4 mb-0">Yangiliklar jadvali</h1>
            </div>

            <div class="d-flex align-items-center">
                <input type="date" class="me-2 rounded border-1 px-2" id="dateFilter"
                    style="width: 180px; height: 40px;" oninput="filterRows()" />
                <div class="mb-0 me-2">
                    <select class="form-select border-1" id="categoryFilter" name="category" required style="width: 120px;height: 40px;">
                        <option selected value="Barchasi">Barchasi</option>
                        <option value="Siyosiy">Siyosiy</option>
                        <option value="Ijtimoiy">Ijtimoiy</option>
                        <option value="Iqtisodiy">Iqtisodiy</option>
                        <option value="Ekologiya">Ekologiya</option>
                        <option value="Biznes">Biznes</option>
                        <option value="Statistika">Statistika</option>
                        <option value="Salomatlik">Salomatlik</option>
                    </select>
                </div>
                <a href="{{ route('newss.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Yangiliklar qo'shish
                </a>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Id</th>
                            <th class="border-0">Text</th>
                            <th class="border-0">Mavzu</th>
                            <th class="border-0">Kategoriya</th>
                            <th class="border-0">Text(eng)</th>
                            <th class="border-0">Mavzu(eng)</th>
                            <th class="border-0">Text(ru)</th>
                            <th class="border-0">Mavzu(ru)</th>
                            <th class="border-0">Rasm</th>
                            <th class="border-0">Yaratilgan Vaqti</th>
                            <th class="border-0">O'zgartirilgan Vaqti</th>
                            <th class="border-0 rounded-end">Amallar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newss as $news)
                            <!-- Item -->
                            <tr>
                                <td>{{ $news->id }}</td>
                                <td class="contentItem">{{ $news->title }}</td>
                                <td class="contentItem">{{ $news->content }}</td>
                                <td>{{ $news->category }}</td>
                                <td class="contentItem">{{ $news->eng_title }}</td>
                                <td class="contentItem">{{ $news->eng_content }}</td>
                                <td class="contentItem">{{ $news->ru_title }}</td>
                                <td class="contentItem">{{ $news->ru_content }}</td>
                                {{-- <td>{{ asset('images') . '/news/' . $news->image_path }}</td> --}}
                                <td><img src="{{ asset('images') . '/news/' . $news->image_path }}" alt="rasm" width="80"></td>
                                <td>{{ $news->created_at->format('d.m.Y') }}</td>
                                <td>{{ $news->updated_at->format('d.m.Y') }}</td>
                                <td style="display: flex">
                                    <form action="{{ route('newss.destroy', $news->id) }}" method="POST" id="deleteForm{{ $news->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-3" onclick="deleteSwallButton({{ $news->id }})">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('newss.edit', ['newss' => $news->id]) }}">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-regular fa-pen-to-square text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <!-- End of Item -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
