@extends('Admin.AdminTemplate')

@section('konten')
    <section id="Transaksi" class="min-vh-100">
        <div class="container my-5 py-5">
            <div class="bg-white p-5">
                <div class="text-center mb-5">
                    <h1 class="display-3">History Transaksi</h1>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Donasi</th>
                            <th scope="col">Donatur</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Pembayaran</th>
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
                                <td>{{ $data->user->username }}</td>
                                <td>Rp {{ $data->jumlah }}</td>
                                <td>{{ $data->pembayaran }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
