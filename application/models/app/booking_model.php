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
class Booking_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function getApbd() {
        $this->db->order_by('kode', 'asc');
        return $this->db->get('tbevaluasi_anggaran_apbd');
    }
    function getApbdCari() {
        $tahun = $this->input->post('tahun');
        $this->db->where('year(date)', $tahun);
        $this->db->order_by('kode', 'asc');
        return $this->db->get('tbevaluasi_anggaran_apbd');
    }
    function save() {
        $data = array(
            'tbuser_id' => $this->session->userdata('userid'),
            'event_date' => $this->input->post('event_date'),
            'event_location' => $this->input->post('event_location'),
            'event_type' => $this->input->post('event_type'),
            'approximate_budget' => $this->input->post('approximate_budget'),
            'event_comments' => $this->input->post('event_comments')
        );
        $this->db->insert('tbbook', $data);
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
