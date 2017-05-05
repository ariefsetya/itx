<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
class Objek extends Model
{
    public function download($id)
    {
    	return sizeof(DB::table('logdatas')
                ->where('url', 'like', '%link_user_objek/'.$id)
                ->groupBy('ip')
                ->get());	
    }
}
