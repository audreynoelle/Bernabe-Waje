<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boots extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('students_model','students');
		$this->load->model('viewcrs_model','courses');
	}
	
	public function index(){
		$header_data['title']="SMS";
		
		$students = array();
		
		$rs = $this->students->read();
		
		
		foreach($rs as $r){
			$info = array(
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],
						'course' => $r['course']				
						);
			$students[] = $info;
		}
		
		$data['students'] = $students;
		
		$courses = array();
		
		$rs = $this->courses->read();
		
		
		foreach($rs as $r){
			$info = array(		
						'cname' => $r['cname']		
						);
			$courses[] = $info;
		}
		
		$data['courses'] = $courses;
		
		$this->load->view('include/h',$header_data);
		$this->load->view('students/contents',$data);
		$this->load->view('include/f');
		
	}
	
	public function viewcourses(){
		$header_data['title']="View Course";
		
		$courses = array();
		
		$rs = $this->courses->read();
		
		
		foreach($rs as $r){
			$info = array(
						'cid' => $r['cid'],		
						'cname' => $r['cname'],		
						'cdesc' => $r['cdesc']		
						);
			$courses[] = $info;
		}
		
		$data['courses'] = $courses;
		
		$this->load->view('include/h',$header_data);
		$this->load->view('students/viewcourses',$data);
		$this->load->view('include/f');
		
	}

	public function add_course() {
		
		if($_SERVER['REQUEST_METHOD']=='POST'){ //form was submitted
			
			$validate = array (
				array('field'=>'cid','label'=>'Course ID','rules'=>'trim|required|min_length[3]'),
				array('field'=>'cname','label'=>'Course Name','rules'=>'trim|required|min_length[3]'),
				array('field'=>'cdesc','label'=>'Course Description','rules'=>'trim|required|min_length[20]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);

			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()== FALSE){
				
				$data['errors'] = validation_errors();
				
				$header_data['title']="View Course";
		
				$this->load->view('include/h',$header_data);
				$this->load->view('students/new_course',$data);
				$this->load->view('include/f');

			}
			
			else {
				$record=array (
				'cid' => $this->input->post('cid'),
				'cname' => $this->input->post('cname'),
				'cdesc' => $this->input->post('cdesc'),
				);
				
				$this->courses->create($record);
				redirect('boots','refresh');
			}
			
			
		}
		
		else{ //display blank form
		
		$header_data['title']="Add New Student";
		$data= array();
		$this->load->view('include/h',$header_data);
		$this->load->view('students/new_course',$data);
		$this->load->view('include/f');
		}
			
		
	}
	

}

?>