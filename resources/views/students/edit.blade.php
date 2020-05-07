{{-- Mengkonekan kedalam main template layout --}}
@extends('layout.main')  

{{-- Memanggil title sesuai dengan template --}}
@section('title','Mahasiswa')
    

@section('container')  
    <div class="container">
            <div class="row justify-content-center" >
                <div class="shadow-lg p-3 mb-3 mt-3 bg-white rounded">Ubah Data Mahasiswa</div>
            </div>
        </div>
        <form method="post" action="/students/{{$student->id}}" class="class col-6 ml-5">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                    id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
                    {{-- Membuat kondisi dengan blade laravel dan bootstrap
                        Melanjutkan settingan validate pada kontroller students,
                        agar terdapat pesan jika tidak diisi dengan sesuai kriteria di validate  --}}
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control @error('npm') is-invalid @enderror" 
                    id="npm" placeholder="Masukkan NPM" name="npm" value="{{$student->npm}}">
                {{-- Membuat kondisi blada laravel dengan bootstrap --}}
                    @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" 
                    name="email" value="{{$student->email}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" 
                    name="jurusan" value="{{$student->jurusan}}">
                </div>
                <button type="submit" name="submit" class="btn btn-primary"> Ubah Data </button>
        </form>
@endsection