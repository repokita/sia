<?php

class guru extends CI_Controller {
  
  function guru()
  {
    parent::__construct();
    
  }
  
  function index()
  {
    $data['main_view']  = 'guru/main';
    $this->load->view('template/main',$data);
  }
  
}
// END guru Class

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */
?>