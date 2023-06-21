<?php
session_start();
if(!$_SESSION['logged_in']){
    header("location: error.php");
    exit();
}

$username = $_SESSION['userData']['name'];
$avatar = $_SESSION['userData']['avatar'];


?>
<!doctype html>
<html>


<head>
  
<style type="text/css">
 .CSGOtakeDROP
 {
   float: right;
}

 </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./styles/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <img src="CSGOcaseDROP.png" alt="yessss"  width="320" height="90" class="style1"/> 
    <div class="flex items-center justify-center h-screen bg-steam-lightGray text-white flex-col">
        <div class="text-2xl">Welcome to the dashboard,</div>
        <div class="text-4xl mt-3 flex items-center font-medium">
            <img src='<?php echo $avatar;?>' class="rounded-full w-12 h-12 mr-3"/>
            <?php echo $username;?></div>
        <a href="logout.php" class="text-sm mt-5">Logout</a>
    </div>
    <form id="myForm" method="GET" target="_blank" action="/action_page.php">
    PROMO CODE :

    <br>
    <input style="color:red"type="text" name="promocode" placeholder="type here your promo code">
    <br>
    
    <br>
</form>
<button style="color:red" onclick="myGeeks()">
    Apply
</button>
<p id="Balance" style="color:yellow;
            font-size:50px;">
            
</p>
  
<script>
    function myGeeks() {
      
      var txt = 130
      
        document.getElementById(
        "Balance").innerHTML = txt;
    
    }
</script>


<div id="image-container">
  <img src="case.png" alt="" class="style1">
</div>
</body>
</html>