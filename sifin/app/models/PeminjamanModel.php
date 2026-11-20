<?php
class PeminjamanModel
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table .
            ' ORDER BY id_peminjaman DESC'
        );

        return $this->db->resultSet();
    }

    public function tambahPeminjaman($data)
    {
        $query = "INSERT INTO peminjaman
                  (
                      no_peminjaman,
                      id_peminjam,
                      tanggal_pinjam,
                      tanggal_rencana_kembali,
                      tanggal_kembali_aktual,
                      status,
                      id_lokasi,
                      id_user
                  )
                  VALUES
                  (
                      :no_peminjaman,
                      :id_peminjam,
                      :tanggal_pinjam,
                      :tanggal_rencana_kembali,
                      :tanggal_kembali_aktual,
                      :status,
                      :id_lokasi,
                      :id_user
                  )";

        $this->db->query($query);
        $this->db->bind('no_peminjaman', $data['no_peminjaman']);
        $this->db->bind('id_peminjam', $data['id_peminjam']);
        $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
        $this->db->bind(
            'tanggal_rencana_kembali',
            $data['tanggal_rencana_kembali']
        );
        $this->db->bind(
            'tanggal_kembali_aktual',
            !empty($data['tanggal_kembali_aktual'])
                ? $data['tanggal_kembali_aktual']
                : null
        );
        $this->db->bind('status', $data['status']);
        $this->db->bind('id_lokasi', $data['id_lokasi']);
        $this->db->bind('id_user', $data['id_user']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPeminjamanById($id)
    {
        $this->db->query(
            'SELECT * FROM peminjaman
             WHERE id_peminjaman = :id'
        );

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function updatePeminjaman($data)
    {
        $query = "UPDATE peminjaman SET
                  no_peminjaman = :no_peminjaman,
                  id_peminjam = :id_peminjam,
                  tanggal_pinjam = :tanggal_pinjam,
                  tanggal_rencana_kembali = :tanggal_rencana_kembali,
                  tanggal_kembali_aktual = :tanggal_kembali_aktual,
                  status = :status,
                  id_lokasi = :id_lokasi,
                  id_user = :id_user
                  WHERE id_peminjaman = :id_peminjaman";

        $this->db->query($query);
        $this->db->bind('no_peminjaman', $data['no_peminjaman']);
        $this->db->bind('id_peminjam', $data['id_peminjam']);
        $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
        $this->db->bind(
            'tanggal_rencana_kembali',
            $data['tanggal_rencana_kembali']
        );
        $this->db->bind(
            'tanggal_kembali_aktual',
            !empty($data['tanggal_kembali_aktual'])
                ? $data['tanggal_kembali_aktual']
                : null
        );
        $this->db->bind('status', $data['status']);
        $this->db->bind('id_lokasi', $data['id_lokasi']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('id_peminjaman', $data['id_peminjaman']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletePeminjaman($id)
    {
        $this->db->query(
            'DELETE FROM peminjaman
             WHERE id_peminjaman = :id'
        );

        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
