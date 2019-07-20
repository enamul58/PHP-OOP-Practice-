<?php include 'header.php';?>

<?php

	interface School{
		public function mySchool();
	}
	interface Collage{
		public function myCollage();
	}
	interface Versity{
		public function myVersity();
	}
	
	class Teacher implements School, Collage, Versity{
		public function __construct(){
			$this->mySchool();
			$this->myCollage();
			$this->myVersity();
		}

		public function mySchool(){
			echo "i am a school teacher.<br/>";
		}
		public function myCollage(){
			echo "i am a collage teacher.<br/>";
		}
		public function myVersity(){
			echo "i am a versity teacher.<br/>";
		}
	}

	class Student implements School, Collage, Versity{
		public function __construct(){
			$this->mySchool();
			$this->myCollage();
			$this->myVersity();
		}

		public function mySchool(){
			echo "i am a school student.<br/>";
		}
		public function myCollage(){
			echo "i am a collage student.<br/>";
		}
		public function myVersity(){
			echo "i am a versity student";
		}
	}


	$teacherOne = new Teacher();
	$studentOne = new Student();

?>
	

<?php include 'footer.php';?>
