@extends('Template.Template')

@section('konten')
    <div class="container min-vh-100">
        <div class="text-center my-5">
            <h1 class="display-6">Protect Our Planet By Donating</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="img">
                        <img src="{{ asset('src/img/animal.jpg') }}" class="card-img-top" alt="..."
                            style="object-fit: cover; max-height: 300px">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Judul Donasi</h5>
                        <div class="progress my-3" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <h4>Rp 430.000</h4>
                                <p>Terkumpul</p>
                            </div>
                            <div class="col text-center">
                                <h4>35 Hari</h4>
                                <p>Deadline</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-success w-100">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
