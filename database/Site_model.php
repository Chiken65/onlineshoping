<?php

class Site_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }


       // Declare variables
        private $_limit;
        private $_pageNumber;
        private $_offset;
        // setter getter function
        public function setLimit($limit) {
            $this->_limit = $limit;
        }

        public function setPageNumber($pageNumber){
            $this->_pageNumber = $pageNumber;
        }

        public function setOffset($offset) {
            $this->_offset = $offset;
        }
        // Count all record of table "employee" in database.
        public function getAllEmployeeCount() {
            $this->db->from('news_events');
            return $this->db->count_all_results();
        }
        // Fetch data according to per_page limit.
        public function employeeList() {  
            echo "SELECT * FROM news_events WHERE status=1 AND find_in_set('1', college_id) ORDER BY `news_events`.`event_date` DESC LIMIT $this->_pageNumber, $this->_offset";
              $query = $this->db->query("SELECT * FROM news_events WHERE status=1 AND find_in_set('1', college_id) ORDER BY `news_events`.`event_date` DESC LIMIT $this->_pageNumber, $this->_offset ");
         
            //$this->db->select(array('e.id', 'e.name', 'e.email', 'e.salary', 'e.age'));
            //$this->db->from('employee as e');          
           // $this->db->limit($this->_pageNumber, $this->_offset);
             
            return $query->result();
        }
        
        //TESTING 2
        
         function getMovies($limit=null,$offset=NULL){
            if($offset == NULL){
                $offset =4;
            }
            echo "SELECT * FROM news_events WHERE status=1 AND find_in_set('1', college_id) ORDER BY `news_events`.`event_date` DESC LIMIT $limit,$offset ";
           $query = $this->db->query("SELECT * FROM news_events WHERE status=1 AND find_in_set('1', college_id) ORDER BY `news_events`.`event_date` DESC LIMIT $limit,$offset ");
            return $query->result();
         }
        
         function totalMovies(){
           $this->db->select('id');
           $this->db->from('news_events');
           $this->db->where('status=1 and find_in_set(1,college_id) ');
           $num_results = $this->db->count_all_results();
            
          return $num_results;
         }






















    
    function hame_banners() {
        $query = $this->db->query("select title, image from banners where college = 1 and status = 1 order by display_order asc");
        return $query->result();
    }

    function list_whyREC() {
        $query = $this->db->query("select img, subject, message from why_this where colgids = 1 and status = 1 order by display_order asc");
        return $query->result();
    }

    function home_cource_list() {
        // $query = $this->db->query("select br.*, cr.course as course_name from branches br inner join courses cr on cr.id = br.course where cr.college = 1 limit 6");
        $query = $this->db->query("select br.*, cr.course as course_name,d.page_name from branches br inner join courses cr on cr.id = br.course INNER JOIN departments d ON d.id=br.department where cr.college = 1 limit 6");
        return $query->result();
    }

    function home_palcement_banners() {
        $query = $this->db->query("select * from placement_banners where status=1 order by display_order asc");
        return $query->result();
    }

    function home_palcement_logos() {
        $query = $this->db->query("select * from placement_logos where status=1 order by display_order asc");
        return $query->result();
    }

    function home_videos() {
        $query = $this->db->query("select * from home_videos where status=1 order by display_order asc limit 2");
        return $query->result();
    }

    function stalwarts() {
        $query = $this->db->query("select * from stalwarts where status=1 order by display_order asc");
        return $query->result();
    }


    function profile() {
        $query = $this->db->query("select * from settings where college_id=1 and  status=1 ");
        return $query->row();
    }

    function departments_rec(){
        $query = $this->db->query("SELECT * FROM `departments` WHERE college=1 AND status=1 ORDER BY `departments`.`display_order` ASC");
        return $query->result();
    }

    function single_dept($value){
        $query = $this->db->query("SELECT * FROM `departments` WHERE college=1 AND status=1 AND page_name='".$value."' ORDER BY `departments`.`display_order` ASC");
        return $query->row();
    }

    function features() {
        $query = $this->db->query("select * from features where colgids=1 and status=1 ORDER BY `features`.`display_order` ASC");
        return $query->result();
    }

    function gbody_members() {
        $query = $this->db->query("select * from governing_body where mem_type='Member' and colgids=1 and status=1 order by display_order asc");
        return $query->result();
    }

    function gbody_heads() {
        $query = $this->db->query("select * from governing_body where mem_type!='Member' and colgids=1 and status=1 order by display_order asc");
        return $query->result();
    }

    function page_data($page) {
        $query = $this->db->query("select * from pages where page = '".$page."' and college = 1 limit 1");
        return $query->row();
    }

    function dept_data($dept) {
        $query = $this->db->query("select * from department_profiles dp inner join departments d on d.id = dp.dept_id where dp.college_id = 1 and d.page_name='".$dept."' and dp.status = 1 limit 1 ");
        return $query->row();
    }

    function dept_peos($dept) {
        $query = $this->db->query("select * from department_peos dp inner join departments d on d.id = dp.dept_id where dp.college_id = 1 and d.page_name='".$dept."' and dp.status=1
        ");
        return $query->result();
    }

    function faculty($dept){
       $query = $this->db->query("select *,d.full_name from faculty f inner join departments d on d.id = f.department_id where f.college_id = 1 and d.page_name = '".$dept."' and f.status = 1 ORDER BY CASE
        WHEN designation='Principal' then 1 WHEN designation='Professor' then 2 WHEN designation='Assistant Professor' then 3 WHEN designation='Associate Professor' then 4  else 5 end");
        return $query->result();   
    }

    function dept_pos($dept) {
        $query = $this->db->query("select * from department_pos dp inner join departments d on d.id = dp.dept_id where dp.college_id = 1 and d.page_name='".$dept."' and dp.status=1
        ");
        return $query->result();
    }

    function role_of_honour($dept) {
        $query = $this->db->query("select * from department_role_of_honor dp inner join departments d on d.id = dp.dept_id where dp.college_id = 1 and d.page_name='".$dept."' and dp.status=1 order by display_order asc ");
        return $query->result();
    }

    function toppers($dept, $yr) {
        $query = $this->db->query("select * from department_toppers dp inner join departments d on d.id = dp.dept_id where dp.college_id = 1 and dp.year = '".$yr."' and d.page_name='".$dept."' and dp.status=1 ORDER BY dp.batch DESC");
        return $query->result();
    }

    function placement_banners($year) {
        $query = $this->db->query("select * from placement_banners where status=1 and year='".$year."' order by display_order asc");
        return $query->result();
    }

    function placements($year) {
        $query = $this->db->query("select * from placements where status=1 and year='".$year."' order by display_order asc");
        return $query->result();
    }

    function academic_batches() {
        $query = $this->db->query("select * from academic_year where status=1 order by display_order desc");
        return $query->result();
    }

    function infra_details() {
        $query = $this->db->query("select * from college_infra where status=1 and colgids=1 order by display_order asc");
        return $query->result();
    }

    function news_events(){
        $query = $this->db->query("SELECT * FROM news_events WHERE status=1 AND find_in_set('1', college_id) ORDER BY `news_events`.`event_date` DESC");
        return $query->result();
    }

    function news_events_details($id) {
        $query = $this->db->query("SELECT a.*  FROM news_events a where id ='".$id."' AND find_in_set('1', college_id)");
        return $query->result();
    }

    function latest_news_events() {
        $query = $this->db->query("SELECT * FROM news_events WHERE status=1 AND find_in_set('1', college_id) ORDER BY event_date DESC LIMIT 3");
        return $query->result();
    }

    function activities($dept) {
        $query = $this->db->query("SELECT a.* FROM activities a WHERE find_in_set((SELECT d.id FROM `departments` d WHERE d.page_name='$dept' AND college='1'), a.dept_id) and status='1' order by a.id desc ");
        return $query->result();
    }

    function achievements($dept,$type) {
         
        if($dept != '')
        {
            $query = $this->db->query("SELECT (SELECT GROUP_CONCAT(dd.full_name) FROM departments dd WHERE find_in_set(dd.id,a.achieved_by_dept)) as departments, (SELECT GROUP_CONCAT(s.firstname) FROM students s WHERE find_in_set(s.reg_no,a.achieved_by)) as students,(SELECT GROUP_CONCAT(f.facultyname) FROM faculty f WHERE find_in_set(f.reg_no,a.achieved_by)) as faculty,a.* FROM `achievements` a WHERE achievement_of='$type' AND find_in_set((SELECT d.id FROM `departments` d WHERE d.page_name='$dept' AND college='1'), achieved_by_dept) and status='1' order by a.id desc");
            return $query->result();
        }
        else
        {
            $query = $this->db->query("SELECT a.achievement_of FROM achievements a GROUP BY a.achievement_of");
            return $query->result();   
        }
    }

    function get_message() {
        $query = $this->db->query("SELECT * FROM `messages` WHERE college_id='1' AND status=1 ORDER BY `display_order` ASC");
        return $query->result();
    }


}

?>