@extends('local')

@section('content')
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan8">
			<div style="text-align: right">
				<a href="{{route('add_train')}}" class="button">Upload Train</a>
				<a href="{{route('add_rute')}}" class="button">Upload Rute</a>
				<a href="{{route('add_objek')}}" class="button">Upload Objek</a>
			</div>
			<h1>Train &raquo; Lokomotif</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Seri</th>
						<th>Status</th>
						<th>Publik?</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
				@foreach($train['lokomotif'] as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->seri}}</td>
						<td>{{$row->status}}</td>
						<td>{{$row->open==1?"Ya":"Tidak"}}</td>
						<td><a href="{{route('delete_train',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama." - ".$row->seri}}?')">Hapus</a></td>
					</tr>
				@endforeach
				@if(sizeof($train['lokomotif'])==0)
					<tr><td colspan="6"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1></td></tr>
				@endif
				</tbody>
			</table>
			<hr>
			<h1>Train &raquo; Kereta</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Seri</th>
						<th>Status</th>
						<th>Publik?</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
				@foreach($train['kereta'] as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->seri}}</td>
						<td>{{$row->status}}</td>
						<td>{{$row->open==1?"Ya":"Tidak"}}</td>
						<td><a href="{{route('delete_train',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama." - ".$row->seri}}?')">Hapus</a></td>
					</tr>
				@endforeach
				@if(sizeof($train['kereta'])==0)
					<tr><td colspan="6"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1></td></tr>
				@endif
				</tbody>
			</table>
			<hr>
			<h1>Train &raquo; Gerbong</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Seri</th>
						<th>Status</th>
						<th>Publik?</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
				@foreach($train['gerbong'] as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->seri}}</td>
						<td>{{$row->status}}</td>
						<td>{{$row->open==1?"Ya":"Tidak"}}</td>
						<td><a href="{{route('delete_train',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama." - ".$row->seri}}?')">Hapus</a></td>
					</tr>
				@endforeach
				@if(sizeof($train['gerbong'])==0)
					<tr><td colspan="6"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1></td></tr>
				@endif
				</tbody>
			</table>
			<hr>
			<h1>Rute</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Status</th>
						<th>Publik?</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
				@foreach($rute as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->status}}</td>
						<td>{{$row->open==1?"Ya":"Tidak"}}</td>
						<td><a href="{{route('delete_rute',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama}}?')">Hapus</a></td>
					</tr>
				@endforeach
				@if(sizeof($rute)==0)
					<tr><td colspan="5"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1></td></tr>
				@endif
				</tbody>
			</table>
			<hr>
			<h1>Objek</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Status</th>
						<th>Publik?</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
				@foreach($objek as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->status}}</td>
						<td>{{$row->open==1?"Ya":"Tidak"}}</td>
						<td><a href="{{route('delete_objek',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama}}?')">Hapus</a></td>
					</tr>
				@endforeach
				@if(sizeof($objek)==0)
					<tr><td colspan="5"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1></td></tr>
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


@stop