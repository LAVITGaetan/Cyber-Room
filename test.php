<?php
include("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=1");
while($res = mysqli_fetch_array($result)) { 
$date = $res['date'];
$h = $res['h'];
$m = $res['m'];
$s = $res['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date" value="<?php echo $date;?>">
     H* <input type="number" name="h" value="<?php echo $h;?>">
     M* <input type="number" name="m" value="<?php echo $m;?>">
     S*<input type="number" name="s" value="<?php echo $s;?>">
     <button type="submit" name="update">Update</button>
 </form>
 <h1 id="demo"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update']))
{	
$date=$_POST['date'];
$h= $_POST['h'];
$m= $_POST['m'];
$s= $_POST['s'];
		//updating the table
$result = mysqli_query($mysqli, "UPDATE timer SET date='$date' WHERE id=1");
$result = mysqli_query($mysqli, "UPDATE timer SET h='$h' WHERE id=1");
$result = mysqli_query($mysqli, "UPDATE timer SET m='$m' WHERE id=1");
$result = mysqli_query($mysqli, "UPDATE timer SET s='$s' WHERE id=1");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate = <?php 
echo strtotime("$date $h:$m:$s" ) ?> * 1000;
var now = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x = setInterval(function() {
    now = now + 1000;
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";
    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>














<h2>TEST POSTE 2</h2>
<?php
$result_2 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=2");
while($res_2 = mysqli_fetch_array($result_2)) { 
$date_2 = $res_2['date'];
$h_2 = $res_2['h'];
$m_2 = $res_2['m'];
$s_2 = $res_2['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date_2" value="<?php echo $date_2;?>">
     H* <input type="number" name="h_2" value="<?php echo $h_2;?>">
     M* <input type="number" name="m_2" value="<?php echo $m_2;?>">
     S*<input type="number" name="s_2" value="<?php echo $s_2;?>">
     <button type="submit" name="update_2">Update</button>
 </form>
 <h1 id="demo_2"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update_2']))
{	
$date_2=$_POST['date_2'];
$h_2= $_POST['h_2'];
$m_2= $_POST['m_2'];
$s_2= $_POST['s_2'];
		//updating the table
$result_2 = mysqli_query($mysqli, "UPDATE timer SET date='$date_2' WHERE id=2");
$result_2 = mysqli_query($mysqli, "UPDATE timer SET h='$h_2' WHERE id=2");
$result_2 = mysqli_query($mysqli, "UPDATE timer SET m='$m_2' WHERE id=2");
$result_2 = mysqli_query($mysqli, "UPDATE timer SET s='$s_2' WHERE id=2");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate_2 = <?php 
echo strtotime("$date_2 $h_2:$m_2:$s_2" ) ?> * 1000;
var now_2 = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x_2 = setInterval(function() {
    now_2 = now_2 + 1000;
    // Find the distance between now an the count down date
    var distance_2 = countDownDate_2 - now_2;
    // Time calculations for days, hours, minutes and seconds
    var days_2 = Math.floor(distance_2 / (1000 * 60 * 60 * 24));
    var hours_2 = Math.floor((distance_2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes_2 = Math.floor((distance_2 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_2 = Math.floor((distance_2 % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo_2").innerHTML = days_2 + "d " + hours_2 + "h " +
        minutes_2 + "m " + seconds_2 + "s ";
    // If the count down is over, write some text
    if (distance_2 < 0) {
        clearInterval(x_2);
        document.getElementById("demo_2").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>

<h2>TEST POSTE 3</h2>
<?php
$result_3 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=3");
while($res_3 = mysqli_fetch_array($result_3)) { 
$date_3 = $res_3['date'];
$h_3 = $res_3['h'];
$m_3 = $res_3['m'];
$s_3 = $res_3['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date_3" value="<?php echo $date_3;?>">
     H* <input type="number" name="h_3" value="<?php echo $h_3;?>">
     M* <input type="number" name="m_3" value="<?php echo $m_3;?>">
     S*<input type="number" name="s_3" value="<?php echo $s_3;?>">
     <button type="submit" name="update_3">Update</button>
 </form>
 <h1 id="demo_3"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update_3']))
{	
$date_3=$_POST['date_3'];
$h_3= $_POST['h_3'];
$m_3= $_POST['m_3'];
$s_3= $_POST['s_3'];
		//updating the table
$result_3 = mysqli_query($mysqli, "UPDATE timer SET date='$date_3' WHERE id=3");
$result_3 = mysqli_query($mysqli, "UPDATE timer SET h='$h_3' WHERE id=3");
$result_3 = mysqli_query($mysqli, "UPDATE timer SET m='$m_3' WHERE id=3");
$result_3 = mysqli_query($mysqli, "UPDATE timer SET s='$s_3' WHERE id=3");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate_3 = <?php 
echo strtotime("$date_3 $h_3:$m_3:$s_3" ) ?> * 1000;
var now_3 = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x_3 = setInterval(function() {
    now_3 = now_3 + 1000;
    // Find the distance between now an the count down date
    var distance_3 = countDownDate_3 - now_3;
    // Time calculations for days, hours, minutes and seconds
    var days_3 = Math.floor(distance_3 / (1000 * 60 * 60 * 24));
    var hours_3 = Math.floor((distance_3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes_3 = Math.floor((distance_3 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_3 = Math.floor((distance_3 % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo_3").innerHTML = days_3 + "d " + hours_3 + "h " +
        minutes_3 + "m " + seconds_3 + "s ";
    // If the count down is over, write some text
    if (distance_3 < 0) {
        clearInterval(x_3);
        document.getElementById("demo_3").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>
 <h2>TEST POSTE 4</h2>
<?php
$result_4 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=4");
while($res_4 = mysqli_fetch_array($result_4)) { 
$date_4 = $res_4['date'];
$h_4 = $res_4['h'];
$m_4 = $res_4['m'];
$s_4 = $res_4['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date_4" value="<?php echo $date_4;?>">
     H* <input type="number" name="h_4" value="<?php echo $h_4;?>">
     M* <input type="number" name="m_4" value="<?php echo $m_4;?>">
     S*<input type="number" name="s_4" value="<?php echo $s_4;?>">
     <button type="submit" name="update_4">Update</button>
 </form>
 <h1 id="demo_4"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update_4']))
{	
$date_4=$_POST['date_4'];
$h_4= $_POST['h_4'];
$m_4= $_POST['m_4'];
$s_4= $_POST['s_4'];
		//updating the table
$result_4 = mysqli_query($mysqli, "UPDATE timer SET date='$date_4' WHERE id=4");
$result_4 = mysqli_query($mysqli, "UPDATE timer SET h='$h_4' WHERE id=4");
$result_4 = mysqli_query($mysqli, "UPDATE timer SET m='$m_4' WHERE id=4");
$result_4 = mysqli_query($mysqli, "UPDATE timer SET s='$s_4' WHERE id=4");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate_4 = <?php 
echo strtotime("$date_4 $h_4:$m_4:$s_4" ) ?> * 1000;
var now_4 = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x_4 = setInterval(function() {
    now_4 = now_4 + 1000;
    // Find the distance between now an the count down date
    var distance_4 = countDownDate_4 - now_4;
    // Time calculations for days, hours, minutes and seconds
    var days_4 = Math.floor(distance_4 / (1000 * 60 * 60 * 24));
    var hours_4 = Math.floor((distance_4 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes_4 = Math.floor((distance_4 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_4 = Math.floor((distance_4 % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo_4").innerHTML = days_4 + "d " + hours_4 + "h " +
        minutes_4 + "m " + seconds_4 + "s ";
    // If the count down is over, write some text
    if (distance_4 < 0) {
        clearInterval(x_4);
        document.getElementById("demo_4").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>
 <h2>TEST POSTE 5</h2>
<?php
$result_5 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=5");
while($res_5 = mysqli_fetch_array($result_5)) { 
$date_5 = $res_5['date'];
$h_5 = $res_5['h'];
$m_5 = $res_5['m'];
$s_5 = $res_5['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date_5" value="<?php echo $date_5;?>">
     H* <input type="number" name="h_5" value="<?php echo $h_5;?>">
     M* <input type="number" name="m_5" value="<?php echo $m_5;?>">
     S*<input type="number" name="s_5" value="<?php echo $s_5;?>">
     <button type="submit" name="update_5">Update</button>
 </form>
 <h1 id="demo_5"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update_5']))
{	
$date_5=$_POST['date_5'];
$h_5= $_POST['h_5'];
$m_5= $_POST['m_5'];
$s_5= $_POST['s_5'];
		//updating the table
$result_5 = mysqli_query($mysqli, "UPDATE timer SET date='$date_5' WHERE id=5");
$result_5 = mysqli_query($mysqli, "UPDATE timer SET h='$h_5' WHERE id=5");
$result_5 = mysqli_query($mysqli, "UPDATE timer SET m='$m_5' WHERE id=5");
$result_5 = mysqli_query($mysqli, "UPDATE timer SET s='$s_5' WHERE id=5");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate_5 = <?php 
echo strtotime("$date_5 $h_5:$m_5:$s_5" ) ?> * 1000;
var now_5 = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x_5 = setInterval(function() {
    now_5 = now_5 + 1000;
    // Find the distance between now an the count down date
    var distance_5 = countDownDate_5 - now_5;
    // Time calculations for days, hours, minutes and seconds
    var days_5 = Math.floor(distance_5 / (1000 * 60 * 60 * 24));
    var hours_5 = Math.floor((distance_5 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes_5 = Math.floor((distance_5 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_5 = Math.floor((distance_5 % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo_5").innerHTML = days_5 + "d " + hours_5 + "h " +
        minutes_5 + "m " + seconds_5 + "s ";
    // If the count down is over, write some text
    if (distance_5 < 0) {
        clearInterval(x_5);
        document.getElementById("demo_5").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>
 <h2>TEST POSTE 2</h2>
<?php
$result_6 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=6");
while($res_6 = mysqli_fetch_array($result_6)) { 
$date_6 = $res_6['date'];
$h_6 = $res_6['h'];
$m_6 = $res_6['m'];
$s_6 = $res_6['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date_6" value="<?php echo $date_6;?>">
     H* <input type="number" name="h_6" value="<?php echo $h_6;?>">
     M* <input type="number" name="m_6" value="<?php echo $m_6;?>">
     S*<input type="number" name="s_6" value="<?php echo $s_6;?>">
     <button type="submit" name="update_6">Update</button>
 </form>
 <h1 id="demo_6"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update_6']))
{	
$date_6=$_POST['date_6'];
$h_6= $_POST['h_6'];
$m_6= $_POST['m_6'];
$s_6= $_POST['s_6'];
		//updating the table
$result_6 = mysqli_query($mysqli, "UPDATE timer SET date='$date_6' WHERE id=6");
$result_6 = mysqli_query($mysqli, "UPDATE timer SET h='$h_6' WHERE id=6");
$result_6 = mysqli_query($mysqli, "UPDATE timer SET m='$m_6' WHERE id=6");
$result_6 = mysqli_query($mysqli, "UPDATE timer SET s='$s_6' WHERE id=6");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate_6 = <?php 
echo strtotime("$date_6 $h_6:$m_6:$s_6" ) ?> * 1000;
var now_6 = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x_6 = setInterval(function() {
    now_6 = now_6 + 1000;
    // Find the distance between now an the count down date
    var distance_6 = countDownDate_6 - now_6;
    // Time calculations for days, hours, minutes and seconds
    var days_6 = Math.floor(distance_6 / (1000 * 60 * 60 * 24));
    var hours_6 = Math.floor((distance_6 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes_6 = Math.floor((distance_6 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_6 = Math.floor((distance_6 % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo_6").innerHTML = days_6 + "d " + hours_6 + "h " +
        minutes_6+ "m " + seconds_6 + "s ";
    // If the count down is over, write some text
    if (distance_6 < 0) {
        clearInterval(x_6);
        document.getElementById("demo_6").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>
 <h2>TEST POSTE 7</h2>
<?php
$result_7 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=7");
while($res_7 = mysqli_fetch_array($result_7)) { 
$date_7 = $res_7['date'];
$h_7 = $res_7['h'];
$m_7 = $res_7['m'];
$s_7 = $res_7['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date_7" value="<?php echo $date_7;?>">
     H* <input type="number" name="h_7" value="<?php echo $h_7;?>">
     M* <input type="number" name="m_7" value="<?php echo $m_7;?>">
     S*<input type="number" name="s_7" value="<?php echo $s_7;?>">
     <button type="submit" name="update_7">Update</button>
 </form>
 <h1 id="demo_7"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update_7']))
{	
$date_7=$_POST['date_7'];
$h_7= $_POST['h_7'];
$m_7= $_POST['m_7'];
$s_7= $_POST['s_7'];
		//updating the table
$result_7 = mysqli_query($mysqli, "UPDATE timer SET date='$date_7' WHERE id=7");
$result_7 = mysqli_query($mysqli, "UPDATE timer SET h='$h_7' WHERE id=7");
$result_7 = mysqli_query($mysqli, "UPDATE timer SET m='$m_7' WHERE id=7");
$result_7 = mysqli_query($mysqli, "UPDATE timer SET s='$s_7' WHERE id=7");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate_7 = <?php 
echo strtotime("$date_7 $h_7:$m_7:$s_7" ) ?> * 1000;
var now_7 = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x_7 = setInterval(function() {
    now_7 = now_7 + 1000;
    // Find the distance between now an the count down date
    var distance_7 = countDownDate_7 - now_7;
    // Time calculations for days, hours, minutes and seconds
    var days_7 = Math.floor(distance_7 / (1000 * 60 * 60 * 24));
    var hours_7 = Math.floor((distance_7 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes_7 = Math.floor((distance_7 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_7 = Math.floor((distance_7 % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo_7").innerHTML = days_7 + "d " + hours_7 + "h " +
        minutes_7 + "m " + seconds_7 + "s ";
    // If the count down is over, write some text
    if (distance_7 < 0) {
        clearInterval(x_7);
        document.getElementById("demo_7").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>
 <h2>TEST POSTE 8</h2>
<?php
$result_8 = mysqli_query($mysqli, "SELECT * FROM timer WHERE id=8");
while($res_8 = mysqli_fetch_array($result_8)) { 
$date_8 = $res_8['date'];
$h_8 = $res_8['h'];
$m_8 = $res_8['m'];
$s_8 = $res_8['s'];
}
?>

 <form method="POST" action="#">
     Date*<input type="date" name="date_8" value="<?php echo $date_8;?>">
     H* <input type="number" name="h_8" value="<?php echo $h_8;?>">
     M* <input type="number" name="m_8" value="<?php echo $m_8;?>">
     S*<input type="number" name="s_8" value="<?php echo $s_8;?>">
     <button type="submit" name="update_8">Update</button>
 </form>
 <h1 id="demo_8"></h1>
 <?php
 include_once("config.php");

if(isset($_POST['update_8']))
{	
$date_8=$_POST['date_8'];
$h_8= $_POST['h_8'];
$m_8= $_POST['m_8'];
$s_8= $_POST['s_8'];
		//updating the table
$result_8 = mysqli_query($mysqli, "UPDATE timer SET date='$date_8' WHERE id=8");
$result_8 = mysqli_query($mysqli, "UPDATE timer SET h='$h_8' WHERE id=8");
$result_8 = mysqli_query($mysqli, "UPDATE timer SET m='$m_8' WHERE id=8");
$result_8 = mysqli_query($mysqli, "UPDATE timer SET s='$s_8' WHERE id=8");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>
 <script>
var countDownDate_8 = <?php 
echo strtotime("$date_8 $h_8:$m_8:$s_8" ) ?> * 1000;
var now_8 = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x_8 = setInterval(function() {
    now_8 = now_8 + 1000;
    // Find the distance between now an the count down date
    var distance_8 = countDownDate_8 - now_8;
    // Time calculations for days, hours, minutes and seconds
    var days_8 = Math.floor(distance_8 / (1000 * 60 * 60 * 24));
    var hours_8 = Math.floor((distance_8 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes_8 = Math.floor((distance_8 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_8 = Math.floor((distance_8 % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo_8").innerHTML = days_8 + "d " + hours_8 + "h " +
        minutes_8 + "m " + seconds_8 + "s ";
    // If the count down is over, write some text
    if (distance_8 < 0) {
        clearInterval(x_8);
        document.getElementById("demo_8").innerHTML = "EXPIRED";
        <?php
        
        ?>
       
    }
}, 1000);
 </script>