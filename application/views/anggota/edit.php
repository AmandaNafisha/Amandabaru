<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Anggota</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('anggota/update'); ?>" method="post">
                <input type="hidden" name="id" value="<?= $anggota->id; ?>">

                <div class="form-group">
                    <label>Nomor Anggota</label>
                    <input type="text" name="no_anggota" class="form-control" value="<?= $anggota->no_anggota; ?>" required>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $anggota->nama; ?>" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required><?= $anggota->alamat; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="<?= $anggota->telepon; ?>" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $anggota->email; ?>" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="Aktif" <?= ($anggota->status == 'Aktif') ? 'selected' : ''; ?>>Aktif</option>
                        <option value="Tidak Aktif" <?= ($anggota->status == 'Tidak Aktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>