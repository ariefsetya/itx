<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    public function download($id)
    {
    	return sizeof(DB::table('logdatas')
                ->where('url', 'like', '%link_user_train/'.$id)
                ->groupBy('ip')
                ->get());	
    }
}
