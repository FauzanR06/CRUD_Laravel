@extends('layout/main')

@section('title', 'Ubah Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Ubah students</h1>

        <form method="post" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" placeholder="masukan nama" value="{{$student->nama }}">
                  @error('nama')<div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                  <label for="nis">NIS</label>
                  <input type="text" class="form-control @error('nis') is-invalid
                  @enderror" id="nis" name="nis" placeholder="masukan nis" value="{{$student->nis }}">
                  @error('nis')<div class="invalid-feedback">{{ $message }}</div> @enderror

                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid
                  @enderror" id="email" name="email" placeholder="masukan email" value="{{$student->email }}">
                  @error('email')<div class="invalid-feedback">{{ $message }}</div> @enderror

                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid
                  @enderror" id="jurusan" name="jurusan" placeholder="masukan jurusan" value="{{$student->jurusan }}">
                  @error('jurusan')<div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
              </form>
        </div>
    </div>
</div>
@endsection
