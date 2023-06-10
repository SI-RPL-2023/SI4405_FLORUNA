@extends('Template.Template')

@section('konten')
    <section id="Header" class="min-vh-100">
        <div class="container-fluid bg-transparant py-5 min-vh-100">
            <div class="mt-5 pt-5">
                <div class="text-center mt-5 py-5">
                    <h1 class="display-1 fw-bold text-white mt-5 pt-5 mb-4">FLORUNA</h1>
                    <h3 class="fs-4 text-white fw-light">For A Better Place</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="Protect" class="min-vh-100 bg-white">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="display-6">Protect Our Planet</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-5 mt-5">
                <div class="col">
                    <div class="card h-100 border-0">
                        <img src="{{ asset('src/img/underwater.jpg') }}" class="card-img shadow-lg bg-body" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0">
                        <img src="{{ asset('src/img/forest.jpg') }}" class="card-img shadow-lg bg-body" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0">
                        <img src="{{ asset('src/img/animal.jpg') }}" class="card-img shadow-lg bg-body" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Donate" class="min-vh-100 bg-white">
        <div class="container-fluid bg-transparant py-5 min-vh-100">
            <div class="text-center my-5">
                <h1 class="display-6 text-white">Donate</h1>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($donasi as $data)
                        <div class="col">
                            <div class="card h-100">
                                <div class="img">
                                    <img src="{{ asset('/upload/Donasi/' . $data->foto) }}" class="card-img-top"
                                        alt="..." style="object-fit: cover; max-height: 300px">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Judul Donasi</h5>
                                    <div class="text-end">
                                        {{ $data->terkumpul / $data->target }}%
                                    </div>
                                    <div class="progress my-3" role="progressbar" aria-label="Example with label"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: {{ $data->terkumpul / $data->target }}%">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center">
                                            <h4>Rp {{ $data->terkumpul }}</h4>
                                            <p>Terkumpul</p>
                                        </div>
                                        <div class="col text-center">
                                            <h4>{{ \Carbon\Carbon::parse($data->tutup)->diffInDays(\Carbon\Carbon::now()) }}
                                                Hari</h4>
                                            <p>Deadline</p>
                                        </div>
                                    </div>
                                    <a href="/donation/detail/{{ $data->id }}" class="btn btn-success w-100">Donate</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="News" class="min-vh-100 bg-white">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="display-6">News</h1>
            </div>
            <div class="row g-5 mt-5">
                @if ($first != Null)
                    <div class="row g-5 my-5">
                        <div class="col">
                            <div class="card h-100 border-0">
                                <img src="{{ asset('upload/Postingan/' . $first->gambar) }}"
                                    class="shadow-lg bg-body mx-auto" width="300" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <h1 class="">{{ $first->judul }}</h1>
                            <p class="mb-4">{{ $first->lokasi }}</p>
                            <p class="text-justify">
                                {{ Str::limit($first->keterangan, 1000) }}
                            </p>

                            <div class="text-end mt-4">
                                <a href="/discover/news/detail/{{ $first->id }}" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="py-5 my-5 text-center">
                        <h1 class="icon-none"><i class="bi bi-camera"></i></h1>
                        <h1 class="display-4 fw-bold">No Post Yet</h1>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
