<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\KirimKonten;
use Auth;
use App\Kereta;
use App\Rute;
use App\Objek;
use App\DepContent;
use App\UserContent;
use \Storage;
use \File;
use Illuminate\Support\Facades\Mail;


class MemberController extends Controller
{
    function __construct()
    {
    	$this->middleware('auth');
    }
    public function add_train()
    {
        return view('member.add_train');
    }
    public function save_train(Request $r)
    {
        $a = new Kereta;

        $a->nama = $r->nama;
        $a->jenis = $r->jenis;
        $a->seri = $r->seri;
        $a->subjenis = $r->subjenis;
        $a->status = $r->status;
        $a->creator = $r->creator;
        $a->reskin = $r->reskin;
        $a->kuid = $r->kuid;
        $a->realscale = $r->realscale;
        $a->description = $r->description;
        $a->id_user = Auth::user()->id;
        $a->open = $r->open;

        $a->save();


        if($r->file('cdp_files')){

            $folder = "content/train/".$a->status."/".md5($a->id);
            $file = $r->file('cdp_files');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
        }
        if($r->file('photo')){
            $folder = "public/photo/train/".$a->status."/".md5($a->id);
            $file = $r->file('photo');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.'.'.$extension,  File::get($file));
            $a->photo = url(Storage::url($folder."/".$a->id.'.'.$extension));
            $a->save();
        }

