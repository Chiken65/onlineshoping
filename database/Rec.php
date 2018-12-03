<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rec extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->helper('form');
        $this->load->library('pagination');
       // $this->load->model('MovieModel');
	}
	
    public function __destruct() {  
        $this->db->close();  
	}
	
	public function index()
	{
		$data['hame_banners'] = $this->sitedata->hame_banners();
		$data['why_this'] = $this->sitedata->list_whyREC();
		$data['cource_list'] = $this->sitedata->home_cource_list();
		$data['palcement_banners'] = $this->sitedata->home_palcement_banners();
		$data['palcement_logos'] = $this->sitedata->home_palcement_logos();
		$data['home_videos'] = $this->sitedata->home_videos();
		$data['stalwarts'] = $this->sitedata->stalwarts();
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();
		$data['news_events'] = $this->sitedata->latest_news_events();
		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('index', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
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


	public function department_profile($dept)
	{
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();
		$data['dept_data'] = $this->sitedata->single_dept($dept);

		$data['dpdata'] = $this->sitedata->dept_data($dept);


		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('department_profile', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
	}

	public function department_faculty($dept)
	{
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();

		$data['faculty'] = $this->sitedata->faculty($dept);
		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('department_faculty', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
	}

	public function department_peopos($dept)
	{
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();
		$data['dept_data'] = $this->sitedata->single_dept($dept);

		$data['peos'] = $this->sitedata->dept_peos($dept);
		$data['pos'] = $this->sitedata->dept_pos($dept);

		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('department_peopos', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
	}


	public function department_rollofhonour($dept)
	{
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();

		$data['roh'] = $this->sitedata->role_of_honour($dept);
		$data['dept_data'] = $this->sitedata->single_dept($dept);

		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('department_rollofhonour', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
	}


	public function department_toppers_list($dept)
	{
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();
		$data['dept_data'] = $this->sitedata->single_dept($dept);

		$data['top1'] = $this->sitedata->toppers($dept, 'I');
		$data['top2'] = $this->sitedata->toppers($dept, 'II');
		$data['top3'] = $this->sitedata->toppers($dept, 'III');
		$data['top4'] = $this->sitedata->toppers($dept, 'Iv');
		// print_r($data['top4']);

		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('department_toppers_list', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
	}

	public function faculty_list($dept){
		$data['departments'] = $this->sitedata->departments_rec();
        $data['profile'] = $this->sitedata->profile();
		$data['dept_data'] = $this->sitedata->single_dept($dept);

		$data['faculties'] = $this->sitedata->faculty($dept);
        $data['department'] = $dept;
    	$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('department_faculty', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
    }

    public function activities($dept){
		$data['departments'] = $this->sitedata->departments_rec();
        $data['profile'] = $this->sitedata->profile();

		$data['activities'] = $this->sitedata->activities($dept);
   		$data['dept_data'] = $this->sitedata->single_dept($dept);
	    $data['department'] = $dept;
    	$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('activities', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
    }

    public function achievements($dept){
		$data['departments'] = $this->sitedata->departments_rec();
        $data['profile'] = $this->sitedata->profile();

		// $data['achievements'] = $this->sitedata->achievements($dept);
   		$data['dept_data'] = $this->sitedata->single_dept($dept);
		$data['years'] = $this->sitedata->achievements('','');

		foreach($data['years'] as $yr) {
			$data['achievements'][$yr->achievement_of] = $this->sitedata->achievements($dept,$yr->achievement_of);
		}
		// print_r($data['achievements']);
		$this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('achievements', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
    }

	
// placements
	public function placements()
	{
		$this->load->view('common/header');
		$this->load->view('common/navigation');
		$this->load->view('placements');
		$this->load->view('common/main_footer');
		$this->load->view('common/footer');
	}

//news and events
	public function news_events_details($id,$page=null)
	{
	  // echo $id, $page;
       
		$data['departments'] = $this->sitedata->departments_rec();
		$data['profile'] = $this->sitedata->profile();
         $data['page'] = $page;
        $data['news_events'] = $this->sitedata->news_events_details($id);
        $this->load->view('common/header', $data);
		$this->load->view('common/navigation', $data);
		$this->load->view('newsandeventsdetails', $data);
		$this->load->view('common/main_footer', $data);
		$this->load->view('common/footer', $data);
	}
    
//    public function news_New(){
//        $data1['departments'] = $this->sitedata->departments_rec();
//		$data1['profile'] = $this->sitedata->profile();
//        
//       $data1['news_events'] = $this->sitedata->news_events();
//         $config['total_rows'] = $this->sitedata->getAllEmployeeCount();
//            $data['total_count'] = $config['total_rows'];
//            $config['suffix'] = '';
//
//            if ($config['total_rows'] > 0) {
//                $page_number = $this->uri->segment(3);
//                $config['base_url'] = base_url() . 'rec/news_New/';
//                if (empty($page_number))
//                    $page_number = 1;
//                $offset = ($page_number - 1) * $this->pagination->per_page;
//                $this->sitedata->setPageNumber($this->pagination->per_page);
//                $this->sitedata->setOffset($offset);
//                $this->pagination->cur_page = $offset;
//                $this->pagination->initialize($config);
//                $data['page_links'] = $this->pagination->create_links();
//                $data['employeeInfo'] = $this->sitedata->employeeList();
//            }
//          //  print_r($config);
//         //   print_r($data);
//           // exit();
//            
//            // load view
//            	$this->load->view('common/header', $data1);
//	 	$this->load->view('common/navigation', $data1);
//        
//      
//	 	 $this->load->view('newsandevents', $data);
// 	$this->load->view('common/main_footer', $data1);
//	 $this->load->view('common/footer', $data1);
//       
//    }
    
//    
//public function index2($offset=0){
//  
//  $config['total_rows'] = $this->sitedata->totalMovies();
//  
//  $config['base_url'] = base_url()."index.php/rec/index2";
//  $config['per_page'] = 5;
//  $config['uri_segment'] = '2';
//
//  $config['full_tag_open'] = '<div class="pagination"><ul>';
//  $config['full_tag_close'] = '</ul></div>';
//
//  $config['first_link'] = '« First';
//  $config['first_tag_open'] = '<li class="prev page">';
//  $config['first_tag_close'] = '</li>';
//
//  $config['last_link'] = 'Last »';
//  $config['last_tag_open'] = '<li class="next page">';
//  $config['last_tag_close'] = '</li>';
//
//  $config['next_link'] = 'Next ?';
//  $config['next_tag_open'] = '<li class="next page">';
//  $config['next_tag_close'] = '</li>';
//
//  $config['prev_link'] = '? Previous';
//  $config['prev_tag_open'] = '<li class="prev page">';
//  $config['prev_tag_close'] = '</li>';
//
//  $config['cur_tag_open'] = '<li class="active"><a href="">';
//  $config['cur_tag_close'] = '</a></li>';
//
//  $config['num_tag_open'] = '<li class="page">';
//  $config['num_tag_close'] = '</li>';
//
//
//  $this->pagination->initialize($config);
//   
//
//  $query = $this->sitedata->getMovies(5,$this->uri->segment(3));
//  
//  $data['MOVIES'] = null;
//  
//  if($query){
//   $data['MOVIES'] =  $query;
//  }
//
//  $this->load->view('test.php', $data);
// }

public function index3(){
    $data1['departments'] = $this->sitedata->departments_rec();
		$data1['profile'] = $this->sitedata->profile();
   $this->load->view('common/header', $data1);
	 	$this->load->view('common/navigation', $data1);
        
        $this->load->view('test1.php');
	 	// $this->load->view('newsandevents', $data);
 	$this->load->view('common/main_footer', $data1);
	 $this->load->view('common/footer', $data1);
  
 }

}
