<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|unique:students,nisn',
            'kelas' => 'required|string|max:10',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'wali_murid' => 'required|string|max:255',
        ]);

        Student::create($validated);
        return redirect()->route('students.index')->with('success', 'Data murid berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|unique:students,nisn,' . $student->id,
            'kelas' => 'required|string|max:10',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'wali_murid' => 'required|string|max:255',
        ]);

        $student->update($validated);
        return redirect()->route('students.index')->with('success', 'Data murid berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Data murid berhasil dihapus.');
    }
}
