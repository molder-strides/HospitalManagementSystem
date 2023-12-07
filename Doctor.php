<!-- Doctor.php -->
<?php

class Doctor {
    private $name;
    private $specialization;
    private $assignedPatients = [];

    public function __construct($name, $specialization) {
        $this->name = $name;
        $this->specialization = $specialization;
    }

    // Implement getters and setters here (not shown for brevity)

    public function assignPatient($patient) {
        $this->assignedPatients[] = $patient;
    }

    public function displayInfo() {
        echo "Doctor Information:\n";
        echo "Name: {$this->name}\n";
        echo "Specialization: {$this->specialization}\n";
    }

    public function displayAssignedPatients() {
        echo "Assigned Patients:\n";
        foreach ($this->assignedPatients as $patient) {
            echo "- {$patient->getName()}\n";
        }
    }
}
?>
