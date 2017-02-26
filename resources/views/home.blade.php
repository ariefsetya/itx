@extends('local')

@section('content')

@if (count($errors) > 0)
<script type="text/javascript">
	$.Dialog({
    title: "Failed to Register",
    content: "<ul> @foreach ($errors->all() as $error) <li> {{ $error }} </li> @endforeach </ul>",
    actions: [
        {
            title: "OK",
            onclick: function(el){
                $(el).data('dialog').close();
            }
        }
    ],
    options: {
    }
});
</script>
@endif
@if (session('msg'))
<script type="text/javascript">
	$.Dialog({
    title: "{{session('title')}}",
    content: "{{session('msg')}}",
    actions: [
        {
            title: "OK",
            onclick: function(el){
                $(el).data('dialog').close();
            }
        }
    ],
    options: {
    }
});
</script>
@endif

<h1>Siapakah kami?</h1>
<p>Indonesian Trainz X adalah website portal penyedia konten Kereta Simulator Indonesia (Trainz Simulator). Kami sendiri juga menyediakan beberapa konten kreasi kami yang bisa di download pada setiap detail addons yang bersifat Freeware.</p>
<p>Website ini bersifat Portal-based, yaitu creator-creator khusus Kereta Simulator Indonesia (Trainz Simulator) dapat mengupload karyanya serta kami juga menyediakan fitur untuk pengiriman konten ke PLU User masing-masing creator.</p>
<p>Jadi, tunggu apalagi? Untuk mendaftar sebagai Creator/PLU/User bisa melalui <a href="#daftar">link ini</a></p>
<hr>
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan8">
			<h1>Gallery</h1>
			<hr>
			<div class="">
				<div class="grid">
					<div class="row cells3">
						<div class="cell"><img class="block-shadow-impact" src="/storage/images/home (1).jpg"></div>
						<div class="cell"><img class="block-shadow-impact" src="/storage/images/home (2).jpg"></div>
						<div class="cell"><img class="block-shadow-impact" src="/storage/images/home (3).jpg"></div>
					</div>
					<div class="row cells3">
						<div class="cell"><img class="block-shadow-impact" src="/storage/images/home (4).jpg"></div>
						<div class="cell"><img class="block-shadow-impact" src="/storage/images/home (1).jpg"></div>
						<div class="cell"><img class="block-shadow-impact" src="/storage/images/home (2).jpg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="cell colspan4">
			<h1>Calendar</h1>
			<hr>
			<div class="darcula" data-role="calendar"></div>
		</div>
	</div>
</div>
<hr>
@if(!Auth::check())
<div id="daftar" class="padding10">
	<div class="grid">
		<div class="row cells2">
			<div class="cell">
				<h1>Mendaftar Creator/PLU/User</h1>
			<hr>
				<form method="POST" action="{{url('user/request')}}">
					{{csrf_field()}}
					<div class="input-control modern text full-size">
					    <input type="text" name="name" required>
					    <span class="label">Your Name  (ex: Arief Setya)</span>
					    <span class="informer">Please enter your name</span>
					    <span class="placeholder">Name</span>
					</div>
					<div class="input-control modern text full-size">
					    <input type="text" name="email" required>
					    <span class="label">Your E-Mail (ex: ariefsetya@live.com)</span>
					    <span class="informer">Please enter your email</span>
					    <span class="placeholder">E-Mail</span>
					</div>
					<div class="input-control modern text full-size">
					    <input type="phone" name="phone" required>
					    <span class="label">Your Phone (ex: 083870002220)</span>
					    <span class="informer">Please enter your phone</span>
					    <span class="placeholder">Phone</span>
					</div>
					<div class="input-control modern text full-size">
					    <input type="text" name="fb" required>
					    <span class="label">Your Facebook Username (ex: ixvimarch31)</span>
					    <span class="informer">Please enter your facebook username</span>
					    <span class="placeholder">Facebook Username</span>
					</div>
					<div class="input-control file full-size" data-role="input">
					    <input type="file" name="photo" placeholder="Photo">
					    <button class="button"><span class="mif-folder"></span></button>
					</div>
					<div class="input-control textarea full-size" data-role="input" data-text-auto-resize="true">
					    <textarea name="reason" placeholder="Reason why you want to join us"></textarea>
					</div>
					<label class="input-control checkbox full-size">
					    <input type="checkbox" name="ori">
					    <span class="check"></span>
					    <span class="caption">Original/Purchased Trainz</span>
					</label>
					<label class="input-control checkbox">
					    <input type="checkbox" name="tsver_2009">
					    <span class="check"></span>
					    <span class="caption">TS2009</span>
					</label>
					<label class="input-control checkbox">
					    <input type="checkbox" name="tsver_2010">
					    <span class="check"></span>
					    <span class="caption">TS2010</span>
					</label>
					<label class="input-control checkbox">
					    <input type="checkbox" name="tsver_2012">
					    <span class="check"></span>
					    <span class="caption">TS2012</span>
					</label>
					<label class="input-control checkbox">
					    <input type="checkbox" name="tsver_tane">
					    <span class="check"></span>
					    <span class="caption">T:ANE</span>
					</label>
					<label class="input-control checkbox full-size">
					    <input type="checkbox" id="creator" name="creator">
					    <span class="check"></span>
					    <span class="caption">Creator/Reskiner?</span>
					</label>
					<div style="display: none;"  id="brand_layout">
					<div class="input-control modern text full-size">
					    <input type="text" name="brand">
					    <span class="label">Your Brand (ex: Indonesian Trainz X)</span>
					    <span class="informer">Please enter your brand</span>
					    <span class="placeholder">Brand</span>
					</div>
					<div class="input-control modern text full-size">
					    <input type="text" name="url">
					    <span class="label">Your Brand URL (ex: http://itx.setya.me/)</span>
					    <span class="informer">Please enter your brand url</span>
					    <span class="placeholder">Brand URL</span>
					</div>
					</div>
					<button class="button primary" type="submit">Submit</button>
				</form>
			</div>
			<div class="cell">
			<h1>Masuk ke Member Area</h1>
			<hr>
				<form method="POST" action="{{url('user/login')}}" id="login_form">		
				<input type="hidden" name="_token_" id="_token_">		
				<input type="hidden" name="code" id="code">		
				{{csrf_field()}}
					<a class="button primary" onclick="phone_btn_onclick()">Klik untuk Masuk</a>
				</form>
			</div>
		</div>
	</div>
</div>
@else
<div class="grid">
	<div class="row cells1">
		<div class="cell">
			<h3>Anda masuk sebagai {{Auth::user()->name}} ({{Auth::user()->email}}), <a href="{{url('user/logout')}}">keluar</a></h3>
		</div>
	</div>
</div>
@endif

<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<script type="text/javascript">
	$('#creator').change(function() {
        if($(this).is(":checked")) {
        	$("#brand_layout").fadeIn();
        }else{
        	$("#brand_layout").fadeOut();
        }
    });
</script>
<script>
  // initialize Account Kit with CSRF protection
  AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId:1738905326439099, 
        state:"{{csrf_token()}}", 
        version:"v1.1"
      }
    );
  };

  // login callback
  function loginCallback(response) {
    console.log(response);
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      document.getElementById("code").value = response.code;
      document.getElementById("_token_").value = response.state;
      document.getElementById("login_form").submit();
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
      alert('failed');
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
      alert('failure');
    }
  }

  // phone form submission handler
  function phone_btn_onclick() {
    var country_code = "+62";
    AccountKit.login('PHONE', 
      {countryCode: country_code, phoneNumber: ''}, // will use default values if this is not specified
      loginCallback);
  }
</script>
@stop