        return redirect()->route('member');
    }
    public function delete_train($id)
    {
        Kereta::where('id',$id)->delete();

        return redirect()->route('member');
    }
    public function add_rute()
    {
        return view('member.add_rute');
    }
    public function save_rute(Request $r)
    {
        $a = new Rute;

        $a->nama = $r->nama;
        $a->status = $r->status;
        $a->creator = $r->creator;
        $a->kuid = $r->kuid;
        $a->realscale = $r->realscale;
        $a->description = $r->description;
        $a->id_user = Auth::user()->id;
        $a->open = $r->open;

        $a->save();


        if($r->file('cdp_files')){

            $folder = "content/rute/".$a->status."/".md5($a->id);
            $file = $r->file('cdp_files');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
        }
        if($r->file('photo')){
            $folder = "public/photo/rute/".$a->status."/".md5($a->id);
            $file = $r->file('photo');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.'.'.$extension,  File::get($file));
            $a->photo = url(Storage::url($folder."/".$a->id.'.'.$extension));
            $a->save();
        }

        return redirect()->route('member');
    }
    public function delete_rute($id)
    {
        Rute::where('id',$id)->delete();

        return redirect()->route('member');
    }
    public function add_objek()
    {
        return view('member.add_objek');
    }
    public function save_objek(Request $r)
    {
        $a = new Objek;

        $a->nama = $r->nama;
        $a->status = $r->status;
        $a->creator = $r->creator;
        $a->kuid = $r->kuid;
        $a->description = $r->description;
        $a->id_user = Auth::user()->id;
        $a->open = $r->open;

        $a->save();


        if($r->file('cdp_files')){

            $folder = "content/objek/".$a->status."/".md5($a->id);
            $file = $r->file('cdp_files');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
        }
        if($r->file('photo')){
            $folder = "public/photo/objek/".$a->status."/".md5($a->id);
            $file = $r->file('photo');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.'.'.$extension,  File::get($file));
            $a->photo = url(Storage::url($folder."/".$a->id.'.'.$extension));
            $a->save();
        }

        return redirect()->route('member');
    }
    public function delete_objek($id)
    {
        Objek::where('id',$id)->delete();

        return redirect()->route('member');
    }
    public function add_depcontent()
    {
        return view('member.add_depcontent');
    }
    public function save_depcontent(Request $r)
    {
        $a = new DepContent;

        $a->nama = $r->nama;
        $konten = explode("-", $r->konten);
        $a->status = $r->status;
        $a->id_content = $konten[0];
        $a->type = $konten[1];
        $a->id_user = Auth::user()->id;

        $a->save();

        if($r->file('cdp_files')){
            $folder = "content/depcontent/".$a->status."/".md5($a->id);
            $file = $r->file('cdp_files');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
        }

        return redirect()->route('member');
    }
    public function delete_depcontent($id)
    {
        DepContent::where('id',$id)->delete();

        return redirect()->route('member');
    }
    public function add_usercontent()
    {
    	return view('member.add_usercontent');
    }
    public function save_usercontent(Request $r)
    {
    	$a = new UserContent;

    	$a->nama = $r->nama;
        $konten = explode("-", $r->konten);
        $a->id_content = $konten[0];
    	$a->type = $konten[1];
        $a->id_user = Auth::user()->id;
        $a->id_assign = $r->assign;

    	$a->save();

    	if($r->file('cdp_files')){
    		$folder = "content/usercontent/".$a->status."/".md5($a->id);
			$file = $r->file('cdp_files');
			$extension = $file->getClientOriginalExtension();
			Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
    	}

    	return redirect()->route('member');
    }
    public function delete_usercontent($id)
    {
        UserContent::where('id',$id)->delete();

        return redirect()->route('member');
    }

    public function premium_member($konten)
    {
        $exploded = explode("-", $konten);
        $id_content = $exploded[0];
        $type = $exploded[1];
        $a['type'] = $type;
        if($type==1){
            $a['konten'] = Kereta::where('id_user',Auth::user()->id)->where('id',$id_content)->first();
        }else if($type==2){
            $a['konten'] = Rute::where('id_user',Auth::user()->id)->where('id',$id_content)->first();
        }else if($type==3){
            $a['konten'] = Objek::where('id_user',Auth::user()->id)->where('id',$id_content)->first();
        }
        $a['user'] = \App\User::where('status','2')->get();
        return view('member.premium_user')->with($a);
    }
    public function kirim_konten($id_user, $id_konten, $type)
    {
        $user = \App\User::find($id_user);
        Mail::to($user->email)
            ->send(new KirimKonten($user, $id_konten, $type));

        return redirect()->route('premium_member',[$id_konten."-".$type]);
    }
    public function link_dep_konten($id)
    {
        $decoded = base64_decode($id);
        $a = DepContent::find($decoded);
        $folder = md5($a->id);

        $path = storage_path() . '/app/content/depcontent/'.$a->status.'/' . $folder."/".$a->id.".cdp";
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = \Response::make($file);
        $response->header("Content-Type", $type);
        $response->header("Content-Disposition",' attachment; filename="'.$a->nama.'.cdp"');
        return $response;

    }
    public function link_user_content($id)
    {
        $decoded = base64_decode($id);
        $a = UserContent::find($decoded);
        $folder = md5($a->id);

        $path = storage_path() . '/app/content/usercontent/' . $folder."/".$a->id.".cdp";
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = \Response::make($file);
        $response->header("Content-Type", $type);
        $response->header("Content-Disposition",' attachment; filename="'.$a->nama.'.cdp"');
        return $response;
    }
    public function link_content($type,$id)
    {
        $folder = "";
        $a = array();
        $type_decoded = base64_decode($type);
        $decoded = base64_decode($id);
        if($type_decoded=="rute"){
            $a = Rute::find($decoded);
        }else if($type_decoded=="objek"){
            $a = Objek::find($decoded);
        }else if($type_decoded=="kereta"){
            $a = Kereta::find($decoded);
        }
        $folder = storage_path() . "/app/content/".$type_decoded."/".$a->status."/".md5($a->id)."/".$a->id.".cdp";
        // $path = storage_path() . '/app/content/usercontent/' . $folder."/".$a->id.".cdp";
        $file = File::get($folder);
        $type = File::mimeType($folder);
        $response = \Response::make($file);
        $response->header("Content-Type", $type);
        $response->header("Content-Disposition",' attachment; filename="'.$a->nama.'.cdp"');
        return $response;
    }
}
