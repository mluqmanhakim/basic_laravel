<form class="form" method="post" action="" role="form">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<p>Nama: <input type="text" name="nama" > </p>
		<p>Email: <input type="text" name="email" > </p>
		<p>Alamat: <input type="text" name="alamat"> </p>
		<p>Jenis Kelamin: <input type="text" name="jenis_kelamin"> </p>

	</div>
	<div class="form-group">
		<button type="submit" name="comment" class="btn btn-primary">Simpan Data Konsumen</button>
	</div>
</form>

