@extends('local')

@section('content')
<h1>Konten : {{$konten->nama}}</h1>
<div class="grid">
	<div class="row cells1">
		<div class="cell">
			<h1>User List</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>E-Mail</th>
						<th>Phone</th>
						<th>ORI?</th>
						<th>CU?</th>
					</tr>
				</thead>
				<tbody>
				@foreach($user as $row)
						<tr>
							<td>#{{$row->id}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->email}}</td>
							<td>{{$row->phone}}</td>
							<td>{{$row->ori==1?"Ya":"Tidak"}}</td>
							<td>@if(sizeof(\App\UserContent::where('id_assign',$row->id)->where('id_content',$konten->id)->get())==1)
							Ya @else Tidak @endif</td>
						</tr>
						@if($row->brand!=null)
						<tr>
							<td colspan="6">
								<h2>{{$row->brand}}</h2>
								<hr>
								-->> <a target="_blank" href="{{$row->url}}">{{$row->url}}</a>
							</td>
						</tr>
						@endif
						<tr>
							<td colspan="2">
								Trainz Version :<br>
								<ul>
								@foreach(json_decode($row->tsver,true) as $key => $val)
									@if($val=="Ya")
									<li>{{$key}}</li>
									@endif
								@endforeach
								</ul>
							</td>
							<td align="center">
								<img src="{{$row->photo}}" style="max-width: 200px;"><hr>
								( <a target="_blank" href="{{"https://facebook.com/".$row->fb}}">{{"https://facebook.com/".$row->fb}}</a> )
							</td>
							<td valign="top" colspan="2">
								Reason :<br>
								{{$row->reason}}
							</td>
							<td align="center">
								<a class="button success" href="{{route('kirim_konten',[$row->id,$konten->id,$type])}}">Kirim ({{sizeof(\App\Logdata::where('url','like','%kirim_konten/'.$row->id."/".$konten->id."/".$type.'%')->get())}})</a>
							</td>
						</tr>
				@endforeach
				@if(sizeof($user)==0)
					<tr><td colspan="6"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada data</h1></td></tr>
				@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop