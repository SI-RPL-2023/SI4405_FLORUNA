@extends('Template.Template')

@section('konten')
    <section id="Postingan" class="bg-secondary min-vh-100">
        <div class="container py-5">
            <div class="card h-100 bg-white p-4">
                <div class="card-body text-center">
                    <div class="text-end"><a href="/data/postingan/delete/{{ $posting->id }}"><i
                                class="bi bi-trash-fill fs-3 text-danger"></i></a></div>
                    <h1 class="display-5">{{ $posting->judul }}</h1>
                    <img src="{{ asset('upload/Postingan/' . $posting->gambar) }}" alt="" width="300">
                    <div class="text-center my-2">
                        <p>Lokasi : {{ $posting->lokasi }}</p>
                    </div>
                    <div class="card-text mb-5">
                        {{ $posting->keterangan }}
                    </div>
                    @if ($posting->status == 'Terkonfirmasi')
                        <button disabled="disabled" class="btn btn-success">Terkonfirmasi</button>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
