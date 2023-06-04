@extends('Template.Template')

@section('konten')
    <section id="Profile">
        <div class="container">
            <div class="text-center">
                <h1 class="display-2 mb-3">Profile</h1>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6 text-center">
                    @if (!auth()->user()->foto)
                        <img src="{{ asset('src/img/user.png') }}" class="profile-img" alt="">
                    @endif
                    @if (auth()->user()->foto)
                        <img src="{{ asset('upload/foto-profile/'.auth()->user()->foto) }}" class="profile-img" alt="">
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="p-4 fs-4">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ auth()->user()->username }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Tipe User</td>
                                <td>:</td>
                                <td>{{ auth()->user()->role }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="text-end">
                    <a href="#" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#updateProfile">Update</i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="updateProfile" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="updateProfileLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="updateProfileLabel">Update Profile</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/update/profile" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body text-start">
                                        <div class="mb-3">
                                            <label for="foto">Foto</label>
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username">Nama</label>
                                            <input type="text" name="username" id="username" class="form-control"
                                                value="{{ auth()->user()->username }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-5">
        </div>
    </section>

    <section id="Riwayat">
        <div class="container mb-5">
            <div class="text-center mb-5">
                <h1 class="display-2">Riwayat Donasi</h1>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Donasi</th>
                        <th scope="col">Tanggal Bayar</th>
                        <th scope="col">Jumlah Donasi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($transaksi as $data)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $data->donasi->judul }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('j F Y') }}</td>
                            <td>Rp {{ $data->jumlah }}</td>
                            <td><a href="/donation/detail/{{ $data->donasi->id }}" class="btn btn-primary">Lihat Donasi</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
