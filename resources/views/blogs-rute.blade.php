@extends('local')

@section('content')
<h1>{{$query}}</h1>
<div class="grid">
	@for($i=0;$i<ceil(sizeof($search)/$point);$i++)
	<div class="row cells{{$point}}">
	@for($x=$i*$point;$x<$i*$point+$point;$x++)
	@if(isset($search[$x]))
		<div class="cell">
			<div class="panel">
			    <div class="heading">
			        <span class="title">{{$search[$x]->nama}}</span>
			    </div>
			    <div class="content">
			        <img src="{{$search[$x]->photo}}">
			        <div class="padding10">
				        <hr>
				        <table class="table striped hovered bordered">
				        	<tr>
				        		<td>Creator</td>
				        		<td>{{$search[$x]->creator}}</td>
			        		</tr>
				        	<tr>
				        		<td>Scale</td>
				        		<td>{{$search[$x]->realscale==1?"Realscale":"Non-Realscale"}}</td>
			        		</tr>
				        	<tr>
				        		<td>Status</td>
				        		<td>
				        		@if($search[$x]->status=="plu")
				        			Private Limited User
				        		@elseif($search[$x]->status=="free")
				        			Freeware
				        		@elseif($search[$x]->status=="pay")
				        			Payware
				        		@endif
				        		</td>
			        		</tr>
				        </table>
				        <div dir="rtl" >
				        	<a class="text-right button primary" href="{{route('rute_detail',[$search[$x]->status,$search[$x]->id])}}">...Selengkapnya</a>
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