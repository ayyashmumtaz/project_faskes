<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_model extends CI_Model
{
   private $table_faskes = 'kecamatan';

   public function getAllDataKecamatan()
   {
      $this->db->select('*');
      $this->db->from('kecamatan');
      $query = $this->db->get();

      return $query->result();
   }
}