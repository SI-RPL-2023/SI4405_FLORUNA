@extends('Template.Template')

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
                    </div>

                    <div class="text-end">
                        {{ $donasi->terkumpul / $donasi->target *100 }}%
                    </div>
                    <div class="progress my-3" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: {{ $donasi->terkumpul / $donasi->target *100 }}%"></div>
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

                    <div class="my-5">
                        @guest
                            <a href="/login" class="btn btn-success w-100">Donate</a>
                        @endguest
                        @auth
                            <button class="btn btn-success w-100" data-bs-toggle="modal"
                                data-bs-target="#donate">Donate</button>
                        @endauth
                        <!-- Modal -->
                        <div class="modal fade" id="donate" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="donateLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="/donate/input" method="post">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="donateLabel">Donate</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" value="{{ $donasi->id }}" hidden name="donasi_id">
                                            <div class="mb-3 text-start">
                                                <label for="jumlah">Jumlah Donasi</label>
                                                <input type="number" name="jumlah" id="jumlah" class="form-control">
                                            </div>
                                            <div class="mb-3 text-start">
                                                <label for="pembayaran">Pembayaran</label>
                                                <select name="pembayaran" id="pembayaran" class="form-select">
                                                    <option value="Bank BRI">Bank BRI</option>
                                                    <option value="Bank Mandiri">Bank Mandiri</option>
                                                    <option value="Bank BCA">Bank BCA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-success">Donate</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
