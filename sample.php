<?php
    class Person {
        // first name of person
        private $fname;
        // last name of person
        private $lname;
        
        // public function to set value for fname
        public function setFName($fname) {
            $this->fname = $fname;
        }
        
        // public function to set value for lname
        public function setLName($lname) {
            $this->lname = $lname;
        }
        
        // public function to 
        public function showName() {
            echo "My name is: " . $this->fname . " " . $this->lname;
        }
    }
    
    // creating class object
    $john = new Person();
    
   
    // calling the public function to set fname and lname
    $john->setFName("John");
    $john->setLName("Wick");
    echo $john->showName();

?>