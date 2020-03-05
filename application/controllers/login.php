<?php
class Login extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->is_login();
	}
	function is_login(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		$logtype = $this->session->userdata('login_type');
		if($logtype != 1){
			//echo $is_login;
			redirect("welcome/index");
		}
		elseif(!$is_login){
			//echo $is_login;
			redirect("welcome/index");
		}
		elseif(!$is_lock){
			redirect("welcome/lockPage");
		}
	}
	public function index(){
		$data['pageTitle'] = 'Admin Dashboard';
		$data['smallTitle'] = 'Overview of all Section';
		$data['mainPage'] = 'Dashboard';
		$data['subPage'] = 'dashboard';

		$data['title'] = 'UMA Dashboard';

		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'dashboard';
		$this->load->view("includes/mainContent", $data);
	}
	public function website(){
		$data['pageTitle'] = 'website';
		$data['smallTitle'] = 'Overview of all Section';
		$data['mainPage'] = 'website';
		$data['subPage'] = 'website';
	
		$data['title'] = 'website';
	
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'website';
		$this->load->view("includes/mainContent", $data);
	}
	public function contactus(){
		$data['pageTitle'] = 'contactus';
		$data['smallTitle'] = 'Overview of all Section';
		$data['mainPage'] = 'contactus';
		$data['subPage'] = 'contactus';
	
		$data['title'] = 'contactus';
	
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'contactus';
		$this->load->view("includes/mainContent", $data);
	}
	public function schoolcontent(){
		$data['pageTitle'] = 'schoolcontent';
		$data['smallTitle'] = 'Overview of all Section';
		$data['mainPage'] = 'schoolcontent';
		$data['subPage'] = 'schoolcontent';
	
		$data['title'] = 'schoolcontent';
	
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'schoolcontent';
		$this->load->view("includes/mainContent", $data);
	}
	public function sms(){
		$data['pageTitle'] = 'sms';
		$data['smallTitle'] = 'Overview of all Section';
		$data['mainPage'] = 'sms';
		$data['subPage'] = 'sms';
	
		$data['title'] = 'sms';
	
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'sms';
		$this->load->view("includes/mainContent", $data);
	}
	
	public function noticeboard(){
		$data['pageTitle'] = 'noticeboard';
		$data['smallTitle'] = 'Overview of all Section';
		$data['mainPage'] = 'noticeboard';
		$data['subPage'] = 'noticeboard';
	
		$data['title'] = 'noticeboard';
	
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'noticeboard';
		$this->load->view("includes/mainContent", $data);
	}
        public function tthought(){
            	$data['pageTitle'] = 'tthought';
		$data['smallTitle'] = 'tthought';
		$data['mainPage'] = 'tthought';
		$data['subPage'] = 'tthought';

		$data['title'] = 'tthought';
		

		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'tthought';
           $this->load->view("includes/mainContent", $data);
           
        }
        public function birthday(){
        	$data['pageTitle'] = 'birthday';
        	$data['smallTitle'] = 'birthday';
        	$data['mainPage'] = 'birthday';
        	$data['subPage'] = 'birthday';
        
        	$data['title'] = 'tbirthday';
        
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'birthday';
        	$this->load->view("includes/mainContent", $data);
        	 
        }
        public function latestnews(){
        $data['pageTitle'] = 'latestnews';
        $data['smallTitle'] = 'latestnews';
        $data['mainPage'] = 'latestnews';
        $data['subPage'] = 'latestnews';
        
        $data['title'] = 'latestnews';
        
        
        $data['headerCss'] = 'headerCss/dashboardCss';
        $data['footerJs'] = 'footerJs/dashboardJs';
        $data['mainContent'] = 'latestnews';
        $this->load->view("includes/mainContent", $data);
        
        }
        public function resume(){
        	$data['pageTitle'] = 'resume';
        	$data['smallTitle'] = 'resume';
        	$data['mainPage'] = 'resume';
        	$data['subPage'] = 'resume';
        
        	$data['title'] = 'resume';
        
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'resume';
        	$this->load->view("includes/mainContent", $data);
        
        }
        public function inquiry(){
        	$data['pageTitle'] = 'inquiry';
        	$data['smallTitle'] = 'inquiry';
        	$data['mainPage'] = 'inquiry';
        	$data['subPage'] = 'inquiry';
        
        	$data['title'] = 'inquiry';
        
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'inquiry';
        	$this->load->view("includes/mainContent", $data);
        
        }
        public function formpurchase(){
        	$data['pageTitle'] = 'formpurchase';
        	$data['smallTitle'] = 'formpurchase';
        	$data['mainPage'] = 'formpurchase';
        	$data['subPage'] = 'formpurchase';
        
        	$data['title'] = 'formpurchase';
        
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'formpurchase';
        	$this->load->view("includes/mainContent", $data);
        
        }
        public function staffphoto(){
        	$data['pageTitle'] = 'staffphoto';
        	$data['smallTitle'] = 'staffphoto';
        	$data['mainPage'] = 'staffphoto';
        	$data['subPage'] = 'staffphoto';
        
        	$data['title'] = 'staffphoto';
        	 
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'staffphoto';
        	$this->load->view("includes/mainContent", $data);
        
        }
        public function homephoto(){
        	$data['pageTitle'] = 'homephoto';
        	$data['smallTitle'] = 'homephoto';
        	$data['mainPage'] = 'homephoto';
        	$data['subPage'] = 'homephoto';
        
        	$data['title'] = 'homephoto';
        
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'homephoto';
        	$this->load->view("includes/mainContent", $data);
        
        }
        public function priphoto(){
        	$data['pageTitle'] = 'priphoto';
        	$data['smallTitle'] = 'priphoto';
        	$data['mainPage'] = 'priphoto';
        	$data['subPage'] = 'priphoto';
        
        	$data['title'] = 'priphoto';
        
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'priphoto';
        	$this->load->view("includes/mainContent", $data);
        
        }
        public function gallery(){
        	$data['pageTitle'] = 'Gallery';
        	$data['smallTitle'] = 'Gallery';
        	$data['mainPage'] = 'VGallery';
        	$data['subPage'] = 'Gallery';
        
        	$data['title'] = 'Gallery';
        	
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'gallery';
        	$this->load->view("includes/mainContent", $data);
        	 
        }
        
        function changecomStatus(){
            $status = $this->input->post("status");
            $cid = $this->input->post("cid");
            
             $this->loginmodel->updatecid($cid,$status);
            echo "Solved";
        }
        
        public function payment(){
        	$data['pageTitle'] = 'payment';
        	$data['smallTitle'] = 'payment';
        	$data['mainPage'] = 'payment';
        	$data['subPage'] = 'payment';
        
        	$data['title'] = 'payment';
        	$data['rty']=$this->loginmodel->alldata();
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'payment';
        	$this->load->view("includes/mainContent", $data);
        	 
        }
        public function report(){
        	$data['pageTitle'] = 'report';
        	$data['smallTitle'] = 'report';
        	$data['mainPage'] = 'report';
        	$data['subPage'] = 'report';
        
        	$data['title'] = 'report';
        	$data['rty']=$this->loginmodel->alldata();
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'report';
        	$this->load->view("includes/mainContent", $data);
        
        }
        public function generatebill(){
        	$data['pageTitle'] = 'generatebill';
        	$data['smallTitle'] = 'generatebill';
        	$data['mainPage'] = 'generatebill';
        	$data['subPage'] = 'generatebill';
        
        	$data['title'] = 'generatebill';
        	$data['rty']=$this->loginmodel->alldata();
        
        	$data['headerCss'] = 'headerCss/dashboardCss';
        	$data['footerJs'] = 'footerJs/dashboardJs';
        	$data['mainContent'] = 'generatebill';
        	$this->load->view("includes/mainContent", $data);
        
        }
       
}