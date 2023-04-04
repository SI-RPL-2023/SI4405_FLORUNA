@extends('Admin.AdminTemplate')

@section('konten')
    <section id="Dashboard" class="bg-secondary">
        <div class="container">
            <div class="donasi py-5">
                <div class="mb-2">
                    <a href="#" class="text-decoration-none"><h1 class="display-6 text-white">Donasi</h1></a>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-5 mt-5">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col">
                            <div class="card h-100 bg-secondary border-0">
                                <img src="{{ asset('src/img/underwater.jpg') }}" class="card-img shadow-lg bg-body"
                                    alt="...">
                                <div class="card-img-overlay bg-transparant">
                                    <div class="text-center">
                                        <h1 class="card-title text-white">Nama Hewan</h1>
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 p-4 text-white">
                                        <p>Target Donasi : Rp 150.000.000</p>
                                        <p>Jumlah Donasi : Rp 150.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="news pb-5">
                <div class="mb-2">
                    <a href="#" class="text-decoration-none"><h1 class="display-6 text-white">News</h1></a>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="col">
                                <div class="card border-0 h-100">
                                    <img src="{{ asset('donasi/Orang Utan.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Berita</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn btn-success px-4 mx-3">Detail</a>
                                        <a href="#" class="btn btn-danger px-4 mx-3">Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
