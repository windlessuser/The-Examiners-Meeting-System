<div id="student_file_table">
	<?php $headings = array();
		foreach($fields as $field_name => $field_display):?>
			<?php
				$str = ""; 
				$str .= anchor("student_file/index/$field_name/" .
					(($sort_order == 'asc' && $sort_by == $field_name) ? 'desc' : 'asc'),
				$field_display); 
				array_push($headings, $str);?>
			<?php endforeach;?>
	<?php $this->table->set_heading($headings); 
		 if($num_results > 0){ 
    		
    		$this->table->add_row($records);
		 }
		$this->table->set_caption('Student File');?>
    <?php echo $this->table->generate();?>
	<?php echo $this->pagination->create_links();?>
</div>