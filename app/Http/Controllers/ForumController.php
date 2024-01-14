<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Forum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;

use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
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
            return view('dashboard.forums.liste', [
                'allForums'=> Forum::where('user_id', Auth::user()->id)->get()
            ]);
        }
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('dashboard.forums.create', [
             'allTags'=> Tag::all()
            ]);
        }

        /**
         * Store a newly created resource in storage.
         */

         public function store(ForumRequest $request)
         {
           Forum::create($request->validated() + [
                'slug'=> Str::slug($request['title']),
                'user_id' => Auth::user()->id
          ]);
           return redirect()->route('forum.index', ['succes'=> true]);
         }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {

        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Forum $forum)
        {
            return view('dashboard.forums.edit', [
               'ressourceForum' => $forum,
               'allTags'=> Tag::all()
            ]);
        }
        /**
         * Update the specified resource in storage.
         */
        public function update(ForumRequest $request, string $id)
        {
            $ressource = Forum::find($id);
            $ressource->title= $request->title;
            $ressource->slug = \Str::limit($request->title);
            $ressource->tag_id= $request->tag_id;
            $ressource->description= $request->description;
            $ressource->update();
            return redirect()->route('forum.index', ['edited'=> true]);

        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $ressource = Forum::find($id);
               $ressource->delete();
               return redirect()->route('Formation.index', ['deleted'=>true]);
         }


}
