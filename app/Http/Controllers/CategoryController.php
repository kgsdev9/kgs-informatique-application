<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Tag::all();
        return view('dashboard.category.liste', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $image = $request->file('image')->store('public');

            Tag::create([
                'name'=> $request->name,
                'slug' => \Str::slug($request->name),
                'image' => $image
            ]);

            return redirect()->route('category.index', ['succes'=> true]);

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
        $ressource = Tag::find($id);
        return view('dashboard.category.edit', compact('ressource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ressource = Tag::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public');
            $ressource->update(['image' => $image]);
        }
        $ressource->name= $request->name;
        $ressource->slug = \Str::limit($request->name);
        $ressource->update();
        return redirect()->route('category.index', ['edited'=> true]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $ressource = Tag::find($id);

         if($ressource) {
            Storage::url($ressource->image);
            if($ressource->image) {
             Storage::delete($ressource->image);
            }
            $ressource->delete();
         }
        return redirect()->route('category.index', ['deleted'=>true]);

    }
}
