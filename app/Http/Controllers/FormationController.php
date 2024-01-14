<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Formation.liste', [
            'allFormation'=> Formation::orderByDesc('created_at')->get()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Formation.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $image = $request->file('image')->store('public');
             Formation::create([
                 'title'=> $request->title,
                 'slug' => \Str::slug($request->title),
                 'image' => $image,
                 'url'=> $request->url,
                 'description'=> $request->description
             ]);
             return redirect()->route('Formation.index', ['succes'=> true]);
     }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ressource = Formation::find($id);
        return view('ass', compact('ressource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ressource = Formation::find($id);
        return view('dashboard.Formation.edit', compact('ressource'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ressource = Formation::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public');
            $ressource->update(['image' => $image]);
        }
        $ressource->title= $request->title;
        $ressource->slug = \Str::limit($request->title);
        $ressource->title= $request->url;
        $ressource->description= $request->description;
        $ressource->update();
        return redirect()->route('Formation.index', ['edited'=> true]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ressource = Formation::find($id);
        if($ressource) {
           Storage::url($ressource->image);
           if($ressource->image) {
            Storage::delete($ressource->image);
           }
           $ressource->delete();
        }
       return redirect()->route('Formation.index', ['deleted'=>true]);
    }
}
