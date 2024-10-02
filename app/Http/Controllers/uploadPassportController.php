<?php

namespace App\Http\Controllers;

use App\Models\userPassport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class uploadPassportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $path = $file->store('avatars', 'public');
        $fileName = Str::random(40) . '.' . $file->getClientOriginalExtension();
        UserPassport::create([
            'name' => $fileName,
            'path' => $path,
            'user_id' => auth()->id(),
        ]);
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
