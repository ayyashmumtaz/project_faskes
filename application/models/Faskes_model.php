<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes_model extends CI_Model
{
   private $table_faskes = 'faskes';

   public function getAllDataFaskes()
   {
      $this->db->select('*');
      $this->db->from('faskes');
      $this->db->join('jenis_faskes', 'jenis_faskes.id = faskes.id', 'LEFT');
      $query = $this->db->get();

      return $query->result();
   }
}
