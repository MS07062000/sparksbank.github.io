<?php
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:customer.php');
	}
 ?>
<!DOCTYPE html>
<html lang ="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .bckimg{
                position: fixed;
                margin:0;
                padding:0px;
                left:0px;
                top:75px;
                width:100%;
                height:100%;
                background-image: linear-gradient(to bottom , #23074d, #cc5333);
            }
            .button {
                background:  #41295a;
                Width: auto;
                border: none;
                left: 50%;
                border-radius: 12px;
                color: yellow;
                font-weight:bold;
                padding: 15px 32px;
                text-align: center;
                display: flex;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                margin: 0;
                position: absolute;
                left: 50%;
                -ms-transform: translateX(-50%);
                transform: translateX(-50%);
                }
            .column {
                position: fixed;
                top:95px;
                width: 33.33%;
                padding: 10px;  
                text-align: center;  
                height: 300px; 
                }
            .row:after {
                content: "";
                display: table;
                clear: both;
                }
        </style>
    </head>
    <body>
    <?php include "header.html"; ?>
    <div class="bckimg"></div>
    <div class="row">
    <div class="column">
        <img src="https://blog-assets.freshworks.com/live-chat-software/wp-content/uploads/2019/01/28182216/Screen-Shot-2019-01-28-at-5.29.18-PM.png" alt="customericon" height="100%" width="100%" >
        <button class="button" onclick="window.location.href='customer.php'">Customers</button>
    </div>
    <div class="column" style="left: 33.33%;">
    <img src="60026.jpg" alt="customericon" height="100%" width="80%" >
    <a href="transact.php"><button class="button" >Transfer Money</button></a>
    </div>
    <div class="column" style="left: 66.66%;">
    <img src="transacthistory.PNG" alt="customericon"  height="100%" width="70%" >
    <a href="history.php"><button class="button">Transaction History</button></a>
    </div>
    </div>
    <?php include "footer.html"; ?>   
    </body>
</html>