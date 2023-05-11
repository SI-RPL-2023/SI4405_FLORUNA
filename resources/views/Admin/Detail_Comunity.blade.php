@extends('Admin.AdminTemplate')

@section('konten')
    <section id="DetailUser" class="min-vh-100">
        <div class="container my-5 py-5 text-center">
            <h1 class="text-white">Detail Comunity</h1>
            <div class="bg-secondary p-5 text-white">
                <div class="text-center">
                    <i class="bi bi-person-circle display-1"></i>
                    <div class="mb-5">
                        <h1 class="display-6">Nama Komunitas : {{ $user->username }}</h1>
                        <h5 class="fw-light">Email Komunitas : {{ $user->email }}</h5>
                        <h5 class="fw-light">Tanggal Komunitas Daftar : {{ $user->created_at }}</h5>
                    </div>
                    <div class="mb-3">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, aut. Perferendis explicabo id
                            amet a harum animi, expedita ducimus quisquam tempore iusto sequi nemo aperiam tenetur minima
                            mollitia distinctio eaque vitae quibusdam cumque! Animi, eaque sint optio a repudiandae ipsum
                            adipisci saepe suscipit exercitationem molestias, itaque commodi voluptate laborum fugit.</p>
                    </div>
                </div>
            </div>
    </section>
@endsection
