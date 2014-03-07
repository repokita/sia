<?php
  
class home extends CI_Controller {
  
  function home()
  {
    parent::__construct();
    
  }
  
  function index()
  {
    $data['main_view']  = 'dashboard/main';
    $this->load->view('template/main',$data);
  }
  
}
// END home Class

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>