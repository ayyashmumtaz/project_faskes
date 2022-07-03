<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faskes_model extends CI_Model
{
   private $table_faskes = 'faskes';

   public function getAllDataFaskes()
   {
      $this->db->select('*');
      $this->db->from('faskes');
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.kecamatan_id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'left');
      $query = $this->db->get();

      return $query->result();
   }

   function getKecamatan()
   {
      return $this->db->get('kecamatan')->result_array();
   }

   // buat option otomatis ngambil by=id table jenis_faskes
   public function getJenisFaskes()
   {
      return $this->db->get('jenis_faskes')->result_array();
   }

   public function findFaskesById($id)
   {
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'left');

      $query = $this->db->get_where('faskes', array('id' => $id));
      return $query->row();
   }

   // DELETE
   public function deleteFaskes($id)
   {
      $this->db->where('id', $id);
      $this->db->delete('faskes');
   }


   // Select keacamatan, kategori from faskes
   public function specificSearch($kecamatan, $kategori) {
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.kecamatan_id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'LEFT');
      $this->db->like('nama_kecamatan', $kecamatan, 'before');
      $this->db->like('nama_faskes', $kategori, 'before');
      $query = $this->db->get('faskes');
      return $query->result();
   }

   // Search By Keyword
   public function searchByKeyword() {
      $keyword = $this->input->get('keyword', true);
      $kecamatan = $this->session->userdata('kecamatan');
      $kategori = $this->session->userdata('kategori');
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.kecamatan_id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'LEFT');
      $this->db->like('nama', $keyword);
      $this->db->like('nama_kecamatan', $kecamatan);
      $this->db->like('nama_faskes', $kategori);
      $query = $this->db->get('faskes');
      return $query->result();
   }
}