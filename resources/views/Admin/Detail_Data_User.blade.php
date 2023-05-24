@extends('Admin.AdminTemplate')

@section('konten')
    <section id="DetailUser" class="min-vh-100">
        <div class="container py-5">
            <h1 class="text-white">Detail User</h1>
            <div class="bg-secondary p-5 text-white">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <i class="bi bi-person-circle display-1"></i>
                    </div>
                    <div class="col">
                        <h1 class="display-6">{{ $user->username }}</h1>
                        <h5 class="fw-light">{{ $user->email }}</h5>
                    </div>
                    <div class="border-start col-md-5">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, aut. Perferendis explicabo id amet a harum animi, expedita ducimus quisquam tempore iusto sequi nemo aperiam tenetur minima mollitia distinctio eaque vitae quibusdam cumque! Animi, eaque sint optio a repudiandae ipsum adipisci saepe suscipit exercitationem molestias, itaque commodi voluptate laborum fugit.</p>
                    </div>
                </div>
            </div>
    </section>
@endsection
