<?php $p = $data['peminjaman']; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>Edit Peminjaman</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Peminjaman</h3>
                </div>

                <div class="card-body">
                    <form action="<?= base_url; ?>/peminjaman/updatePeminjaman"
                          method="POST">

                        <input type="hidden" name="id_peminjaman"
                               value="<?= htmlspecialchars((string)$p['id_peminjaman']); ?>">

                        <div class="form-group">
                            <label>No. Peminjaman</label>
                            <input type="text" name="no_peminjaman"
                                   class="form-control"
                                   value="<?= htmlspecialchars($p['no_peminjaman'] ?? ''); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>ID Peminjam</label>
                            <input type="number" name="id_peminjam"
                                   class="form-control"
                                   value="<?= htmlspecialchars((string)$p['id_peminjam']); ?>"
                                   min="1" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="date" name="tanggal_pinjam"
                                   class="form-control"
                                   value="<?= htmlspecialchars($p['tanggal_pinjam'] ?? ''); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Rencana Kembali</label>
                            <input type="date" name="tanggal_rencana_kembali"
                                   class="form-control"
                                   value="<?= htmlspecialchars($p['tanggal_rencana_kembali'] ?? ''); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali Aktual</label>
                            <input type="date" name="tanggal_kembali_aktual"
                                   class="form-control"
                                   value="<?= htmlspecialchars($p['tanggal_kembali_aktual'] ?? ''); ?>">
                            <small class="text-muted">
                                Kosongkan jika barang belum dikembalikan.
                            </small>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status"
                                   class="form-control"
                                   value="<?= htmlspecialchars($p['status'] ?? ''); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>ID Lokasi</label>
                            <input type="number" name="id_lokasi"
                                   class="form-control"
                                   value="<?= htmlspecialchars((string)$p['id_lokasi']); ?>"
                                   min="1" required>
                        </div>

                        <div class="form-group">
                            <label>ID User</label>
                            <input type="number" name="id_user"
                                   class="form-control"
                                   value="<?= htmlspecialchars((string)$p['id_user']); ?>"
                                   min="1" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>

                        <a href="<?= base_url; ?>/peminjaman"
                           class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
