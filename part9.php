<?php
    ini_set('display_errors', 1);
    
    $firstName = "Jane";   // String type variable
    $lastName = "Doe"; // String type variable
    $age = 20; // Integer type variable
    $married = true; // Boolean type variable
    $childrenNames = array("Alice", "Bob"); // Array type variable

    $fullName = $firstName . " " . $lastName; // Concatenation operator
    $dogYears = $age/7; // Arithmetic operator
    $isAdult = $dogYears > 4; // Comparison operator
    $isSettled = $isAdult and $married; // Logic operator

    function getFullName($firstName, $lastName) { // Function name
        return $firstName . " " . $lastName; // Returned value
    }

    $fullName = getFullName($firstName, $lastName); // Using variables
    $fullName = getFullName("Alice", "Doe");

    function getIsSettled($age, $married) { // Function name
        $dogYears = $age/7;
        $isAdult = $dogYears > 4;
        $isSettled = $isAdult and $married;
        return $isSettled; // Returned value
    }

    $isSettled = getIsSettled($age, $married); // Using variables
    $isSettled = getIsSettled(5, false); // Using values

    echo $fullName;

    if ($isSettled) { // Print sentence based on isSettled value
        echo $fullName . " is settled.";
    } else {
        echo $fullName . " is not settled.";
    }

    foreach($childrenNames as $childName) { // Print list of children's names
        echo "<li>" . $childName . "</li>";
    }

?>