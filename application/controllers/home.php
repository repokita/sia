<?php
  
class home extends CI_Controller {
  
  function home()
  {
    parent::__construct();
    
  }
  
  function index()
  {
    $this->load->view('template/main');
  }
  
}
// END home Class

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>