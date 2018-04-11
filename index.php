<?php
function showDate(){
   $day = date('dS');
   $month = date('F');
   $year = date('Y');

   $res = $day. ", ". $month." ". $year;

   return $res;
}

function showTime(){
    $time = date('h:i A',strtotime("+1 hours"));
    return $time;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>HNG</title>
</head>

<body>
    <div class="rectangle">
        <h1 class="title">HNG INTERNSHIP 4.0</h1>
        <div class="date">
		  <p class="time"><?php echo showTime();?></p>
           <p class="date"><?php echo showDate(); ?></p>
    
        </div>
    </div>
</body>

</html>