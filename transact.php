<?php include "header2.html";?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body{
        background: linear-gradient(to right, #000046, #1CB5E0); 
    }
   .title{
        position: fixed;
        padding:0px;
        width:100%;
        height: 75px;
        color: #fff95b;
        text-shadow: 1px 1px 2px black, 0 0 75px #FFBF00, 0 0 5px #FFAA33;
        font-family: monospace;
        font-size: 60px;
        text-align: center;
        animation: animate 2s linear infinite;
    }
    @keyframes animate{
    0%{
        opacity: 0;
    }
    50%{
        opacity: 0.7;
    }
    100%{
        opacity: 0;
    }
    }
    form { 
        position: fixed;
        width:50%;
        padding:0%;
        top: 50%;
        left: 50%;
        font-size: 20px;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        color:orange;
    }
    button{
        background:-webkit-linear-gradient(90deg, hsla(33, 100%, 53%, 1) 0%, hsla(58, 100%, 68%, 1) 100%);
        border: none;
        color: black;
        text-align: center;
        font-size: 20px; 
        padding: 10px 24px;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
    select{
        width:100%;
        font-size:20px;
    }
</style>
<body>
    <br>
    <div class="title">
    <h2>Transaction</h2>
    </div>
    <form action="insert.php" method="post">
    <label >Sender:</label><br>
    <select name="Sender" id="Sender" required><br>
    <option disabled selected>-- Select --</option>
    <?php include "dropdownmenu.php" ?>
    </select>
    <br>
    <label >Reciever:</label><br>
    <select name="Reciever" id="Reciever"  required >
    <option disabled selected>-- Select--</option>
    <?php include "dropdownmenu.php" ?>
    <br>
    </select><br>
    <label for="Amount" >Amount:</label><br>
    <input type="integer" id="Amount" name="Amount" required><br>
    <br>
    <button type="submit" name="submit" onclick="validate()">Send</button><br>
    </form>
    <script>
        function validate(){
            var field1=document.getElementById("Sender").value;
            var field2=document.getElementById("Reciever").value;
            if(field1==field2){
                alert("The sender cannot be the reciever");
            }

        }
    </script>
<?php include "footer.html"; ?>
</body>
</head>
</html>