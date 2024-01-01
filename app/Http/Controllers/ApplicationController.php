<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.application.liste', [
            'allApplication'=> Application::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.application.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $image = $request->file('image')->store('public');
             Application::create([
                 'title'=> $request->title,
                 'slug' => \Str::slug($request->title),
                 'image' => $image,
                 'url'=> $request->url,
                 'description'=> $request->description
             ]);
             return redirect()->route('application.index', ['succes'=> true]);
     }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ressource = Application::find($id);
        return view('ass', compact('ressource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ressource = Application::find($id);
        return view('dashboard.application.edit', compact('ressource'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ressource = Application::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public');
            $ressource->update(['image' => $image]);
        }
        $ressource->title= $request->title;
        $ressource->slug = \Str::limit($request->title);
        $ressource->title= $request->url;
        $ressource->description= $request->description;
        $ressource->update();
        return redirect()->route('application.index', ['edited'=> true]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ressource = Application::find($id);
        if($ressource) {
           Storage::url($ressource->image);
           if($ressource->image) {
            Storage::delete($ressource->image);
           }
           $ressource->delete();
        }
       return redirect()->route('application.index', ['deleted'=>true]);
    }
}
