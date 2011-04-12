<?php
include('controller.php');
class Student_File extends Controller{
	
	function __construct()
    {
        parent::__construct();          
    }
	
	function index($sort_by = 'name', $sort_order = 'asc', $offset = 0){
		
		$limit = 20;
    	$data['fields'] = array(
			'Student_ID' => 'Student ID',
			'Name' => 'Name',
			'Major' => 'Major',
			'Year' => 'Year',
			'GPA' => 'GPA'
		);
		
		$data['title'] = 'Student File';
		$data['error'] = "";
        $data['main_content'] = 'student_file_view';
		$data['records'] = array('0600526','Rory Walker','Com Sci','Final','2.9');
		$data['num_results'] = 1;
		$config['base_url'] = site_url("student_file/index/$sort_by/$sort_order");
		$config['total_rows'] = 1;
		$config['per_page'] = $limit;
		$config['num_links'] = 20;
		$config['uri_segment'] = 5;
		$config['full_tag_open'] = '<div id="inventory">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;
		
		$this->load->view('includes/template', $data);
		
	}
}