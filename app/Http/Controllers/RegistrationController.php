<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Registration;
use App\Models\Exam;
use App\Models\Student;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $registrations = Registration::all();
        return view('registrations.index')->with('registrations', $registrations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $exams = Exam::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('registrations.create', compact('exams','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Redirectresponse
    {
        $input = $request->all();
        Registration::create($input);
        return redirect('registrations')->with('flash_message', 'You registered some exams');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
