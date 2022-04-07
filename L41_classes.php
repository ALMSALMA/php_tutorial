<?php

	class User {

		// public $email;
		// public $name;

        private $email;
		private $name;

		public function __construct($name, $email){
			// $this->name = 'Mohammad';
			// $this->email = 'moh@teknoclass.com';
			$this->name = $name;
			$this->email = $email;
		}

		public function login(){
			// echo 'the user logged in';
			echo $this->name . ' logged in'. '</br>';
		}

        public function getName(){
			return $this->name;
		}

		public function setName($name){
			if(is_string($name) && strlen($name) > 1){
				$this->name = $name;
				return "name updated to $name";
			} else {
				return 'not a valid name';
			}
		}

	}

	// $userOne = new User();
	
	// $userOne->login();
	// echo $userOne->name;

	$userTwo = new User('Mohammad', 'moh@teknoclass.com');

	// echo $userTwo->email;
	$userTwo->login();

    // $userTwo->name = 'Ahmad';
	// echo $userTwo->name;

	echo $userTwo->getName(). '</br>';
	echo $userTwo->setName('Ahmad'). '</br>';
	echo $userTwo->getName(). '</br>';



?>