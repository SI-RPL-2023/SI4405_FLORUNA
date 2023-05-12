@extends('Template.Template')

@section('konten')
    <section id="Postingan" class="min-vh-100 bg-admin">
        <div class="container text-white py-5">
            <div class="text-center py-5">
                <h1>Upload Postingan</h1>
            </div>
            <form action="/posting" method="post"  enctype="multipart/form-data">
                @csrf
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
                <div class="mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </section>
@endsection
