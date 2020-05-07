{{-- Mengkonekan kedalam main template layout --}}
@extends('layout.main')  

{{-- Memanggil title sesuai dengan template --}}
@section('title','Mahasiswa')
    

@section('container')  
    <div class="container">
            <div class="row justify-content-center" >
                <div class="shadow-lg p-3 mb-3 mt-3 bg-white rounded">Daftar Mahasiswa</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="mt-4">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama </th>
                                <th scope="col">NPM</th>
                                <th scope="col"> Email</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs )
                            <tr>
                                <th scope="col">{{$loop -> iteration}}</th>
                                <td> {{ $mhs -> nama}}</td>
                                <td> {{ $mhs -> npm}}</td>
                                <td> {{ $mhs -> email}}</td>
                                <td> {{ $mhs -> jurusan}}</td>
                                <td>
                                    <a href="" class="badge badge-primary ">Update</a>
                                    <a href="" class="badge badge-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection