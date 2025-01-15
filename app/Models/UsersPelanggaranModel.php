<?php  
  
namespace App\Models;  
  
use CodeIgniter\Model;  
  
class UsersPelanggaranModel extends Model  
{  
    protected $table = 'pelanggaran_siswa';  
    protected $primaryKey = 'id_pelanggaran_siswa';  
    protected $allowedFields = ['siswa_id', 'kategori_id', 'pelanggaran_id', 'tanggal', 'deskripsi'];  
    protected $useSoftDeletes = true;  
    protected $deletedField = 'deleted_at';  
  
    public function getRiwayatPelanggaran($siswa_id)  
    {  
        return $this->db->table('pelanggaran_siswa ps')  
            ->select('u.username, k.nama_kategori, p.nama_pelanggaran, ps.tanggal, ps.deskripsi')  
            ->join('users u', 'u.id = ps.siswa_id')  
            ->join('kategori_pelanggaran k', 'k.id = ps.kategori_id')  
            ->join('pelanggaran p', 'p.id_pelanggaran = ps.pelanggaran_id')  
            ->where('ps.siswa_id', $siswa_id)  
            ->where('ps.deleted_at', null) // Pastikan hanya menampilkan data yang belum dihapus  
            ->where('u.deleted_at', null) // Pastikan hanya menampilkan data siswa yang belum dihapus  
            ->get()  
            ->getResultArray();  
    }  
  
    public function getJumlahRiwayatPelanggaran($siswa_id)  
    {  
        return $this->db->table('pelanggaran_siswa ps')  
            ->join('users u', 'u.id = ps.siswa_id')  
            ->where('ps.siswa_id', $siswa_id)  
            ->where('ps.deleted_at', null) // Pastikan hanya menampilkan data yang belum dihapus  
            ->where('u.deleted_at', null) // Pastikan hanya menampilkan data siswa yang belum dihapus  
            ->countAllResults();  
    }  
}  
