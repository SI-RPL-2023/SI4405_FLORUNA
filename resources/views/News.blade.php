@extends('Template.Template')

@section('konten')
    <section id="News" class="min-vh-100 bg-white">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="display-6">Discover Latest News</h1>
            </div>
            @if ($first)
                <div class="row g-5 my-5">
                    <div class="col">
                        <div class="card h-100 border-0">
                            <img src="{{ asset('upload/Postingan/' . $first->gambar) }}" class="shadow-lg bg-body mx-auto"
                                width="300" alt="...">
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
                <h1 class="fs-5 mb-3">Another News</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($postingan as $data)
                        <div class="col">
                            <div class="card h-100 text-white shadow-lg border-0" style="max-height: 300px">
                                <img src="{{ asset('upload/Postingan/' . $data->gambar) }}" class="card-img"
                                    style="object-fit: cover;max-height: 300px" alt="...">
                                <div class="card-img-overlay">
                                    <h1 class="">{{ $data->judul }}</h1>
                                    <p class="mb-4">{{ $data->lokasi }}</p>
                                    <p class="text-justify">
                                        {{ Str::limit($data->keterangan, 200) }}
                                    </p>
                                    <div class="text-end mt-4">
                                        <a href="/discover/news/detail/{{ $data->id }}" class="btn btn-success">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                    <h1 class="icon-none"><i class="bi bi-camera"></i></h1>
                    <h1 class="display-4 fw-bold">No Post Yet</h1>
                </div>
            @endif
        </div>
    </section>
@endsection
