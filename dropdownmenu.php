<?php
        include "dbconn.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT * FROM customer");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Name'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
        }	 
?>