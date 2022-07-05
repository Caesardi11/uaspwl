<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelcoin extends CI_Model {
    //query builder
    public function getData($tabel) {
        $dapat = $this->db->get($tabel);
        return $dapat->result_array();
    }
    public function insertData($tabel, $data) {
        $dapat = $this->db->insert($tabel, $data);
        return $dapat;
    }
    public function deleteData($tabel, $data) {
        $dapat = $this->db->delete($tabel, $data);
        return $dapat;
    }

    //update data
    public function updateData($tabel, $data, $where) {
        $dapat = $this->db->update($tabel, $data, $where);
        return $dapat;
    }

    public function getData_khusus($tabel, $where) {
        $crypto = $this->db->get_where($tabel, $where);
        return $crypto->result_array();
    }
}