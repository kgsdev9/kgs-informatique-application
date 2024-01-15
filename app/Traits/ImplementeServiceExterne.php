<?php
namespace App\Traits;


use Illuminate\Support\Facades\DB;
use Session;

trait ImplementeServiceExterne {

    public function countView($slug){
        $Key = 'key_' . $slug;
        if (!Session::has($Key)) {
            DB::table('articles')
            ->where('slug', $slug)->increment('view', 1);
            Session::put($Key, 1);
        }
    }


}
