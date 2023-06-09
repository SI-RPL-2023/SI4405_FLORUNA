@extends('Admin.AdminTemplate')

@section('konten')
    <div class="container bg-admin min-vh-100">
        <div class="text-center my-5">
            <h1 class="display-6 text-white">Data Donasi</h1>
        </div>
        <div class="mb-3">
            <a href="/data/donasi/add" class="btn bg-yellow">Tambah Data + </a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($donasi as $data)
                <div class="col">
                    <div class="card h-100 border-0">
                        <div class="img">
                            <img src="{{ asset('/upload/Donasi/' . $data->foto) }}" class="card-img-top" alt="..."
                                style="object-fit: cover; max-height: 300px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->judul }}</h5>
                            <div class="text-end">
                                {{ ($data->terkumpul / $data->target) * 100 }}%
                            </div>
                            <div class="progress my-3" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{ ($data->terkumpul / $data->target) * 100 }}%"></div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <h4>Rp {{ $data->terkumpul }}</h4>
                                    <p>Terkumpul</p>
                                </div>
                                <div class="col text-center">
                                    <h4>{{ \Carbon\Carbon::parse($data->tutup)->diffInDays(\Carbon\Carbon::now()) }} Hari
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
            @endforeach
        </div>
    </div>
@endsection
