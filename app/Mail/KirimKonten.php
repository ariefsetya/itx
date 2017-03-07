<?php

namespace App\Mail;
use App\User;
use Auth;
use App\Kereta;
use App\Rute;
use App\Objek;
use App\UserContent;
use App\DepContent;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KirimKonten extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $type;
    public $konten;
    public $userkonten;
    public $depkonten;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$id_content,$type)
    {
        $this->type = $type; 
        if($type==1){
            $this->konten = Kereta::where('id_user',Auth::user()->id)->where('id',$id_content)->first();
        }else if($type==2){
            $this->konten = Rute::where('id_user',Auth::user()->id)->where('id',$id_content)->first();
        }else if($type==3){
            $this->konten = Objek::where('id_user',Auth::user()->id)->where('id',$id_content)->first();
        }       
        $this->userkonten = UserContent::where('id_assign',$user->id)->first();
        $this->depkonten = DepContent::where('id_content',$id_content)->where('type',$type)->get();

        $this->user = $user;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Indonesian Trainz X : '.$this->konten->nama)
            ->from('itx.officialmail@gmail.com','Indonesian Trainz X')
            ->view('email.content-files')
            ->withType($this->type)
            ->withUser($this->user)
            ->withKonten($this->konten)
            ->withUserKonten($this->userkonten)
            ->withDepKonten($this->depkonten);
    }
}
