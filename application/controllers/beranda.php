<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index()
    {
        $data['css1'] = "<link href='http://tools.bsmsite.com/template/global/css/jumbotron.css' rel='stylesheet'>";
        $data['css2'] = "<link href='http://tools.bsmsite.com/template/artist_management/css/beranda.css' rel='stylesheet'>";
        $data['css3'] = "";
        $data['js1'] = "";
        $data['js2'] = "";
        $this->load->view('front/beranda_view', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */