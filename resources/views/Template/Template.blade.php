<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Boostrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Floruna</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('src/img/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">DISCOVER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ABOUT</a>
                    </li>
                    @auth
                        @if (auth()->user()->role == 'Comunity')
                            <li class="nav-item"><a class="nav-link active" href="/posting">POSTING</a></li>
                        @endif
                    @endauth
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link active fw-bold">Sign In</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link fs-5 text-dark dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i> {{ auth()->user()->username }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    @if (auth()->user()->role == 'Admin')
                                        <li><a class="dropdown-item" href="/dashboard">Dashboard Admin</a></li>
                                    @endif
                                    @if (auth()->user()->role == 'Comunity')
                                        <li><a class="dropdown-item" href="/posting">Upload Postingan</a></li>
                                    @endif
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                </ul>
                            </div>

                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')

    <footer class="text-white text-center bg-dark p-2">
        <p>Copyright &copy; 2023. Floruna</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
