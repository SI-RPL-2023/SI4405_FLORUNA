@extends('Admin.AdminTemplate')

@section('konten')
    <section id="DetailUser" class="min-vh-100">
        <div class="container py-5">
            <div class="card h-100 bg-white p-4">
                <div class="card-body text-center">
                    <h1 class="display-5">{{ $donasi->judul }}</h1>
                    <img src="{{ asset('upload/Donasi/' . $donasi->foto) }}" alt="" width="300">
                    <div class="card-text text-justify my-5">
                        <h2 class="fw-bold">Keterangan</h2>
                        {{ $donasi->keterangan }}
                    </div>

                    <div class="my-3 text-start">
                        <p>Tanggal Penutupan Donasi : <b>{{ $donasi->tutup }}</b></p>
                        <p>Status Donasi :
                            @if ($donasi->status == 'Terkonfirmasi')
                                <b class="text-success fw-bold">{{ $donasi->status }}</b>
                            @endif
                            @if ($donasi->status == 'Belum Terkonfirmasi')
                                <b class="text-danger fw-bold">{{ $donasi->status }}</b>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#konfirmasi"><i class="bi bi-pencil-square"></i></button>

                                <!-- Modal -->
                                <div class="modal fade" id="konfirmasi" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="konfirmasiLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="konfirmasiLabel">Konfrimasi Donasi</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                Apakah Anda Yakin Mengkonfirmasi Donasi?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <a href="/donasi/konfirmasi/{{ $donasi->id }}" class="btn btn-success">Konfrimasi</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </p>
                    </div>

                    <div class="text-end">
                        {{ $donasi->terkumpul / $donasi->target }}%
                    </div>
                    <div class="progress my-3" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: {{ $donasi->terkumpul / $donasi->target }}%"></div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <h2>Target Donasi</h2>
                            <h5>Rp {{ $donasi->target }}</h5>
                        </div>
                        <div class="col text-center">
                            <h2>Donasi Terkumpul</h2>
                            <h5>Rp {{ $donasi->terkumpul }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
