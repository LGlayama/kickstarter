<?php
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
	  
      $arrdata = "design";

	  if ( ! file_exists(APPPATH.'views/design/'.$page.'.php') and ! file_exists(APPPATH.'views/fashion/'.$page.'.php'))
	    {
	        // Whoops, we don't have a page for that!
	        show_404();
	    }

	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->helper('url');

	    $this->load->view('templates/header', $data);
	    
	    if ($arrdata == "design"){$this->load->view('design/'.$page, $data);}
	    else{$this->load->view('fashion/'.$page, $data);}

	    $this->load->view('button', $data);
	    $this->load->view('templates/footer', $data);
	}




	// public function save($page = 'home')
	// {
	  
	//   $arrdata=$this->input->post('field');
       

	//   if ( ! file_exists(APPPATH.'views/design/'.$page.'.php') and ! file_exists(APPPATH.'views/fashion/'.$page.'.php'))
	//     {
	//         // Whoops, we don't have a page for that!
	//         show_404();
	//     }

	//     $data['title'] = ucfirst($page); // Capitalize the first letter

	//     $this->load->helper('url');

	//     $this->load->view('templates/header', $data);
	    
	//     if ($arrdata == "design"){$this->load->view('design/'.$page, $data);}
	//     else{$this->load->view('fashion/'.$page, $data);}

	//     $this->load->view('button', $data);
	//     $this->load->view('templates/footer', $data);
	// }
}