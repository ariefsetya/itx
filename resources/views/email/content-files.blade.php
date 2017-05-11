<!DOCTYPE html>
<html>
<head>
	<title>Indonesian Trainz X</title>
</head>
<body>
<center>
	<table id="ko_titleBlock_4" class="vb-outer" style="background-color: #bfbfbf;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#bfbfbf">
		<tbody>
			<tr>
				<td class="vb-outer" style="padding-left: 9px; padding-right: 9px; background-color: #bfbfbf;" align="center" valign="top" bgcolor="#bfbfbf">
					<div class="oldwebkit" style="max-width: 570px;">
						<table class="vb-container halfpad" style="border-collapse: separate; border-spacing: 9px; padding-left: 9px; padding-right: 9px; width: 100%; max-width: 570px; background-color: #fff;" border="0" width="570" cellspacing="9" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td style="background-color: #ffffff; font-size: 22px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f; text-align: center;" align="center" bgcolor="#ffffff">
										{{$konten->nama}}
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
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
															{!!$konten->description!!}
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
															 Downloadable Dep {{$konten->nama}}
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
	<table id="ko_buttonBlock_5" class="vb-outer" style="background-color: #bfbfbf;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#bfbfbf">
		<tbody>
			<tr>
				<td class="vb-outer" style="padding-left: 9px; padding-right: 9px; background-color: #bfbfbf;" align="center" valign="top" bgcolor="#bfbfbf">
					<div class="oldwebkit" style="max-width: 570px;">
						<table class="vb-container fullpad" style="border-collapse: separate; border-spacing: 18px; padding-left: 0; padding-right: 0; width: 100%; max-width: 570px; background-color: #fff;" border="0" width="570" cellspacing="18" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td style="background-color: #ffffff;" align="center" valign="top" bgcolor="#ffffff">
									@if($is_userkonten)
										<a href="{{route('link_user_content',[base64_encode($user_konten->id)])}}">
									@else
										<a href="{{route('link_content',[base64_encode($type_code),base64_encode($konten->id)])}}">
									@endif
											<table class="mobile-full" border="0" cellspacing="0" cellpadding="0" align="center">
												<tbody>
													<tr>
														<td style="font-size: 22px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f; font-weight: normal; padding-left: 14px; padding-right: 14px; background-color: #bfbfbf; border-radius: 4px;" align="center" valign="middle" bgcolor="#bfbfbf" width="auto" height="50">
															Download {{$konten->nama}}
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
	<table id="ko_hrBlock_6" class="vb-outer" style="background-color: #bfbfbf;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#bfbfbf">
		<tbody>
			<tr>
				<td class="vb-outer" style="padding-left: 9px; padding-right: 9px; background-color: #bfbfbf;" align="center" valign="top" bgcolor="#bfbfbf">
					<div class="oldwebkit" style="max-width: 570px;">
						<table class="vb-container halfpad" style="border-collapse: separate; border-spacing: 9px; padding-left: 9px; padding-right: 9px; width: 100%; max-width: 570px; background-color: #fff;" border="0" width="570" cellspacing="9" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td style="background-color: #ffffff;" align="center" valign="top" bgcolor="#ffffff">
										<table style="width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td style="font-size: 1px; line-height: 1px; width: 100%; background-color: #3f3f3f;" width="100%" height="1">
														 
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
	<table id="ko_textBlock_7" class="vb-outer" style="background-color: #bfbfbf;" border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#bfbfbf">
		<tbody>
			<tr>
				<td class="vb-outer" style="padding-left: 9px; padding-right: 9px; background-color: #bfbfbf;" align="center" valign="top" bgcolor="#bfbfbf">
					<div class="oldwebkit" style="max-width: 570px;">
						<table class="vb-container fullpad" style="border-collapse: separate; border-spacing: 18px; padding-left: 0; padding-right: 0; width: 100%; max-width: 570px; background-color: #fff;" border="0" width="570" cellspacing="18" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td class="long-text links-color" style="text-align: left; font-size: 13px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f;" align="left">
										<p style="margin: 1em 0px; margin-top: 0px;">
											<h3>PLU Content for</h3>
											<table style="width: 100%">
												<tr>
													<td>{{$user->name}}</td>
												</tr>
												<tr>
													<td>{{$user->email}}</td>
												</tr>
											</table>
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</center>

</body>
</html>