<?php include "header2.html";?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        background-image: linear-gradient(to right, #00bf8f, #00906f, #06634e, #0a3a2f, #001510);
       
    }    
    table {
            width: 100%;
            color: black;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
            float: left;
            margin-top: 150px;
            position: fixed;
        }
    th {
        color:black;
        text-align: center;
    }
    tr:nth-child(even) {background-color: #f2f2f2; }
    tr:nth-child(odd) {
    background-color: #f83600;
    } 
    .container{
        color:	 #3b0066;
        position: fixed;
        width:100%;
        height: 70px;
        text-align: center;
        font-weight: 800;
        font-family:cursive;
        margin-top: 65px; 
        margin-left: 0;
        margin-right: 0;
        left:0;
    }
    button{
        background: linear-gradient(to right, #000428, #004e92);
        border: none;
        color: white;
        text-align: center;
        font-size: 16px; 
        padding: 10px 24px;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
</style>
</head>
<body>
<div class="container"><h1>CUSTOMERS</h1></div>
    <table>
        <tr>
            <th >Sr.No.</th>
            <th>Name</th>
            <th>Email-ID</th>
            <th>Amount</th>
        </tr>
<?php
include "dbconn.php";  // Using database connection file here
$sql = "SELECT * FROM `customer`;";
$result=$conn->query($sql);
$row_cnt = $result->num_rows;
if ($row_cnt > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $row_cnt=$row_cnt+1;
    echo "<tr><td>" . $row["Sr.No."]. "</td>
    <td>" . $row["Name"] . "</td>
    <td>". $row["Email-ID"]. "</td>
    <td>" . $row["Amount"] ."</td></tr>";
    
    
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
include "footer.html";
?>
</table>
</body>
</html>