<?php

namespace App\Http\Controllers;

use App\Models\Podcats;
use Illuminate\Support\Str;
use App\Http\Requests\PodcastRequest;

class ConfereneController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth');
     }

     public function index()  {
        return view('dashboard.podcasts.liste', [
            'allConference'=> Podcats::all()
        ]);
     }

     public function  create() {
        return view('dashboard.podcasts.create');
     }

     public function update(PodcastRequest $request, $id)  {
       Podcats::where('id', $id)->update($request->validated() + [
            'slug'=> Str::slug($request->title)
        ]);
        return redirect()->route('conference.index', ['succes' => true]);
     }

     public function edit(string $id)
     {
         $ressource = Podcats::find($id);
         return view('dashboard.podcasts.edit', compact('ressource'));
     }

     public function  store(PodcastRequest $request) {
        $image = $request->file('image')->store('public');
         Podcats::create($request->validated() + [
            'image'=> $image,
            'slug'=> Str::slug($request->title)
         ]);
         return redirect()->route('conference.index', ['succes' => true]);
     }
}
