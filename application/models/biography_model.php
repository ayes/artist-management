<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perencanaan_anggaran_apbn_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Biography_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function getBooking() {
        $this->db->order_by('id', 'asc');
        return $this->db->get('tbbook');
    }
    function getApbdCari() {
        $tahun = $this->input->post('tahun');
        $this->db->where('year(date)', $tahun);
        $this->db->order_by('kode', 'asc');
        return $this->db->get('tbevaluasi_anggaran_apbd');
    }
    function save() {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'name' => $this->input->post('name'),
            'mobile_phone' => $this->input->post('mobile_phone'),
            'status' => 'User'
        );
        $this->db->insert('tbuser', $data);
    }
    function getEditEvaluasiAnggaranApbd() {
        $this->db->where('id', $this->uri->segment(4));
        return $this->db->get('tbevaluasi_anggaran_apbd');
    }
    function update() {
        $id = $this->input->post('id');
        $data = array(
            'date' => con2mysql($this->input->post('date')),
            'kode' => $this->input->post('kode'),
            'lokasi_kegiatan' => $this->input->post('lokasi_kegiatan'),
            'uraian' => $this->input->post('uraian'),
            'cp_uraian' => $this->input->post('cp_uraian'),
            'cp_volume' => $this->input->post('cp_volume'),
            'cp_realisasi' => $this->input->post('cp_realisasi'),
            'cp_persen' => ($this->input->post('cp_realisasi') / $this->input->post('cp_volume')) * 100,
            'm_uraian' => $this->input->post('m_uraian'),
            'm_volume' => $this->input->post('m_volume'),
            'm_realisasi' => $this->input->post('m_realisasi'),
            'm_persen' => ($this->input->post('m_realisasi') / $this->input->post('m_volume')) * 100,
            'k_uraian' => $this->input->post('k_uraian'),
            'k_volume' => $this->input->post('k_volume'),
            'k_realisasi' => $this->input->post('k_realisasi'),
            'k_persen' => ($this->input->post('m_realisasi') / $this->input->post('m_volume')) * 100,
            'h_uraian' => $this->input->post('h_uraian'),
            'h_volume' => $this->input->post('h_volume'),
            'h_realisasi' => $this->input->post('h_realisasi'),
            'h_persen' => ($this->input->post('m_realisasi') / $this->input->post('m_volume')) * 100
        );
        $this->db->where('id', $id);
        $this->db->update('tbevaluasi_anggaran_apbd', $data);
    }
    function delete() {
        $this->db->where('id', $this->uri->segment(4));
        $this->db->delete('tbevaluasi_anggaran_apbd');
    }
}

?>
