<!-- HospitalManagementSystem.php -->
<?php

require_once 'Patient.php';
require_once 'Doctor.php';

// Create patients
$patient1 = new Patient("John Doe", 25, "Fever");
$patient2 = new Patient("Jane Smith", 30, "Broken Leg");

// Create doctors
$doctor1 = new Doctor("Dr. Smith", "Cardiologist");
$doctor2 = new Doctor("Dr. Johnson", "Orthopedic Surgeon");

// Assign patients to doctors
$doctor1->assignPatient($patient1);
$doctor2->assignPatient($patient2);

// Display information
$patient1->displayInfo();
$patient2->displayInfo();

$doctor1->displayInfo();
$doctor1->displayAssignedPatients();

$doctor2->displayInfo();
$doctor2->displayAssignedPatients();
?>
