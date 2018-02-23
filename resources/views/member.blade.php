@extends('local')

@section('content')
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan8">
			<div style="text-align: right">
				<a href="{{route('add_train')}}" class="button">Upload Train</a>
				<a href="{{route('add_rute')}}" class="button">Upload Rute</a>
				<a href="{{route('add_objek')}}" class="button">Upload Objek</a>
				<a href="{{route('add_usercontent')}}" class="button">Upload User Content</a>
				<a href="{{route('add_depcontent')}}" class="button">Upload Dep Content</a>
				<a href="{{route('dashboard')}}" class="button">Member Request</a>
			</div>

			<h4>Downloads Count valid from May 6<sup>rd</sup> 2017</h4>
			
			<h1>Train &raquo; Lokomotif</h1>
			<table class="table striped hovered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Seri</th>
						<th>Status</th>
						<th>Downloads</th>
						<!-- <th>Hapus</th> -->
					</tr>
				</thead>
				<tbody>
				@foreach($train['lokomotif'] as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->seri}}</td>
						<td>{{$row->status}}</td>
						<?php $dln_train = $row->download(base64_encode($row->id)); ?>
				        <td>{{$dln_train}}</td>
				        <?php $dl_train+=$dln_train; ?>
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
						<th>Downloads</th>
					</tr>
				</thead>
				<tbody>
				@foreach($train['kereta'] as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->seri}}</td>
						<td>{{$row->status}}</td>
						<?php $dln_train = $row->download(base64_encode($row->id)); ?>
				        <td>{{$dln_train}}</td>
				        <?php $dl_train+=$dln_train; ?>
						<!-- <td><a href="{{route('delete_train',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama." - ".$row->seri}}?')">Hapus</a></td> -->
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
						<th>Downloads</th>
						<!-- <th>Hapus</th> -->
					</tr>
				</thead>
				<tbody>
				@foreach($train['gerbong'] as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->seri}}</td>
						<td>{{$row->status}}</td>
						<?php $dln_train = $row->download(base64_encode($row->id)); ?>
				        <td>{{$dln_train}}</td>
				        <?php $dl_train+=$dln_train; ?>
						<!-- <td><a href="{{route('delete_train',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama." - ".$row->seri}}?')">Hapus</a></td> -->
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
						<!-- <th>Hapus</th> -->
						<th>Downloads</th>
						<th>Userlist</th>
					</tr>
				</thead>
				<tbody>
				@foreach($rute as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->status}}</td>
						<?php $dln_rute = $row->download(base64_encode("rute"),base64_encode($row->id)); ?>
				        <td>{{$dln_rute}}</td>
				        <?php $dl_rute+=$dln_rute; ?>
						<!-- <td><a href="{{route('delete_rute',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama}}?')">Hapus</a></td> -->
						<td><a href="{{route('premium_member',[$row->id."-2"])}}">Userlist</a></td>
					</tr>
				@endforeach
				@if(sizeof($rute)==0)
					<tr><td colspan="6"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1></td></tr>
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
						<th>Downloads</th>
						<!-- <th>Hapus</th> -->
					</tr>
				</thead>
				<tbody>
				@foreach($objek as $row)
					<tr>
						<td>#{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->status}}</td>
						<?php $dln_object = $row->download(base64_encode($row->id)); ?>
				        <td>{{$dln_object}}</td>
				        <?php $dl_object+=$dln_object; ?>
						<!-- <td><a href="{{route('delete_objek',[$row->id])}}" onclick="return confirm('Yakin hapus {{$row->nama}}?')">Hapus</a></td> -->
					</tr>
				@endforeach
				@if(sizeof($objek)==0)
					<tr><td colspan="5"><h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1></td></tr>
				@endif
				</tbody>
			</table>
		</div>
		<div class="cell colspan4">
			<h1>Total Downloads</h1>
			<hr>
			<table class="table striped hovered">
				<tr>
					<td>Kereta</td>
					<td>{{$dl_train}}</td>
				</tr>
				<tr>
					<td>Rute</td>
					<td>{{$dl_rute}}</td>
				</tr>
				<tr>
					<td>Object</td>
					<td>{{$dl_object}}</td>
				</tr>
				<tr>
					<td><b>All</b></td>
					<td><b>{{$dl_train+$dl_rute+$dl_object}}</b></td>
				</tr>
			</table>
		</div>
	</div>
</div>


@stop