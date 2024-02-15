<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use App\Contracts\Interfaces\ClassroomInterface;

class ClassroomController extends Controller
{
    private ClassroomInterface $classroom;

    public function __construct(ClassroomInterface $classroom)
    {
        $this->classroom = $classroom;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = $this->classroom->get();
        return view('dashboard.classroom.index', [
            'active' => 'classroom',
        ], compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.classroom.create', [
            'active' => 'classroom'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassroomRequest $request)
    {
        $this->classroom->store($request->validated());
        return redirect()->route('classroom')->with('success', 'Kelas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classroom $classroom)
    {
        $this->classroom->get($classroom->id);
        return view('dashboard.classroom.edit', [
            'active' => 'classroom'
        ], compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassroomRequest $request, Classroom $classroom)
    {
        $this->classroom->update($classroom->id, $request->all());
        return redirect('classroom')->with('success', 'Kelas Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        $this->classroom->delete($classroom->id);
        return back()->with('success', 'Kelas Berhasil Di Hapus');
    }
}
