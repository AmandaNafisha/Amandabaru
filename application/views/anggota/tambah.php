<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Form Input Anggota</h1>

<div class="card shadow mb-4">
<div class="card-body">

<form action="<?php echo base_url('anggota/simpan'); ?>" method="post">

<div class="form-group">
<label>Nomor Anggota</label>
<input type="text" name="no_anggota" class="form-control" required>
</div>

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control" required></textarea>
</div>

<div class="form-group">
<label>Telepon</label>
<input type="text" name="telepon" class="form-control" required>
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="form-group">
<label>Tanggal Daftar</label>
<input type="date" name="tgl_daftar" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">
Simpan
</button>

<a href="<?php echo base_url('anggota'); ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>
</div>

</div>