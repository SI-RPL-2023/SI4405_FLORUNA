@extends('Admin.AdminTemplate')

@section('konten')
    <section id="DataUser" class="min-vh-100">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 g-5">
                @if (count($postingan) == 0)
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <h1 class="icon-none"><i class="bi bi-camera text-white"></i></h1>
                        <h1 class="display-4 fw-bold text-white">No Post Yet</h1>
                    </div>
                @endif
                @foreach ($postingan as $data)
                    <div class="col">
                        <div class="card h-100 bg-white p-4">
                            <div class="card-body text-center">
                                <div class="text-end"><a href="/data/postingan/delete/{{ $data->id }}"><i
                                            class="bi bi-trash-fill fs-3 text-danger"></i></a></div>
                                <h1 class="display-5">{{ $data->judul }}</h1>
                                <img src="{{ asset('upload/Postingan/' . $data->gambar) }}" alt="" width="300">
                                <div class="text-center my-2">
                                    <p>Lokasi : {{ $data->lokasi }}</p>
                                </div>
                                <div class="card-text mb-5">
                                    {{ $data->keterangan }}
                                </div>
                                @if ($data->status == 'Menunggu Konfirmasi')
                                    <a href="/data/postingan/konfirmasi/{{ $data->id }}"
                                        class="btn btn-success px-4">Konfirmasi</a>
                                @else
                                    <button disabled="disabled" class="btn btn-success">Terkonfirmasi</button>
                                @endif
                                <a href="/data/postingan/detail/{{ $data->id }}" class="btn btn-primary px-5">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
