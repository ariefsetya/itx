@extends('local')

@section('content')
<h1>Upload User Content</h1>
<div class="grid">
	<div class="row cells1">
		<div class="cell">
			<form method="POST" action="{{route('save_usercontent')}}" enctype="multipart/form-data">
			{{csrf_field()}}
				<table class="table bordered">
					<tr>
						<td>User Assign</td>
						<td>
							<div class="full-size input-control text">
								<select name="assign" required>
									<option value="">--Pilih--</option>
									@foreach(\App\User::where('status',2)->orWhere('status',3)->get() as $row)
									<?php
									$tsver = json_decode($row->tsver);
									$data = array();
									foreach ($tsver as $key => $val) {
										if($val=="Ya"){
											$data[] = $key;
										}
									}
									$ts = implode(",", $data);

									$uc = \App\UserContent::where('id_assign',$row->id)->get();
									$ac = array();
									foreach ($uc as $key) {
										if($key->type=="2"){
											$ac[] = \App\Rute::find($key->id)['nama'];
										}
									}
									$c = implode(",", $ac); 
									?>
									<option value="{{$row->id}}">{{$row->name." (".$ts.")"." R: ".$c}}</option>
									@endforeach
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>Konten</td>
						<td>
							<div class="full-size input-control text">
								<select name="konten" required>
									<option value="">--Pilih--</option>
									@foreach(\App\Kereta::where('id_user',Auth::user()->id)->where('open',1)->get() as $row)
									<option value="{{$row->id}}-1">{{$row->nama}}</option>
									@endforeach
									@foreach(\App\Rute::where('id_user',Auth::user()->id)->where('open',1)->get() as $row)
									<option value="{{$row->id}}-2">{{$row->nama}}</option>
									@endforeach
									@foreach(\App\Objek::where('id_user',Auth::user()->id)->where('open',1)->get() as $row)
									<option value="{{$row->id}}-3">{{$row->nama}}</option>
									@endforeach
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>
							<div class="full-size input-control text">
								<input type="text" name="nama" placeholder="ex : DAOP 7 MN" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>CDP Files</td>
						<td>
							<div class="input-control file full-size" data-role="input">
							    <input type="file" name="cdp_files" placeholder="CDP Files" required>
							    <button class="button"><span class="mif-folder"></span></button>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button type="submit" class="button primary" name="train">Upload</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>


@stop