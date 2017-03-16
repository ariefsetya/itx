@extends('local')

@section('content')
<h1>{{$query}}</h1>
<div class="grid">
	@for($i=0;$i<sizeof($search)/$point;$i++)
	<div class="row cells{{$point}}">
	@for($x=0;$x<$point;$x++)
	@if(isset($search[$i+$x]))
		<div class="cell">
			<div class="panel">
			    <div class="heading">
			        <span class="title">{{$search[$i+$x]->nama}}</span>
			    </div>
			    <div class="content">
			        <img src="{{$search[$i+$x]->photo}}">
			        <div class="padding10">
				        <hr>
				        <table class="table striped hovered bordered">
				        	<tr>
				        		<td>Nomor Seri</td>
				        		<td>{{$search[$i+$x]->seri}}</td>
				        	</tr>
				        	<tr>
				        		<td>Creator</td>
				        		<td>{{$search[$i+$x]->creator}}</td>
			        		</tr>
				        	@if($search[$i+$x]->reskin!=null)
			        		<tr>
				        		<td>Reskin</td>
				        		<td>{{$search[$i+$x]->creator}}</td>
				        	</tr>
				        	@endif
				        	<tr>
				        		<td>Scale</td>
				        		<td>{{$search[$i+$x]->realscale==1?"Realscale":"Non-Realscale"}}</td>
			        		</tr>
				        	<tr>
				        		<td>Status</td>
				        		<td>
				        		@if($search[$i+$x]->status=="plu")
				        			Private Limited User
				        		@elseif($search[$i+$x]->status=="free")
				        			Freeware
				        		@elseif($search[$i+$x]->status=="pay")
				        			Payware
				        		@endif
				        		</td>
			        		</tr>
				        	<tr>
				        		<td colspan="2">Description<br><br>{!!$search[$i+$x]->description or '--No Description--'!!}</td>
				        	</tr>
				        </table>
				        <div dir="rtl" >
				        	<a class="text-right button primary" href="{{route($jenis.'_detail',[$search[$i+$x]->status,$search[$i+$x]->id])}}">...Selengkapnya</a>
				        </div>
			        </div>
			    </div>
			</div>
		</div>
		@endif
		@endfor
	</div>
	<hr>
	@endfor
	@if(sizeof($search)==0)
		<h1><span class="mif-heart-broken mif-4x"></span> Belum ada konten</h1>
	@endif
</div>

{{$search->links()}}

@stop