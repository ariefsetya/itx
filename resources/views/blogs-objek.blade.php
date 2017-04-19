@extends('local')

@section('content')
<h1>{{$query}}</h1>
<div class="grid">
	@for($i=0;$i<ceil(sizeof($search)/$point);$i++)
	<div class="row cells{{$point}}">
	@for($x=($i>0?1:0);$x<$point+($i>0?1:0);$x++)
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
				        		<td>Creator</td>
				        		<td>{{$search[$i+$x]->creator}}</td>
			        		</tr>
			        		@if($search[$i+$x]->reskin!=null)
				        	<tr>
				        		<td>Reskin</td>
				        		<td>{{$search[$i+$x]->reskin}}</td>
			        		</tr>
			        		@endif
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
				        		<td colspan="2"  style="word-wrap: break-word;white-space:pre-wrap;max-width:100px;">Description<br><br>{!!$search[$i+$x]->description or '--No Description--'!!}</td>
				        	</tr>
				        </table>
				        <div dir="rtl" >
				        	@if(Auth::check() and $search[$i+$x]->status!="free" or $search[$i+$x]->status=="free")
				        	<a class="text-right button primary" href="{{route('link_user_objek',[base64_encode($search[$i+$x]->id)])}}">Download</a>
				        	@else
				        	<a class="text-right button primary" href="{{route('link_user_objek',[base64_encode($search[$i+$x]->id)])}}"><span>Masuk atau Daftar untuk download</span></a>
				        	@endif
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