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
			        		@if($search[$x]->reskin!=null)
				        	<tr>
				        		<td>Reskin</td>
				        		<td>{{$search[$x]->reskin}}</td>
			        		</tr>
			        		@endif
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
				        	<tr>
				        		<td colspan="2"  style="word-wrap: break-word;white-space:pre-wrap;max-width:100px;">Description<br><br>{!!$search[$x]->description or '--No Description--'!!}</td>
				        	</tr>
				        </table>
				        <div dir="rtl" >
				        	@if(Auth::check() and $search[$x]->status!="free" or $search[$x]->status=="free")
				        	<a class="text-right button primary" href="{{route('link_user_objek',[base64_encode($search[$x]->id)])}}">Download</a>
				        	@else
				        	<a class="text-right button primary" target="_blank" href="https://facebook.com/indonesiantrainzx/"><span>Hubungi kami</span></a>
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