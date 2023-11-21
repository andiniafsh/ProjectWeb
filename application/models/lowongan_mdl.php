<?php

class LowonganModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function get_lowongan(){
        return $this->db->get('lowongan')->result();
    }

    function insert_lowongan($data){
        
        $insert_data = array(
            // 'id_lowongan' => $data['id_lowongan'],
            'nama_lowongan' => $data['nama_lowongan'],
            'mapel' => $data['mapel'], 
            'hari' => $data['hari'],
            'waktu' => $data['waktu'],
            'lokasi' => $data['lokasi'],
            'kualifikasi' => $data['kualifikasi'],
            'info_cp' => $data['info_cp']
        );
        $this->db->insert('lowongan', $insert_data);
        return $this->db->affected_rows();
    }

    function get_one($id_lowongan){
        
        $this->db->where('id_lowongan', $id_lowongan);
        return $this->db->get('lowongan')->result();
    }

    function update_lowongan($data){

        $data_update = array(
            'nama_lowongan' => $data['nama_lowongan'],
            'mapel' => $data['mapel'], 
            'hari' => $data['hari'],
            'waktu' => $data['waktu'],
            'lokasi' => $data['lokasi'],
            'kualifikasi' => $data['kualifikasi'],
            'info_cp' => $data['info_cp']
        );
        $this->db->where('id_lowongan', $data['id_lowongan']);
        $this->db->update('lowongan', $data_update);
    }

    function delete($id_lowongan){

        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->delete('lowongan');
    }
}
