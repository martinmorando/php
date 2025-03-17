<?php
/*
    OOP
*/

class User {

    protected $name;

    // Constructor
    public function __construct($name) {
        $this->setName($name);
    }

    // String representation
    public function __toString() {
        return "User: " . $this->name;
    }

    // Setter
    protected function setName($name) {
        // Validate
        if (strlen($name) > 100) {
            throw new Exception("The name is too long.");
        } else {            
            $this->name = $name;
        }
    }

    // Getter
    public function getName() {
        return $this->name;
    }

}

// Create a new User object 
$elonMusk = new User("Elon Musk");

// Print user's name
echo $elonMusk->getName();

// Print the string representation of the user's object
echo "\n" . $elonMusk;
?>