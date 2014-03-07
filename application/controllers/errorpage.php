<?php

class errorpage extends CI_Controller {
  
  function errorpage()
  {
    parent::__construct();
    
  }
  
  function index()
  {
    
  }
  
  function number($no)
  {
    $data['main_view']  = 'error/404';
    $this->load->view('template/main',$data);
  }
  
}
// END errorpage Class

/* End of file errorpage.php */
/* Location: ./application/controllers/errorpage.php */
?>