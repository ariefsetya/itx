@extends('local')

@section('content')

	<table id="ko_titleBlock_4" class="vb-outer" border="0" width="100%" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td class="vb-outer" align="center" valign="top">
					<div class="oldwebkit">
						<table class="vb-container halfpad" style="border-collapse: separate; width: 100%; background-color: #fff;" border="0" cellspacing="9" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td style=" text-align: center;" align="center" bgcolor="#ffffff">
										<h2>{{$data->nama}}</h2>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="panel">
        <div class="content">
            <img src="{{$data->photo}}">
        </div>
    </div>
    <div class="panel">
    	<div class="heading">
    		<span class="title">Description</span>
    	</div>
        <div class="content" style="padding:20px;">
            <p style="ord-wrap: break-word;white-space: pre-line;">
				{!!preg_replace('/((http:\/\/|https:\/\/)\S+)/', '<a href="$1" target="_blank">$1</a>', str_replace("<br>","\n",$data->description))!!}
			</p>
        </div>
    </div>
    @if($data->status=="free" or $data->status=="plu" and Auth::check())
    <div class="panel">
    	<div class="heading">
    		<span class="title">Downloadable Dep {{$data->nama}}</span>
    	</div>
        <div class="content" style="padding:20px;">
            <p>
				@foreach($dep_konten as $row)
					<a href="{{route('link_dep_konten',[base64_encode($row->id)])}}">{{$row->nama}}</a><br>
				@endforeach
			</p>
        </div>
    </div>
	@endif
	<table id="ko_buttonBlock_5" class="vb-outer" border="0" width="100%" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td class="vb-outer" align="center" valign="top">
					<div class="oldwebkit">
						<table class="vb-container fullpad" style="border-collapse: separate; width: 100%; background-color: #fff;" border="0" cellspacing="18" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td style="" align="center" valign="top" bgcolor="#ffffff">
									@if($data->status=="free")
										<a href="{{route('link_content',[base64_encode("rute"),base64_encode($data->id)])}}">
									@elseif($data->status=="plu")
										@if(Auth::check())
											<a href="{{route('kirim_konten_member',[Auth::id(),$data->id,2])}}">
										@else
											<a href="{{route('home')}}">
										@endif
									@elseif($data->status=="pay")
										<a target="_blank" href="https://facebook.com/indonesiantrainzx/">
									@endif
											<table class="mobile-full" border="0" cellspacing="0" cellpadding="0" align="center">
												<tbody>
													<tr>
														<td style="font-weight: normal; padding-left: 14px; padding-right: 14px; background-color: #bfbfbf; border-radius: 4px;" align="center" valign="middle" width="auto" height="50">
															@if($data->status=="free")
																Download {{$data->nama}}
															@elseif($data->status=="plu")
																@if(Auth::check())
																	Kirim ke Email Saya ( {{Auth::user()->email}} )
																@else
																	Masuk
																@endif
															@elseif($data->status=="pay")
																Hubungi Kami
															@endif
														</td>
													</tr>
												</tbody>
											</table>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

@endsection