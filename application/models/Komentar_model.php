<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model
{
   private $table_komentar = 'komentar';

   public function getAllDataKomentar()
   {
      
      $this->db->select('faskes.nama as nama_faskes, komentar.isi, komentar.tanggal, nilai_rating.nama as nama_rating, users.*');
      $this->db->from('komentar');
      $this->db->join('faskes', 'faskes.id = komentar.faskes_id', 'LEFT');
      $this->db->join('users', 'users.id = komentar.users_id', 'LEFT');
      $this->db->join('nilai_rating', 'nilai_rating.id_rating = komentar.nilai_rating_id', 'LEFT');
      $query = $this->db->get();

      return $query->result();
   }
}