<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends Controller
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
        return view('dashboard.application.liste', [
            'allApplication'=> Application::orderByDesc('created_at')->get()
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

     public function store(ApplicationRequest $request)
     {
         if($request->hasfile('image')) {
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('application/' , $filename);
         }
           $appliation =   Application::create([
                 'title'=> $request->title,
                 'slug' => \Str::slug($request->title),
                 'image' => $filename,
                 'url'=> $request->url,
                 'description'=> $request->description
             ]);


             return redirect()->route('applications.index', ['succes'=> true]);
     }


    /**
     * Display the specified resource.
     */

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
    public function update(ApplicationRequest $request, string $id)
    {
        $ressource = Application::find($id);

        if($request->hasFile('image')) {
            $chemin = 'application/'.$ressource->image;
            if(File::exists($chemin)) {
             File::delete($chemin) ;
            }
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $image = time().'.'.$extention;
            $file->move('application/' , $image);
            $ressource->image  = $image;
         }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image')->store('public');
        //     $ressource->update(['image' => $image]);
        // }
        $ressource->title= $request->title;
        $ressource->slug = \Str::limit($request->title);
        $ressource->url= $request->url;
        $ressource->description= $request->description;
        $ressource->update();
        return redirect()->route('applications.index', ['edited'=> true]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ressource = Application::find($id);
           $ressource->delete();
       return redirect()->route('applications.index', ['deleted'=>true]);
    }
}
