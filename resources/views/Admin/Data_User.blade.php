@extends('Admin.AdminTemplate')

@section('konten')
    <section id="DataUser" class="min-vh-100">
        <div class="container my-5 py-5">
            <div class="row row-cols-1 row-cols-md-2 g-5">
                @foreach ($user as $users)
                    <div class="col">
                        <div class="card h-100 bg-secondary text-white p-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <i class="bi bi-person-circle display-1"></i>
                                    </div>
                                    <div class="col">
                                        <h1 class="display-6">{{ $users->username }}</h1>
                                        <h5 class="fw-light">{{ $users->email }}</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="bi bi-trash-fill fs-3"></i>
                                        <a href="/data/user/detail/{{ $users->id }}" class="text-white text-decoration-none"><i class="bi bi-eye fs-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
