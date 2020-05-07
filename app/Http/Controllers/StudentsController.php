<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query mengambil data di database
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Membuat tambah data, setelah setting route
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambahkan validasi, jadi ketika kosong akan menampilkan pesan kesalahan 
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:9'
        ]);
        // Memasukkan inputan form kedalam database
        Student::create($request->all());
        // Kembalikan kehalaman student
        return redirect('/students')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // Cetak dengan return view membuat file didalam folder students
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // Buat file didalam folder students
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // Membuat validate pengkondisian agar tidak dapat diteruskan jika ada field yang kosong
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:9',
        ]);
        //Menangkap pendeklarasian dari route 
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'npm' => $request->npm,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/students')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //Mmebuat hapus, terdapat dilaravel ORM deleting model
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Berhasil Dihapus !');
    }
}
