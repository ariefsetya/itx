@extends('local')

@section('content')
<h1>Upload Dependecies Content</h1>
<div class="grid">
	<div class="row cells1">
		<div class="cell">
			<form method="POST" action="{{route('save_depcontent')}}" enctype="multipart/form-data">
			{{csrf_field()}}
				<table class="table bordered">
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
						<td>Status</td>
						<td>
							<div class="full-size input-control text">
								<select name="status" required>
									<option value="">--Pilih--</option>
									<option value="free">Freeware</option>
									<option value="plu">Private Limited User</option>
									<option value="pay">Payware</option>
								</select>
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