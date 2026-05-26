<div class="container-fluid">
<h3> Laporan Peminjaman </h3>

<form method="get">
    <input type="month" name="bulan" value="<?= $bulan; ?>">
    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
    <a href="<?= site_url('laporan/peminjaman'); ?>" class="btn btn-secondary btn-sm">Reset</a>
</form>

<br>

<a href="<?= site_url('laporan/cetak_pinjam?bulan='. $bulan); ?>"
target="_blank" class="btn btn-success btn-sm">Cetak</a>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($data as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->kode_peminjaman; ?></td>
            <td><?= $d->nama; ?></td>
            <td><?= $d->tanggal_pinjam; ?></td> 
            <td><?= $d->status; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>