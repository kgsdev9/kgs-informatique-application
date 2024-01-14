<?php
namespace App\Traits;

use Session;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

trait ImplementeServiceExterne {

public function countView($id){

        $Key = 'key_' . $id;
        if (!Session::has($Key)) {
         $article =   Article::where('id', $id)->increment('view', 1);
        
            Session::put($Key, 1);

        }
    }

}
