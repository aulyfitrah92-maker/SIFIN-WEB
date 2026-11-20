<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1><?= $data['title']; ?></h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <?php Flasher::Message(); ?>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Peminjaman</h3>

                    <div class="card-tools">
                        <a href="<?= base_url; ?>/peminjaman/tambah"
                           class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i>
                            Tambah Peminjaman
                        </a>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Peminjaman</th>
                                <th>ID Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Rencana Kembali</th>
                                <th>Aktual Kembali</th>
                                <th>Status</th>
                                <th>ID Lokasi</th>
                                <th>ID User</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($data['peminjaman'])) : ?>
                                <?php $no = 1; ?>

                                <?php foreach ($data['peminjaman'] as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td>
                                            <?= htmlspecialchars($row['no_peminjaman'] ?? ''); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars((string)($row['id_peminjam'] ?? '')); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($row['tanggal_pinjam'] ?? ''); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($row['tanggal_rencana_kembali'] ?? ''); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($row['tanggal_kembali_aktual'] ?? '-'); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars($row['status'] ?? ''); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars((string)($row['id_lokasi'] ?? '')); ?>
                                        </td>

                                        <td>
                                            <?= htmlspecialchars((string)($row['id_user'] ?? '')); ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url; ?>/peminjaman/edit/<?= urlencode((string)$row['id_peminjaman']); ?>"
                                               class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <form action="<?= base_url; ?>/peminjaman/hapus/<?= urlencode((string)$row['id_peminjaman']); ?>"
                                                  method="POST"
                                                  style="display:inline;"
                                                  onsubmit="return confirm('Yakin ingin menghapus data peminjaman ini?');">
                                                <button type="submit"
                                                        class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            <?php else : ?>
                                <tr>
                                    <td colspan="10" class="text-center">
                                        Belum ada data peminjaman.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</div>
