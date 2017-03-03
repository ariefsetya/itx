@extends('local')

@section('content')
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan8">
			<h1>User Request</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>E-Mail</th>
						<th>Phone</th>
						<th>ORI?</th>
					</tr>
				</thead>
				<tbody>
				@foreach($request as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->email}}</td>
						<td>{{$row->phone}}</td>
						<td>{{$row->ori==1?"Ya":"Tidak"}}</td>
					</tr>
					@if($row->brand!=null)
					<tr>
						<td colspan="5">
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
							<img src="{{$row->photo}}"><hr>
							( <a target="_blank" href="{{"https://facebook.com/".$row->fb}}">{{"https://facebook.com/".$row->fb}}</a> )
						</td>
						<td valign="top">
							Reason :<br>
							{{$row->reason}}
						</td>
						<td align="center">
							<a class="button success" href="{{route('approve_request',[$row->id])}}">Approve</a>
							<hr>
							<a class="button danger" href="{{route('delete_request',[$row->id])}}">Delete</a>
						</td>
					</tr>
				@endforeach
				@if(sizeof($request)==0)
					<tr><td colspan="5"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada request</h1></td></tr>
				@endif
				</tbody>
			</table>
		</div>
		<div class="cell colspan4">
			<h1>Last Downloaded</h1>
			<hr>
			<table class="table striped hovered">
				<tr><td>DAOP 7 MN by Arief Setya<br>@ Sat, 22 Nov 2016 22:00:00</td></tr>
				<tr><td>DAOP 7 MN by Arief Setya<br>@ Sat, 22 Nov 2016 22:00:00</td></tr>
				<tr><td>DAOP 7 MN by Arief Setya<br>@ Sat, 22 Nov 2016 22:00:00</td></tr>
				<tr><td>DAOP 7 MN by Arief Setya<br>@ Sat, 22 Nov 2016 22:00:00</td></tr>
				<tr><td>DAOP 7 MN by Arief Setya<br>@ Sat, 22 Nov 2016 22:00:00</td></tr>
				<tr><td>DAOP 7 MN by Arief Setya<br>@ Sat, 22 Nov 2016 22:00:00</td></tr>
				<tr><td>DAOP 7 MN by Arief Setya<br>@ Sat, 22 Nov 2016 22:00:00</td></tr>
			</table>
		</div>
	</div>
</div>

{{$request->links()}}

@stop