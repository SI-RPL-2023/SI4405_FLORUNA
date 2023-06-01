@extends('Admin.AdminTemplate')

@section('konten')
    <section id="Postingan" class="min-vh-100 bg-admin">
        <div class="container text-white py-5">
            <div class="text-center py-5">
                <h1>Open Donation</h1>
            </div>
            <form action="/data/donasi/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row bg-white gap-4 align-items-center rounded">
                    <div class="col text-center bg-white text-dark">
                        <label for="foto">
                            <img id="preview" alt="" width="300" style="object-fit: contain">
                            <h1 class="display-1" id="kotak"><i class="bi bi-camera"></i></h1>
                        </label>
                    </div>
                    <div class="col bg-admin">
                        <div class="mb-3">
                            <label for="Judul">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Lokasi">Email</label>
                            <input type="email" class="form-control" id="Lokasi" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="target-donasi">Target Donasi</label>
                            <input type="number" class="form-control" id="target-donasi" name="target" required>
                        </div>
                        <div class="mb-3">
                            <label for="tutup">Tanggal Penutupan Donasi</label>
                            <input type="date" class="form-control" id="tutup" name="tutup" required>
                        </div>
                        <div class="mb-3" hidden>
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn w-100" style="background-color: #EAE7B1">Open
                                Donation</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        foto.onchange = evt => {
            const [file] = foto.files
            if (file) {
                preview.src = URL.createObjectURL(file);
                kotak.style.display = 'none';
                ubah.style.display = 'block';
            }
        }
    </script>
@endsection
