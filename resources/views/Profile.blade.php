@extends('Template.Template')

@section('konten')
    <section id="Profile">
        <div class="container">
            <div class="text-center">
                <h1 class="display-2 mb-3">Profile</h1>
            </div>
            <div class="row align-items-center py-5">
                <div class="col-md-6">
                    <img src="{{ asset('src/img/user.png') }}" class="profile-img" alt="">
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
                    <a href="#" class="btn btn-success">Update</i></a>
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
                    @for ($i = 1; $i < 6; $i++)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>Donasi Orang Utan</td>
                        <td>02 April 2023</td>
                        <td>Rp 150.000</td>
                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>
@endsection
