<?php
	class person{
		public $Name  = "Enamul";
		public $Age   = "26";
		public $Skill = "Blogging";

		private $Email = "Enamul58@live.com";
		protected $pass = "12345"; 

      function iterator(){
      	 echo "inner_class";
     	foreach ($this as $key => $value) {
     		# code...
     		echo "<pre>";
     		echo "$value";
     		echo "</pre>";
     	}
     	
     }
}
?>