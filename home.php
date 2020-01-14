<?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>GATE FORUM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-image: url(image/30-300619_kimi-no-nawa-wallpaper-iphone-source-your-name.png); background-repeat: no-repeat;background-size:cover;">
	<?php include 'nav.php'; ?>
     <br><br><br><br><br><br>
        <div class="container">
            <h1  style="text-align: center; color: white;font-size: 50px;"> <b><u>GATE  QUESTION  FORUM</u></b></h1>
            <div style="margin-bottom: 70px;"> 
                <h3 style="text-align: center; color: #000000;font-size: 30px;"><b><i><u>Questions & Answers</u></i></b></h3>
                <?php
include 'database.php';
$sql = "SELECT id, que, name, email FROM questionaddition";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?>
                <br><br>
        <div style="border: 5px solid blue; padding: 10px;background-image: 
        url(image/D03417A1-E4E5-4865-AD842BD5795A4BD6_blog-header-image.jpeg); background-repeat: no-repeat; background-size:100% 100%;opacity: 0.7;">
            <form method="post" action="answer.php" style="opacity: 2;color: #000000;">
                <br><b> Question id:</b> <?php echo $row["id"]; ?> 
                <br><b> Question:</b> <?php echo $row["que"]; ?> 
                <br><b> Asked by:</b> <?php echo $row["name"]; ?> 
                <br><b> Email:</b> <?php echo $row["email"]; ?>   <br>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/><br>
                <button type="submit" class="btn btn-small" style="background-color: red;" >ANSWER</button><br><br>
            </form>
        </div>
        <?php
        $queid = $row["id"];
        $ql = "SELECT * FROM answers WHERE qid = '$queid'";
$resul = $conn->query($ql);

if ($resul->num_rows > 0) {
    // output data of each row
    while($ro = $resul->fetch_assoc()) {
        echo "<div class=\"bg-danger tabcontent\" style=\"border: 5px solid red; padding: 10px; margin-left: 15px; background-image: 
        url(image/14058632-light-bulb-in-hand-and-word-solution-on-gray-background.jpg); background-repeat: no-repeat; background-size:100% 100%;opacity: 0.8;\">";
        echo "<form style=\"opacity: 2;color: #000000;\">";
        echo "<br><b> Answer id:</b> ". $ro["id"] . "<br><b> Answer:</b> ". $ro["answer"] . "<br><b> Time required(mins):</b> " . $ro ["timerq"] . "<br><b> Difficlty Level:</b> ". $ro["diff"] ."<br><b> Answered by:</b> " . $ro["name"] . "<br><b> Email:</b> " . $ro["email"] ."<br>" ;
        echo "<br></form></div>";
    }
} else {
    echo "<div class=\"bg-danger tabcontent\" style=\"border: 5px solid red; padding: 10px; margin-left: 15px;\"><i>yet no answer</i></div>";
}
     
endwhile;
     ?><br><br>
                
        <div class="container-fluid">
            <ul class="nav navbar-nav " style="float:right; background: #30db33; border: solid; border-width: 5px; border-color: red; padding: 5px;">
                <li style="margin-top: 15px;">USER: <?php echo $_SESSION['username']; ?></li>
                <li><a href="logout.php"><b>LOGOUT</b></a></li>
            </ul>
        </div>
        </div>
    </div>
</body>
</html>
