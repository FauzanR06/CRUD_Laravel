@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Tambah students</h1>

            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid
                @enderror" id="nama" name="nama" placeholder="masukan nama" value="{{old('nama')}}">
                  @error('nama')<div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                  <label for="nis">NIS</label>
                  <input type="text" class="form-control @error('nis') is-invalid
                  @enderror" id="nis" name="nis" placeholder="masukan nis" value="{{old('nis')}}">
                  @error('nis')<div class="invalid-feedback">{{ $message }}</div> @enderror

                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid
                  @enderror" id="email" name="email" placeholder="masukan email" value="{{old('email')}}">
                  @error('email')<div class="invalid-feedback">{{ $message }}</div> @enderror

                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid
                  @enderror" id="jurusan" name="jurusan" placeholder="masukan jurusan" value="{{old('jurusan')}}">
                  @error('jurusan')<div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>
        </div>
    </div>
</div>
@endsection
