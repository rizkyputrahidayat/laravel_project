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
        {{-- Kondisi untuk menampikan pop up dengan laravel diambil dari controller student
            return redirect('/students')->with('status', 'Data Berhasil Ditambahkan!'); --}}
        <div class="class col-6 ml-5">
                @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
                @endif
            <a href="/students/create">
                <button type="submit" class="btn btn-primary my-3">Tambahkan Data</button>
            </a>
            <ul class="list-group">
                @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-left">
                    {{$student -> nama}}
                    <a href="/students/{{$student -> id}}" class="badge badge-info">Details</a>
                </li>
                @endforeach
                
                </ul>
            
        </div>

@endsection