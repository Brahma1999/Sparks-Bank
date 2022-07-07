<?php
//CONNECTING TO THE DATABASE
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "spark bank"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname); 
    //IF CONNECTION IS NOT SUCCESSSFUL
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        }
    </script>




</head>
<body class="dark_body">

    <?php include('navbar.php'); ?>

    
    <div class="box">
        <div class="box-in">
        
         <div id="trans_money"><p>Transfer Money</p></div> 

        <div class="transferMoney">
           <form name="myForm" action="ResultPage.php" onsubmit="return validateForm()" method="post">
            <table id="table1" style="border:none;">

                <tbody><tr class="tb">
                 <td class="tb">Sender's Account No.</td>
                 <td class="tb">
                    <input type="number" name="payerID" min="100" required="">
                </td></tr>
              
               <tr class="tb">
                 <td class="tb">Receiver's Account No.</td>
                 <td class="tb">
                    <input type="number" name="payeeID" min="100" required="">
                 </td></tr>

              <tr class="tb">
                 <td class="tb">Amount (Rs):</td>
                 <td class="tb">
                    <input type="number" name="amount" min="1" required="">
                </td></tr>

              <tr id="tb">
                 <td class="tb">
                    <input type="hidden" name="form_submitted" value="1">
                 </td>
                 <td class="tb">
                    <input type="submit" value="PROCEED" id="proceed">
                 </td></tr>

           </tbody></table>
          </form>
        </div>

        </div>
    </div>
    
    <footer>
        <p>&copy 2022 Made By <a href="www.linkedin.com/in/brahmanand-parida-437092224" target="_blank">Brahmanand Parida</a></p>
    </footer>

    <script>
        function validateForm() {
            var x = document.forms["myForm"]["payerID"].value;
            var y = document.forms["myForm"]["payeeID"].value;
            var z = document.forms["myForm"]["amount"].value;
            var regex=/^[0-9]+$/;

            
            if (x == "" || y=="" || z=="") {
                alert("Fill it!!");
                return false;
            }

            //var num = z>0?1:-1;
            if((Math.sign(z)==-1)||(Math.sign(z)==-0)||z==0){
                alert("Enter a valid amount to do transaction");
                return false;
            }
            if(isNaN(z)|| !x.match(regex)|| !y.match(regex) ||!z.match(regex)){
                alert("Enter correct input!");
                return false;
            }
        }
 </script>

    
</body>
</html>