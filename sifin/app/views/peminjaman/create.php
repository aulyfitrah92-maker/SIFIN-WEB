<div class="content-wrapper">

    <section class="content-header">
        <h1>Tambah Peminjaman</h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Peminjaman</h3>
                </div>

                <div class="card-body">
                    <form action="<?= base_url; ?>/peminjaman/simpanPeminjaman"
                          method="POST">

                        <div class="form-group">
                            <label>No. Peminjaman</label>
                            <input type="text" name="no_peminjaman"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>ID Peminjam</label>
                            <input type="number" name="id_peminjam"
                                   class="form-control" min="1" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="date" name="tanggal_pinjam"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Rencana Kembali</label>
                            <input type="date" name="tanggal_rencana_kembali"
                                   class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali Aktual</label>
                            <input type="date" name="tanggal_kembali_aktual"
                                   class="form-control">
                            <small class="text-muted">
                                Kosongkan jika barang belum dikembalikan.
                            </small>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status"
                                   class="form-control"
                                   placeholder="Contoh: Dipinjam"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>ID Lokasi</label>
                            <input type="number" name="id_lokasi"
                                   class="form-control" min="1" required>
                        </div>

                        <div class="form-group">
                            <label>ID User</label>
                            <input type="number" name="id_user"
                                   class="form-control" min="1" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
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
