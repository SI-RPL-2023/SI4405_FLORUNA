@extends('Template.Template')

@section('konten')
    <section id="Postingan" class="bg-admin min-vh-100">
        <div class="container py-5">
            <div class="row bg-white g-5 my-5 py-5">
                <div class="col">
                    <div class="card h-100 border-0">
                        <img src="{{ asset('upload/Postingan/' . $news->gambar) }}" class="shadow-lg bg-body mx-auto"
                            width="300" alt="...">
                    </div>
                </div>
                <div class="col">
                    <h1 class="">{{ $news->judul }}</h1>
                    <p class="mb-4">{{ $news->lokasi }}</p>
                    <p class="text-justify">
                        {{ Str::limit($news->keterangan, 1000) }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
