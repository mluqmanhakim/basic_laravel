<form class="form" method="post" action="" role="form">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<p>Nama: <input type="text" name="nama" value = "{{$customer->nama}}"> </p>
		<p>Email: <input type="text" name="email" value = "{{$customer->email}}"> </p>
		<p>Alamat: <input type="text" name="alamat" value = "{{$customer->alamat}}" > </p>
		<p>Jenis Kelamin: <input type="text" name="jenis_kelamin" value = "{{$customer->jenis_kelamin}}" > </p>
		<input type="hidden" name="id" value="{{$customer->id}}">
	</div>
	<div class="form-group">
		<button type="submit" name="comment" class="btn btn-primary">Simpan Data Konsumen</button>
	</div>
</form>

