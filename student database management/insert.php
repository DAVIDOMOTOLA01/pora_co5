<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'dbm.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>POST data:\n";
    print_r($_POST);
    echo "</pre>";
    $surname = $_POST['surname'] ?? '';
    $other_names = $_POST['other_names'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $age = $_POST['age'] ?? 0;
    $parent_guardian_name = $_POST['parent_guardian_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $nationality = $_POST['nationality'] ?? '';
    $state = $_POST['state'] ?? null;
    $lga = $_POST['lga'] ?? null;
    $hometown = $_POST['hometown'] ?? null;
    $country = $_POST['country'] ?? null;
    $non_nigerian_state = $_POST['non_nigerian_state'] ?? null;
    $city = $_POST['city'] ?? null;
    $province = $_POST['province'] ?? null;
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $blood_group = $_POST['blood_group'];
    $genotype = $_POST['genotype'];
    $previous_school = $_POST['previous_school'];
    $previous_class = $_POST['previous_class'];
    $proposed_course = $_POST['proposed_course'];
    $department = $_POST['department'] ?? '';
    $health_status = $_POST['health_status'];
    $disability_status = $_POST['disability_status'];
  
    

// Prepare and bind
    $sql = "INSERT INTO students (
        surname, other_names, gender, email, phone_number, dob, age, parent_guardian_name,
        address, nationality, state_of_origin, local_government,
        height, weight, blood_group, genotype,
        prev_school, prev_class, proposed_course, department,
        health_status, disability_status
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
      
    $stmt = $conn->prepare($sql);
   
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssssssssiissddssssssss",
        $surname, $other_names, $gender, $email, $phone_number, $parent_guardian_name,
        $address, $dob, $age, $nationality, $state_of_origin, $local_government,
        $height, $weight, $blood_group, $genotype,
        $prev_school, $prev_class, $proposed_course, $department,
        $health_status, $disability_status
    );
        
   if ($stmt->execute()) {
        echo "Student registered successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
