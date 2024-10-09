<?php
$modules = array("WP","WD","ID","DV","HC","PR");
$students=[];
$grades=[];
for($i =1; $i <= 10; $i++) {
    $studentId = 'K00'. str_pad($i, 1, STR_PAD_LEFT);
    $grade = [];
    foreach ($modules as $module) {
        $grade[] = rand(0, 100);
    }
    $students[] = [$studentId, $grade];
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Student ID</th>"; // Start header row
foreach ($modules as $module) {
    echo "<th>$module</th>"; // Print each module as hea der
}
echo "</tr>"; // End header row

// Print student IDs and grades
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>{$student[0]}</td>"; // Print student ID
    foreach ($student[1] as $grade) {
        echo "<td>$grade</td>"; // Print each grade
    }
    echo "</tr>";
}

echo "</table>";