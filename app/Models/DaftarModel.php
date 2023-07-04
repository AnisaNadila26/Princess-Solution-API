<?php

namespace App\Models;
use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table         = 'daftar';
    protected $primaryKey    = 'no_registrasi';
    protected $allowedFields = [
        'nama', 'ttl', 'pekerjaan', 'alamat', 'telpon', 'jenis_kendaraan',
        'kode_kendaraan', 'instruktur', 'paket', 'jadwal', 'status', 'pembayaran', 'harga', 'anTransfer',
        'buktiTF', 'kehadiran', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;

    public function getDaftar($no_registrasi)
    {
        if ($no_registrasi == false) {
            return $this->findAll();
        }
        return $this->where(['no_registrasi' => $no_registrasi])->first();
    }

    public function search($keyword)
    {
        return $this->table('daftar')->like('no_registrasi', $keyword)->orLike('nama', $keyword)
            ->orLike('kode_kendaraan', $keyword)->orLike('instruktur', $keyword)->orLike('paket', $keyword)
            ->orLike('jadwal', $keyword)->orLike('status', $keyword);
    }

    public function getInstruktur($instruktur)
    {
        if ($instruktur == false) {
            return $this->findAll();
        }
        return $this->where('instruktur', $instruktur)->find();
    }

    public function getNoReg($no_registrasi)
    {
        if ($no_registrasi == false) {
            return $this->findAll();
        }
        return $this->where('no_registrasi', $no_registrasi)->find();
    }
}
