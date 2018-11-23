<script type="text/javascript" language="javascript">
	if (localStorage.getItem('type')  != 'receiver' && localStorage.getItem('type')  != 'hospital') {
        document.cookie = "user_type = a " 
    } else {
        document.cookie = "user_type = " + localStorage.getItem('type') 
    }
    document.cookie = "user_email = " + localStorage.getItem('user_email') 
	document.cookie = "password = " + localStorage.getItem('password') 
</script>

<script>
	<?php
        $user_type= $_COOKIE['user_type'];
		$user_email= $_COOKIE['user_email'];
		$password= $_COOKIE['password'];	
    ?> 
</script>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online_shoping extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
		$this->load->helper('form');
		$this->load->library('session');		
		$this->load->helper('cookie');		
	}
	
    public function __destruct() {  
        $this->db->close();  
	}
	
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('index');
	}

	// to open registration page
	public function registrationPage() {
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('registrationPage');
	}









	public function viewRequest()
	{
		$hos= $_COOKIE['user_email'];
		$data['viewRequest']  = $this->sitedata->viewRequest($hos);
		$hos= $_COOKIE['user_email'];
		$user=$this->input->post("email"); 
		$data1 = $this->sitedata->userRequest($hos,$user); 
		$count=$data1['count'];
  		$this->load->view('common/header');
		$this->load->view('common/hospitalnavigation',$count);				
		$this->load->view('viewRequest',$data);
	}
	public function update_status()
	{
		$demo['br_accept'] = $this->input->post("br_accept");
		$data = $this->sitedata->update_status($demo);
		$hos= $_COOKIE['user_email'];
		$user= $_COOKIE['user_email'];
		$data= $this->sitedata->availableBlood(); 
		$data['viewRequest']  = $this->sitedata->viewRequest($hos);
 		$data1 = $this->sitedata->userRequest($hos,$user);
		$count=$data1['count']; 
		$this->load->view('common/header');
		$this->load->view('common/hospitalnavigation',$count);				
		$this->load->view('viewRequest',$data);
	}

	public function addBlood()
	{ 
		$hos= $_COOKIE['user_email'];
		$user=$this->input->post("email"); 
		$data = $this->sitedata->userRequest($hos,$user); 
		$hospital=$data['hospital'];
		$count=$data['count'];
		$demo['a_plus'] = $this->input->post("a_plus");
		$demo['b_plus'] = $this->input->post("b_plus");
		$demo['o_plus'] = $this->input->post("o_plus");
		$demo['a_neg'] = $this->input->post("a_neg");
		$demo['b_neg'] = $this->input->post("b_neg");
		$demo['o_neg'] = $this->input->post("o_neg");
		$demo['ab_plus'] = $this->input->post("ab_plus");
		$demo['ab_neg'] = $this->input->post("ab_neg");
		$demo['email'] = $this->input->post("email");
		$addblood = $this->sitedata->addBlood($demo); 
		echo "<script>console.log('" . json_encode($addblood) . "');</script>";
		
		
		// print_r($hospital);
		$this->load->view('common/header');
		$this->load->view('common/hospitalnavigation',$count);		
		$this->load->view('addBlood',$hospital);

	 }
	 
	 public function homeHospital()
	 {
		 $hos=$_COOKIE['user_email'];
		 $user=$_COOKIE['user_email']; 
		 $data = $this->sitedata->userRequest($hos,$user); 
		 $hospital=$data['hospital'];
		 $count=$data['count'];
		 
		 $this->load->view('common/header');
		 $this->load->view('common/hospitalnavigation',$count);		
		 $this->load->view('homeHospital',$hospital);
 
	  }
	  public function homeReceiver()
	  {
		  $hos=$_COOKIE['user_email'];
		  $user=$_COOKIE['user_email']; 
		  $data = $this->sitedata->userRequest($hos,$user); 
		  $demo['email'] = $_COOKIE['user_email'];
		  $demo['password'] = $_COOKIE['password'];
		  $login_check = $this->sitedata->login_check($demo);
		  $value = $login_check; 
  		  $this->load->view('common/header');
		  $this->load->view('common/receivernavigation');		
		  $this->load->view('homeReceiver',$value); 
		  
	   }
	public function hospital()
	{

		$hos = $_GET['hos'];
		$user = $_GET['user'];
		
		// echo $hos . ' ' .$user;

		$data = $this->sitedata->userRequest($hos,$user); 

		$this->load->view('common/header');
		$this->load->view('common/receivernavigation');
		$this->load->view('hospital',$data);
	}
	public function regReceiver()
	{
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('regReceiver');
	}
	public function regHospital()
	{
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('regHospital');
	}

	public function registerUserInfo() {
		$demo['email'] = $this->input->post('email');
		$demo['pass'] = $this->input->post('pass');
		$demo['name'] = $this->input->post('name');
		$demo['phone_no'] = $this->input->post('phone_no');
		$demo['dob'] = $this->input->post('dob');
		$demo['add'] = $this->input->post('add');
		$demo['type'] = $this->input->post('type');
		$demo['d'] = $this->input->post(date("y-m-d H:i:s"));
 		$check = $this->sitedata->registerUserInfo($demo);
		if ($check) {
			$this->session->set_flashdata('msg1', '<div class="alert alert-success text-center">Added Successfll</div>');		
			
			
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('login');
			} else {
				$this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Duplicate entry of email</div>');
				$this->load->view('common/header');
				$this->load->view('common/navigation');
				$this->load->view('regHospital');
					}

	}
	
	public function availableBlood()
	{
		$data['availableBlood'] = $this->sitedata->availableBlood(); 
		$hos= $_COOKIE['user_email'];
		$user=$this->input->post("email"); 
		$data1 = $this->sitedata->userRequest($hos,$user); 
 		
		$count=$data1['count'];
		
		$this->load->view('common/header');
		echo $_COOKIE['user_type'];
		if ($_COOKIE['user_type']=='receiver') {
					$this->load->view('common/receivernavigation');
		} else if ($_COOKIE['user_type']=='hospital')  {
			$this->load->view('common/hospitalnavigation',$count);
			
		}
		else if ($_COOKIE['user_type']='a')  {
			$this->load->view('common/navigation');
		}
		
  		
		$this->load->view('availableBlood',$data);
	}

	public function login()
	{ 
 		
		echo "<script>localStorage.clear();</script>";
		echo "<script>document.cookie = 'user_email ='' '  
		 </script>";
		 echo "<script>document.cookie = 'user_type ='' '  
		 </script>";
		
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('login');
	}

	
	public function request_sample()
	{
        $demo['hosp_email'] = $this->input->post("hosp_email");
		$demo['b_group'] = $this->input->post("b_group");
		$demo['user_email'] = $this->input->post("user_email");
		 $data = $this->sitedata->request_sample($demo);
		 echo "<script>console.log('" . json_encode($demo) . "');</script>";
		 
		 $data1['availableBlood'] = $this->sitedata->availableBlood(); 
		 
		 $demo['email'] =  $_COOKIE['user_email'];
		 $demo['password'] =$_COOKIE['password'];
		 $login_check = $this->sitedata->login_check($demo);
		 $value = $login_check;
		$this->load->view('common/header');
		$this->load->view('common/receivernavigation');
		 $this->load->view('homeReceiver',$value);

 		// $this->load-> login_check();
		//  $this->load->view('common/header');
		//  $this->load->view('common/receivernavigation');
		//  $this->load->view('availableBlood',$data1);
		 
	}

	public function login_check()
	{
        $demo['email'] = $this->input->post("email");
        $demo['password'] = $this->input->post("password");
		$login_check = $this->sitedata->login_check($demo);
 		$password=$demo['password'];
		$hos=$this->input->post("email");
		$user=$this->input->post("email"); 
		$data = $this->sitedata->userRequest($hos,$user); 
		$hospital=$data['hospital'];
		$count=$data['count'];
		echo "<script>console.log('" . json_encode($login_check) . "');</script>";
		
        if(sizeof($login_check)==0){
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
			$this->load->view('common/header');
			$this->load->view('common/navigation');
			$this->load->view('login');
        }
        else
        {
			if($login_check['uers_type'][0]->type == "hospital")
            {
				echo"
				<script>
				localStorage.setItem('type', 'hospital');  
				localStorage.setItem('user_email', '".$login_check['uers_type'][0]->email."');  
				localStorage.setItem('password', '".$password."');					
				</script>";
				 $this->load->view('common/header');
				 $this->load->view('common/hospitalnavigation',$count);
				 $this->load->view('homeHospital',$hospital);
            }
			else if($login_check['uers_type'][0]->type == "receiver")
			{
				$value = $login_check;
 					echo"
					<script>
					localStorage.setItem('type', 'receiver');  
					localStorage.setItem('user_email', '".$login_check['uers_type'][0]->email."');  
					localStorage.setItem('password', '".$password."');					
					
				
					</script>";
					// var retrievedData = localStorage.getItem('type');
					// echo "<script>console.log('" . json_encode($value) . "',retrievedData);</script>";
					
					$this->load->view('common/header');
					$this->load->view('common/receivernavigation');
 					$this->load->view('homeReceiver',$value); 

            }
 		}
	}

	public function receiver_data()
	{
		$demo['type'] = $this->input->post("type");
		$demo['fname'] = $this->input->post("fname");
		$demo['email'] = $this->input->post("email");
		$demo['pass'] = $this->input->post("pass");
		$demo['dob'] = $this->input->post("dob");
		$demo['gender'] = $this->input->post("gender");
		$demo['blood_group'] = $this->input->post("blood_group");
		$demo['weight'] = $this->input->post("weight");
		$demo['phone'] = $this->input->post("phone");
		$demo['mob'] = $this->input->post("mob");
		$demo['city'] = $this->input->post("city");
		$demo['pin'] = $this->input->post("pin");
		$demo['add'] = $this->input->post("add");
		$check = $this->sitedata->receiver_data($demo);

		if ($check!=0	) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success text-center"> Regestered Succefully!</div>');
			$this->load->view('common/header');
			$this->load->view('common/navigation');
			$this->load->view('login');
			//flash message if true
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center"> Email Exists!</div>');
				$this->load->view('common/header');
				$this->load->view('common/navigation');
				$this->load->view('login'); 
				//flash message.. -> validation ->duplicate entry -> error in server
					}
		

		// $this->load->view('common/header');
		// $this->load->view('common/navigation');
		// $this->load->view('login'); // rregistration page -> true { clear form, flash message login link(from index login)} -.flase{ form dont clear, flash message, }
	}

	public function hospital_data()
	{
		$demo['type'] = $this->input->post("type");
 		$demo['type'] = $this->input->post("type");
        $demo['hname'] = $this->input->post("hname");
        $demo['cname'] = $this->input->post("cname");
        $demo['email'] = $this->input->post("email");
        $demo['pass'] = $this->input->post("pass");
        $demo['phone'] = $this->input->post("phone");
        $demo['mob'] = $this->input->post("mob");
        $demo['city'] = $this->input->post("city");
        $demo['pin'] = $this->input->post("pin");
        $demo['add'] = $this->input->post("add"); 
		$demo['d'] = $this->input->post(date("y-m-d H:i:s"));
		
 		$check = $this->sitedata->hospital_data($demo);

		if ($check) {
			$this->session->set_flashdata('msg1', '<div class="alert alert-success text-center">Added Successfll</div>');		
			
			
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('login');
			} else {
				$this->session->set_flashdata('msg1', '<div class="alert alert-danger text-center">Duplicate entry of email</div>');
				$this->load->view('common/header');
				$this->load->view('common/navigation');
				$this->load->view('regHospital');
					} 
		
 // rregistration page -> true { clear form, flash message login link(from index login)} -.flase{ form dont clear, flash message, }
	}


	

	public function donars_list()
	{
        $value['blood_available'] = $this->sitedata->blood_available();
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('donars_list',$value);
	}


	public function page($page)
	{
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();

		if($page == 'about_us') $data['features'] = $this->sitedata->features();
		if($page == 'administration') {
			$data['heads'] = $this->sitedata->gbody_heads();
			$data['members'] = $this->sitedata->gbody_members();
			$data['message'] = $this->sitedata->get_message();
		}
		if($page == 'placements') {
			$data['years'] = $this->sitedata->academic_batches();
			foreach($data['years'] as $yr) {
				$data['bans'][$yr->year] = $this->sitedata->placement_banners($yr->year);
				$data['place'][$yr->year] = $this->sitedata->placements($yr->year);
			}			
		}
		if($page == 'infrastructure') {
			$data['infra'] = $this->sitedata->infra_details();
		}

		if($page == 'newsandevents') {
			$data['news_events'] = $this->sitedata->news_events();
		}

		if($page == 'achievements') {
			$data['achievements'] = $this->sitedata->achievements('');
		}

		$data['page_data'] = $this->sitedata->page_data($page);


		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view($page, $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
	}


}
 