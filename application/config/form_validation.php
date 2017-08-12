<?php
		$config = array(
			array(
				'field' =>  'stud_username',
				'label' => 'User Name',
				'rules' => 'required|is_unique[students.user_name]',
				'errors' => array(
					'required' => 'Please input UNIQUE %s',
					'is_unique' => 'User name already existed, please choose another name!'
				),
			),
			array(
				'field' =>  'stud_fname',
				'label' => 'Student First Name',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
			array(
				'field' =>  'stud_mname',
				'label' => 'Student Middle Name',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
			array(
				'field' =>  'stud_lname',
				'label' => 'Student Last Name',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
			array(
				'field' =>  'stud_pass',
				'label' => 'Student Password',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
			array(
				'field' =>  'stud_bday',
				'label' => 'Student Birthday',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
			array(
				'field' =>  'stud_address',
				'label' => 'Student Address',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
			array(
				'field' =>  'stud_contact',
				'label' => 'Student Contact',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
			array(
				'field' =>  'stud_pog',
				'label' => 'Student Parent/Guardian',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Please input %s',
				),
			),
		);