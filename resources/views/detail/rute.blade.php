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

	<table id="ko_singleArticleBlock_3" class="vb-outer" border="0" width="100%" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td class="vb-outer" align="center" valign="top">
					<div class="oldwebkit">
						<table class="vb-container fullpad" style="border-collapse: separate; width: 100%; background-color: #fff;" border="0" cellspacing="18" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td class="links-color" align="left" valign="top" width="100%">
										<img class="mobile-full" style="border: 0px; display: block; vertical-align: top;  width: 100%; height: auto;" src="{{$data->photo}}" alt="" border="0" hspace="0" vspace="0" />
									</td>
								</tr>

								@if($data->status=="free" or $data->status!="free" and Auth::check())
								<tr>
									<td>
										<table border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
											<tbody>
												<tr>
													<td class="long-text links-color" style="text-align: left; color: #3f3f3f;" align="left">
														<p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px;word-wrap: break-word;white-space: normal;">
															{!!preg_replace('/((www|http:\/\/)[^ ]+)/', '<a href="\1" target="_blank">\1</a>', $data->description)!!}
														</p>
													</td>
												</tr>
											</tbody>
										</table>
										<table border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
											<tbody>
												<tr>
													<td style="font-size: 1px; line-height: 1px;" height="9">
														 
													</td>
												</tr>
												<tr>
													<td style="color: #3f3f3f; text-align: left;">
														<span style="color: #3f3f3f;">
															 Downloadable Dep {{$data->nama}}
														</span>
													</td>
												</tr>
												<tr>
													<td class="long-text links-color" style="text-align: left; color: #3f3f3f;" align="left">
														<p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px;">
															@foreach($dep_konten as $row)
																<a href="{{route('link_dep_konten',[base64_encode($row->id)])}}">{{$row->nama}}</a><br>
															@endforeach
														</p>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
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
										<a href="{{route('link_content',[base64_encode($data->status),base64_encode($data->id)])}}">
									@else
										@if(Auth::check())
											<a href="{{route('kirim_konten_member',[Auth::id(),$data->id,2])}}">
										@else
											<a href="{{route('home')}}">
										@endif
									@endif
											<table class="mobile-full" border="0" cellspacing="0" cellpadding="0" align="center">
												<tbody>
													<tr>
														<td style="font-weight: normal; padding-left: 14px; padding-right: 14px; background-color: #bfbfbf; border-radius: 4px;" align="center" valign="middle" width="auto" height="50">
															@if($data->status=="free")
																Download {{$data->nama}}
															@else
																@if(Auth::check())
																	Kirim ke Email Saya ( {{Auth::user()->email}} )
																@else
																	Masuk
																@endif
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