<?php
namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Session;

trait ImplementeServiceExterne {

public function countView($id){
        $Key = 'key_' . $id;
        if (!Session::has($Key)) {
            DB::table('articles')
            ->where('id', $id)->increment('view', 1);
            Session::put($Key, 1);
        }
    }

}
