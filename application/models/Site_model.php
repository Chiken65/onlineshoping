<?php

class Site_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }


    function registerUserInfo($value)
    {
        $email = $value['email'];
        $pass = $value['pass'];
        $password = md5($pass);
        $name = $value['name'];
        $type = $value['type'];
        $phone_no = $value['phone_no'];
        $dob = $value['dob'];
        $gender = $value['type'];
        $address = $value['add'];

        $query = "INSERT INTO users(email, password, name, type, phone_no, gender, address, dob) VALUES ('$email', '$password', '$name', '$type', '$phone_no', '$gender', '$address','$dob')";
        return $this->db->query($query);
        
    }





    function login_check($value)
    {
         $this->db->where('email', $value['email']);
        $this->db->where('pass', md5($value['password']));
        $query = $this->db->get('user_details');
       
        $querydetails = $this->db->query("SELECT * FROM receiver where email='".$value['email']."'");
       
        $querysample = $this->db->query("SELECT *,h.hname as hospital_name FROM blood_request br inner JOIN hospital h on br.hospital=h.email where receiver='".$value['email']."' order by br.sn desc");

        
        
        if($query->num_rows() == 1)
        {
            $this->db->where('email', $value['email']);
            $query1 = $this->db->get('user_details');
            $row1=$querydetails->result();
            $row2=$querysample->result();
              $row=$query1->result();
             $return['receiver'] = $row1;
             $return['uers_type'] = $row;
             $return['samples'] = $row2;
             
            // return $data;
            // return $data1;
            return $return;
            

            
          }
          else
          {
            $data = [];
            return $data;
          }

    }

    function receiver_data($value)
    {


        $type = $value['type'];
        $fname = $value['fname'];
        $email = $value['email'];
        $pass = $value['pass'];
        $dob = $value['dob'];
        $gender = $value['gender'];
        $blood_group = $value['blood_group'];
        $weight = $value['weight'];
        $phone = $value['phone'];
        $mob = $value['mob'];
        $city = $value['city'];
        $pin = $value['pin'];
        $address = $value['add'];
        $d = date("y-m-d H:i:s");
        $hash = md5($pass);
        
        $query = "replace INTO user_details values('$email', '$fname', '$hash', '$type')";
        $lastid = $this->db->insert_id();
        echo $lastid;
        if ($this->db->query($query) === TRUE) {
        $query = "replace INTO receiver values('$fname', '$email', '$dob', '$gender', '$blood_group', $weight, $phone, $mob, '$address', '$city', $pin, '$d')";
        if ($this->db->query($query) === TRUE) {            
        return true;}
        else{
        return false;}
    }
        else
            return false; 
    }


    function hospital_data($value)
    {


        $type = $value['type'];
        $hname = $value['hname'];
        $cname = $value['cname'];
        $email = $value['email'];
        $pass = $value['pass'];
        $phone = $value['phone'];
        $mob = $value['mob'];
        $city = $value['city'];
        $pin = $value['pin'];
        $address = $value['add'];
        $d = date("y-m-d H:i:s");
        $hash = md5($pass);
        
        // $get_count = "INSERT INTO blood_sample (`email`) values( '$email')";
        // $this->db->query($query1);
        

        $checkV = $this->db->query(" select email from user_details where email = '$email' ")->result();
    
        if (sizeof($checkV) <= 0) {
            $query = "INSERT INTO user_details values('$email', '$hname', '$hash', '$type')";
            $fd = $this->db->query($query);
    
            
            $query1 = "INSERT INTO hospital values('$hname', '$cname', '$email',  $phone, $mob, '$city', '$pin', '$address', '$d')";
    
            $this->db->query($query1);
    
            $query2 = "INSERT INTO blood_sample (`email`) values( '$email')";
            
            $this->db->query($query2);
            return true;
        } else {
            return false;
        }
        
    }


   function addBlood($value){
    $a_plus= $value['a_plus'];
    $b_plus= $value['b_plus'];
    $o_plus= $value['o_plus'];
    $a_neg= $value['a_neg'];
    $b_neg= $value['b_neg'];
    $o_neg= $value['o_neg'];
    $ab_plus= $value['ab_plus'];
    $ab_neg= $value['ab_neg'];
    $email= $value['email'];
    $data = $this->db->query("replace INTO blood_sample values('$email','$a_plus','$b_plus','$o_plus','$a_neg','$b_neg','$o_neg','$ab_plus','$ab_neg')");
    return $data;
    

    }


    
    function availableBlood() { 
        $query = $this->db->query("SELECT * FROM blood_sample bs INNER join hospital h on bs.email=h.email");
        return $query->result();
    }

    function userRequest($hos,$user) { 
        $data['hospital'] = $this->db->query(" SELECT * FROM blood_sample bs INNER join hospital h on bs.email=h.email where h.email='$hos' ")->row();
        $data['user_details'] = $this->db->query("SELECT * FROM  receiver r where r.email='$user' ")->row();
        $data['count'] = $this->db->query(" SELECT COUNT(sn) as count FROM `blood_request` where hospital='$hos'  and status='pending'
        ")->row();
        return $data;
    }

   function request_sample($value){
    $receiver = $value['user_email'];
    $user = $value['hosp_email'];
    $blood = $value['b_group'];
    $data = $this->db->query(" INSERT INTO blood_request (`receiver`,`hospital`,`blood_group`) values('$receiver', '$user', '$blood')") ;
    return $data;
   }

   function viewRequest($hos){ 
    $data = $this->db->query(" SELECT *,br.blood_group as bg  FROM blood_request br inner join receiver r on br.receiver=r.email where hospital='$hos' and status='pending'");
    return $data->result()  ;
   }
    

   function update_status($value){
    $sn = $value['br_accept']; 
    $data = $this->db->query(" UPDATE blood_request set status = 'accepted' where sn='$sn'") ;


    $data2 = $this->db->query(" SELECT * FROM blood_types bt INNER JOIN blood_request b on b.blood_group = bt.bd_group  where  b.sn='$sn' ") ->row();  

    $data3 = $this->db->query(" UPDATE blood_sample set ".$data2->type_column." = ".$data2->type_column." - 1 where email='".$data2->hospital."' ") ;

    // $data3['1']= " UPDATE blood_request set status = 'accepted' where sn='$sn'";
    // $data3['2']= " SELECT * FROM blood_types bt INNER JOIN blood_request b on b.blood_group = bt.bd_group  where  b.sn='$sn' ";
    // $data3['3']= " UPDATE blood_sample set ".$data2->type_column." = ".$data2->type_column." - 1 where email='".$data2->hospital."' ";

    // print_r($data3);
    return $data;
   }

}

?>  
