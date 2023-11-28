<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('157.245.89.132', 'tranaaro_final-project-ec-user', 'z9ZA*CpO?SSb', 'tranaaro_Final-Project-EC');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
