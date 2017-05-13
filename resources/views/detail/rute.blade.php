@extends('local')

@section('content')

	<table id="ko_titleBlock_4" class="vb-outer" style="background-color: #bfbfbf;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#bfbfbf">
		<tbody>
			<tr>
				<td class="vb-outer" style="padding-left: 9px; padding-right: 9px; background-color: #bfbfbf;" align="center" valign="top" bgcolor="#bfbfbf">
					<div class="oldwebkit" style="max-width: 570px;">
						<table class="vb-container halfpad" style="border-collapse: separate; border-spacing: 9px; padding-left: 9px; padding-right: 9px; width: 100%; max-width: 570px; background-color: #fff;" border="0" width="570" cellspacing="9" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td style="background-color: #ffffff; font-size: 22px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f; text-align: center;" align="center" bgcolor="#ffffff">
										{{$data->nama}}
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

	@if($data->status=="free" or $data->status!="free" and Auth::check())
	<table id="ko_singleArticleBlock_3" class="vb-outer" style="background-color: #bfbfbf;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#bfbfbf">
		<tbody>
			<tr>
				<td class="vb-outer" style="padding-left: 9px; padding-right: 9px; background-color: #bfbfbf;" align="center" valign="top" bgcolor="#bfbfbf">
					<div class="oldwebkit" style="max-width: 570px;">
						<table class="vb-container fullpad" style="border-collapse: separate; border-spacing: 18px; padding-left: 0; padding-right: 0; width: 100%; max-width: 570px; background-color: #fff;" border="0" width="570" cellspacing="18" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td class="links-color" align="left" valign="top" width="100%">
										<img class="mobile-full" style="border: 0px; display: block; vertical-align: top; max-width: 534px; width: 100%; height: auto;" src="{{$konten->photo}}" alt="" width="534" border="0" hspace="0" vspace="0" />
									</td>
								</tr>
								<tr>
									<td>
										<table border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
											<tbody>
												<tr>
													<td class="long-text links-color" style="text-align: left; font-size: 13px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f;" align="left">
														<p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px;word-wrap: break-word;white-space: normal;max-width: 534px;width: 534px;">
															{!!$data->description!!}
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
													<td style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f; text-align: left;">
														<span style="color: #3f3f3f;">
															 Downloadable Dep {{$data->nama}}
														</span>
													</td>
												</tr>
												<tr>
													<td class="long-text links-color" style="text-align: left; font-size: 13px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f;" align="left">
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
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	@endif
	<table id="ko_buttonBlock_5" class="vb-outer" style="background-color: #bfbfbf;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#bfbfbf">
		<tbody>
			<tr>
				<td class="vb-outer" style="padding-left: 9px; padding-right: 9px; background-color: #bfbfbf;" align="center" valign="top" bgcolor="#bfbfbf">
					<div class="oldwebkit" style="max-width: 570px;">
						<table class="vb-container fullpad" style="border-collapse: separate; border-spacing: 18px; padding-left: 0; padding-right: 0; width: 100%; max-width: 570px; background-color: #fff;" border="0" width="570" cellspacing="18" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td style="background-color: #ffffff;" align="center" valign="top" bgcolor="#ffffff">
									@if($data->status=="free")
										<a href="{{route('link_content',[base64_encode($data->status),base64_encode($data->id)])}}">
									@else
										@if(Auth::check())
											<a href="{{route('kirim_konten',[Auth::id(),$data->id,$data->status])}}">
										@else
											<a href="{{route('home')}}">
										@endif
									@endif
											<table class="mobile-full" border="0" cellspacing="0" cellpadding="0" align="center">
												<tbody>
													<tr>
														<td style="font-size: 22px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f; font-weight: normal; padding-left: 14px; padding-right: 14px; background-color: #bfbfbf; border-radius: 4px;" align="center" valign="middle" bgcolor="#bfbfbf" width="auto" height="50">
															@if($data->status=="free")
																Download {{$data->nama}}
															@else
																@if(Auth::check())
																	Kirim ke Email Saya ( Auth::user()->email )
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