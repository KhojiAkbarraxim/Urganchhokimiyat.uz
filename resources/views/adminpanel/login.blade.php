<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>new.amudarya.uz - Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="new.amudarya.uz - Login page">
    <meta name="author" content="Themesberg">
    <meta name="description" content="">
    <meta name="keywords" content="new.amudarya" />
    <!-- Volt CSS -->
    <link type="text/css" href="/assets/css/volt.css" rel="stylesheet">
    <!-- FontAwesone  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <main>
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image"
                    data-background-lg="../../assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Login</h1>
                            </div>
                            {{-- @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif --}}
                            @if (session('error'))
                                <h4 class="text-danger">
                                    {{session('error')}}
                                </h4>
                            @endif
                            <form action="{{ route('auth') }}" class="mt-4" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="username">Your username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="" id="username"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <input type="password" placeholder="" class="form-control" id="password"
                                                name="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/volt.js"></script>
</body>
</html>
