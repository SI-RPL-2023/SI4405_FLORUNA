@extends('Template.Template')

@section('konten')
    <section id="Postingan" class="min-vh-100 bg-admin">
        <div class="container text-white py-5">
            <div class="text-center py-5">
                <h1>Posting News</h1>
            </div>
            <form action="/posting" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row bg-white gap-4 align-items-center rounded">
                    <div class="col text-center bg-white text-dark">
                        <label for="foto">
                            <img id="preview" alt="" width="300">
                            <h1 class="display-1" id="kotak"><i class="bi bi-camera"></i></h1>
                        </label>
                    </div>
                    <div class="col bg-admin">
                        <div class="mb-3">
                            <label for="Judul">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="Lokasi">Lokasi</label>
                            <input type="text" class="form-control" id="Lokasi" name="lokasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="Keterangan">Keterangan</label>
                            <textarea name="keterangan" id="Keterangan" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3" hidden>
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn w-100" style="background-color: #EAE7B1">Upload</button>
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
