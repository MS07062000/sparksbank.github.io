<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "","spark bank");

if(isset($_POST['submit'])){
    if(!empty($_POST['Sender']) && !empty($_POST['Reciever']) && !empty($_POST['Amount']))
    {
        $Sender=$_POST['Sender'];
        $Reciever=$_POST['Reciever'];
        $Amount=$_POST['Amount'];
        
        $sql = "SELECT * from customer where Name='$Sender'";
        $query = mysqli_query($conn,$sql);
        $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

        $sql = "SELECT * from customer where Name='$Reciever'";
        $query = mysqli_query($conn,$sql);
        $sql2 = mysqli_fetch_array($query);
      

        // constraint to check input of negative value by user
        if (($Amount)<0)
        {
            echo '<script type="text/javascript">';
            echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
            echo '</script>';
        }

    
        // constraint to check insufficient balance.
        else if($Amount > $sql1['Amount']) 
        {
            
            echo '<script type="text/javascript">';
            echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
            echo '</script>';
        }
        

        // constraint to check zero values
        else if($Amount == 0){

            echo "<script type='text/javascript'>";
            echo "alert('Oops! Zero value cannot be transferred')";
            echo "</script>";
        }


        else {
            
            // deducting amount from sender's account
            $newbalance =$sql1['Amount'] - $Amount;
            $sql = "UPDATE customer set Amount=$newbalance where Name='$Sender'";
            mysqli_query($conn,$sql);
        

            // adding amount to reciever's account
            $newbalance = $sql2['Amount'] + $Amount;
            $sql = "UPDATE customer set Amount=$newbalance where Name='$Reciever'";
            mysqli_query($conn,$sql);
            
            
            $query="INSERT INTO `history`(`SENDER`, `RECIEVER`, `AMOUNT`) VALUES ('$Sender','$Reciever','$Amount')";
            $query = mysqli_query($conn, $query);

            if($query){
                echo "<script> alert('Transaction Successful');
                                window.location='history.php';
                    </script>";
                
            }
            $newbalance= 0;
            $Amount =0;
            }
        
    }

    else{
        echo "All fields required";
    }    
}
?>