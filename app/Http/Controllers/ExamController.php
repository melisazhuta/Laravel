<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Exam;
use Illuminate\View\View;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $exams = Exam::all();
        return view('exams.index')->with('exams', $exams);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('exams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Exam::create($input);
        return redirect('exams')->with('flash_message', 'Exam Addedd!');
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
    public function edit(string $id): View
    {
        $exams = Exam::find($id);
        return view('exams.edit')->with('exams', $exams);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $exams = Exam::find($id);
        $input = $request->all();
        $exams->update($input);
        return redirect('exams')->with('flash_message', 'Exam Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
