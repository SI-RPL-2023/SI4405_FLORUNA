@extends('Admin.AdminTemplate')

@section('konten')
    <section id="Dashboard">
        <div class="container">
            <div class="donasi py-5">
                <div class="mb-2">
                    <a href="#" class="text-decoration-none">
                        <h1 class="display-6 text-white">Donasi</h1>
                    </a>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-5 mt-5">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($donasi as $data)
                        @if ($i == 3)
                        @break
                    @endif
                    <div class="col">
                        <div class="card h-100 border-0">
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
                                            Hari
                                        </h4>
                                        <p>Deadline</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        @if ($data->status == 'Belum Terkonfirmasi')
                                            <button href="#!" class="btn btn-warning w-100"
                                                disabled>{{ $data->status }}</button>
                                        @endif
                                        @if ($data->status == 'Terkonfirmasi')
                                            <button href="#!" class="btn btn-success w-100"
                                                disabled>{{ $data->status }}</button>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <a href="/data/donasi/detail/{{ $data->id }}"
                                            class="btn btn-primary w-100">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
        </div>

        <div class="news pb-5">
            <div class="mb-2">
                <a href="#" class="text-decoration-none">
                    <h1 class="display-6 text-white">News</h1>
                </a>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @php
                        $s = 0;
                    @endphp
                    @foreach ($news as $data)
                    @if ($s == 3)
                        @break
                    @endif
                        <div class="col">
                            <div class="card h-100 bg-white p-4">
                                <div class="card-body text-center">
                                    <div class="text-end"><a href="/data/postingan/delete/{{ $data->id }}"><i
                                                class="bi bi-trash-fill fs-3 text-danger"></i></a></div>
                                    <h1 class="display-5">{{ $data->judul }}</h1>
                                    <img src="{{ asset('upload/Postingan/' . $data->gambar) }}" alt=""
                                        width="300">
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
                                    <a href="/data/postingan/detail/{{ $data->id }}"
                                        class="btn btn-primary px-5">Detail</a>
                                </div>
                            </div>
                        </div>
                        @php
                            $s++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
