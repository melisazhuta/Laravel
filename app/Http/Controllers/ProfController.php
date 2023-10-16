<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Prof;
use Illuminate\View\View;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $profs = Prof::all();
        return view('profs.index')->with('profs', $profs);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       return view('profs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Prof::create($input);
        return redirect('profs')->with('flash_message', 'Prof Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $profs = Prof::find($id);
        return view('profs.show')->with('profs', $profs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $profs = Prof::find($id);
        return view('profs.edit')->with('profs', $profs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $prof = Prof::find($id);
        $input = $request->all();
        $prof->update($input);
        return redirect('profs')->with('flash_message', 'prof Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Prof::destroy($id);
        return redirect('profs')->with('flash_message', 'Prof deleted!');
    }
}