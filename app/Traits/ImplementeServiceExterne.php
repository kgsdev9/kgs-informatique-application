<?php
namespace App\Traits;

use Session;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

trait ImplementeServiceExterne {

public function countView($slug){
        $Key = 'key_' . $slug;
        if (!Session::has($Key)) {
           Article::where('slug', $slug)->increment('view', 1);
            Session::put($Key, 1);
        }
    }

}
