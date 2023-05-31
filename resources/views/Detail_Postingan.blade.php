@extends('Template.Template')

@section('konten')
    <section id="Postingan" class="bg-admin min-vh-100">
        <div class="container py-5">
            <div class="row bg-white g-5 my-5">
                <div class="text-end">
                    <a href="/data/postingan/delete/{{ $posting->id }}"><i
                            class="bi bi-trash-fill fs-3 text-danger"></i></a>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 border-0">
                        <img src="{{ asset('upload/Postingan/' . $posting->gambar) }}" class="shadow-lg bg-body mx-auto"
                            width="300" alt="...">
                    </div>
                </div>
                <div class="col">

                    <h1 class="">{{ $posting->judul }}</h1>
                    <p class="mb-4">{{ $posting->lokasi }}</p>
                    <p class="text-justify">
                        {{ Str::limit($posting->keterangan, 1000) }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
