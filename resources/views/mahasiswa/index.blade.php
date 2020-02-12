@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>hai, Daftar Siswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @foreach( $mahasiswa as $mhs)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mhs->nama}}</td>
                    <td>{{ $mhs->nis}}</td>
                    <td>{{ $mhs->email}}</td>
                    <td>{{ $mhs->jurusan}}</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
