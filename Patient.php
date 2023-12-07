<!-- Patient.php -->
<?php

class Patient {
    private $name;
    private $age;
    private $healthCondition;

    public function __construct($name, $age, $healthCondition) {
        $this->name = $name;
        $this->age = $age;
        $this->healthCondition = $healthCondition;
    }

    // Implement getters and setters here (not shown for brevity)

    public function displayInfo() {
        echo "Patient Information:\n";
        echo "Name: {$this->name}\n";
        echo "Age: {$this->age}\n";
        echo "Health Condition: {$this->healthCondition}\n";
    }
}
?>
