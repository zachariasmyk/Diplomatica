<?php
// Ξεκινάει το session (αν δεν έχει ξεκινήσει ήδη)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Στοιχεία σύνδεσης
$host = "localhost";        // ή 127.0.0.1
$db_user = "root";          // Χρήστης MySQL
$db_pass = "";              // Συνήθως κενός στο XAMPP
$db_name = "diplomatica";   // Όνομα της βάσης

// Δημιουργία σύνδεσης
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
    die("❌ Σφάλμα σύνδεσης: " . $conn->connect_error);
}

// Ορισμός χαρακτήρων UTF-8
$conn->set_charset("utf8mb4");

// ✅ Αν όλα πήγαν καλά
// echo "✅ Συνδέθηκε επιτυχώς στη βάση.";
?>
