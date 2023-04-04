@extends('Template.Template')

@section('konten')
    <section id="Register" class="min-vh-100">
        <div class="bg-transparant min-vh-100">
            <div class="container py-5">
                <div class="row align-items-center py-5">
                    <div class="col">
                        <div class="text-white">
                            <h1 class="display-3">Join Us to Save The Planet</h1>
                        </div>
                    </div>
                    <div class="col-md-4 bg-white text-dark p-4 round">
                        <div class="text-center mb-3">
                            <h1 class="fs-3">Welcome To Floruna</h1>
                            <h1 class="fs-6 fw-light text-secondary">For A Better Place</h1>
                        </div>
                        <hr>
                        <div class="form py-3">
                            <form action="/login" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="Email" class="form-label text-secondary px-2">Email</label>
                                    <input type="email" class="form-control round @error('email') is-invalid @enderror"
                                        name="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Password" class="form-label text-secondary px-2">Password</label>
                                    <input type="password" class="form-control round @error('password') is-invalid @enderror"
                                        name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <p class="text-small px-3">Don't have an Account? <a href="/register">Register</a></p>
                                    <button type="submit" class="btn btn-success w-100 round">
                                        <h1 class="fs-4">Login</h1>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="text-center">
                            <p class="text-small">By Continuing, You Agree To Floruna <b>Terms Of Service</b> And
                                Acknowledge You've Read Our <b>Privacy Policy, Notice At Collection.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
