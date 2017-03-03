@extends('local')

@section('content')
<h1>Upload Train</h1>
<div class="grid">
	<div class="row cells1">
		<div class="cell">
			<form method="POST" action="{{route('save_train')}}" enctype="multipart/form-data">
			{{csrf_field()}}
				<table class="table bordered">
					<tr>
						<td>KUID</td>
						<td>
							<div class="full-size input-control text">
								<input type="text" name="kuid" placeholder="KUID" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>
							<div class="full-size input-control text">
								<input type="text" name="nama" placeholder="Nama Lokomotif/Kereta/Gerbong" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>Seri</td>
						<td>
							<div class="full-size input-control text">
								<input type="text" name="seri" placeholder="Nomor Seri" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>Jenis</td>
						<td>
							<div class="full-size input-control text">
								<select name="jenis" required>
									<option value="">--Pilih--</option>
									<option value="lokomotif">Lokomotif</option>
									<option value="kereta">Kereta</option>
									<option value="gerbong">Gerbong</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>Subjenis</td>
						<td>
							<div class="full-size input-control text">
								<input type="text" name="subjenis" placeholder="CC 201/CC 206/K1/K2/K3/Special" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>CDP Files</td>
						<td>
							<div class="input-control file full-size" data-role="input">
							    <input type="file" name="cdp_files" placeholder="CDP Files" required>
							    <button class="button"><span class="mif-folder"></span></button>
							</div>
						</td>
					</tr>
					<tr>
						<td>Realscale?</td>
						<td>
							<div class="full-size input-control text">
								<select name="realscale" required>
									<option value="">--Pilih--</option>
									<option value="1">Ya</option>
									<option value="0">Tidak</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>Foto</td>
						<td>
							<div class="input-control file full-size" data-role="input">
							    <input type="file" name="photo" placeholder="Foto Tampilan" required>
							    <button class="button"><span class="mif-folder"></span></button>
							</div>
						</td>
					</tr>
					<tr>
						<td>Creator</td>
						<td>
							<div class="full-size input-control text">
								<input type="text" name="creator" placeholder="Creator" required>
							</div>
						</td>
					</tr>
					<tr>
						<td>Reskin</td>
						<td>
							<div class="full-size input-control text">
								<input type="text" name="reskin" placeholder="Reskin (OPSIONAL)">
							</div>
						</td>
					</tr>
					<tr>
						<td>Status</td>
						<td>
							<div class="full-size input-control text">
								<select name="status" required>
									<option value="">--Pilih--</option>
									<option value="free">Freeware</option>
									<option value="plu">Private Limited User</option>
									<option value="pay">Payware</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>Description</td>
						<td>
							<div class="full-size input-control textarea">
								<textarea type="text" name="description" placeholder="Deskripsi" required></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>Publik?</td>
						<td>
							<div class="full-size input-control text">
								<select name="open" required>
									<option value="">--Pilih--</option>
									<option value="1">Ya</option>
									<option value="0">Tidak</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button type="submit" class="button primary" name="train">Upload</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>


@stop