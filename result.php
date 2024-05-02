<?php
// Retrieve age and day from POST request
$age = isset($_POST['age']) ? intval($_POST['age']) : null;
$day = isset($_POST['days']) ? strtolower($_POST['days']) : null;

// Check if age and day are valid
if ($age === null || $day === null) {
    echo "Please provide both age and day.";
} elseif ($age < 0 || $age % 1 !== 0) {
    echo "Please enter a valid age.";
} else {
    // Determine admission status based on age and day
    if ($age < 5 || $age > 95) {
        echo "You get in for FREE!";
    } elseif (($age >= 12 && $age <= 21) || $day === "tuesday" || $day === "thursday") {
        echo "You get a DISCOUNT!";
    } else {
        echo "You have to pay REGULAR price.";
    }
}
?>
</body>
</html>
