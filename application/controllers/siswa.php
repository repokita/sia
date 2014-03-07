<?php

class siswa extends CI_Controller {
  
  function siswa()
  {
    parent::__construct();
    
  }
  
  function index()
  {
    $data['main_view']  = 'siswa/main';
    $this->load->view('template/main',$data);
  }
  
}
// END siswa Class

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */
?>