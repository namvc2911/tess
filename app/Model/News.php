<?php 
	class News extends AppModel{
		var $name = "News";
		public $belongsTo = array(
			'User'=>array(
			'className' =>'User',
			'foreignKey'	=> 'user_id'
			)

		);
		
	}

 ?>