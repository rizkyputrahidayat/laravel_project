{{-- Mengkonekan kedalam main template layout --}}
@extends('layout.main')  

{{-- Memanggil title sesuai dengan template --}}
@section('title','Mahasiswa')
    

@section('container')  
    <div class="container">
            <div class="row justify-content-center" >
                <div class="shadow-lg p-3 mb-3 mt-3 bg-white rounded">Details Mahasiswa</div>
            </div>
        </div>
        <div class="card col-6 ml-5">
            <div class="card-body">
                <h5 class="card-title">{{ $student -> nama}}</h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{$student -> npm}}</h6>
                <p class="card-text">{{ $student -> email}} </p>
                <p class="card-text">{{ $student -> jurusan}} </p>
                {{--  Membuat update  --}}
                <a href="{{$student->id}}/edit" class="btn btn-primary" > Update </a>
                {{-- Membuat tombol delete, dengan form, dan manipulasi method agar menggunakan method delete --}}
                <form action="{{$student->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/students" class="card-link ">Back to Students</a>


            </div>
        </div>

@endsection