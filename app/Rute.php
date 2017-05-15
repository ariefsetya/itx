<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    public function download($type,$id)
    {
    	return sizeof(DB::table('logdatas')
                ->where('url', 'like', '%link_content/'.$type."/".$id)
                ->groupBy('ip')
                ->get());
    }
}
