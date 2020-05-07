{{-- Mengkonekan kedalam main template layout --}}
@extends('layout.main')  

{{-- Memanggil title sesuai dengan template --}}
@section('title','Mahasiswa')
    

@section('container')  
    <div class="container">
            <div class="row justify-content-center" >
                <div class="shadow-lg p-3 mb-3 mt-3 bg-white rounded">Tambah Data Mahasiswa</div>
            </div>
        </div>
        <form method="post" action="/students" class="class col-6 ml-5">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                    id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
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
                    id="npm" placeholder="Masukkan NPM" name="npm" value="{{old('npm')}}">
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
                    name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" 
                    name="jurusan" value="{{old('jurusan')}}">
                </div>
                <button type="submit" name="submit" class="btn btn-primary"> Tambah Data </button>
        </form>
@endsection