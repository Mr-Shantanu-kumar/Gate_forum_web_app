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
        <link rel="stylesheet" type="text/css" href="setstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body style="background-image: url(image/30-300619_kimi-no-nawa-wallpaper-iphone-source-your-name.png); background-repeat: no-repeat;background-size:cover;">
       <?php include 'nav.php'; ?>
    <div class="main">
        <div id="namechange" class="modal"> 
            <div class="modal-content" style="background-color: black;">
                <div>
                    <span class="closea" style="background-color: white;">&times;</span>
                    <h1 style="text-align: center; color: red;">CHANGE MY NAME</h1>
                </div>
                   <form method="post" action="namechange.php">
                        <input type="text" name="nm" placeholder="Enter your new name" required>
                        <input type="submit" name="" value="Change">
                    </form>                               
            </div>
        </div>
        <div id="mailchange" class="modal"> 
            <div class="modal-content" style="background-color: black;">
                <div>
                    <span class="closeb" style="background-color: white;">&times;</span>
                    <h1 style="text-align: center; color: red;">CHANGE MY EMAIL</h1>
                </div>
                   <form method="post" action="mailchange.php">
                        <input type="email" name="mail" placeholder="Enter your new email" required>
                        <input type="submit" name="" value="Change">
                    </form>                               
            </div>
        </div>
        <div id="contactchange" class="modal"> 
            <div class="modal-content" style="background-color: black;">
                <div>
                    <span class="closec" style="background-color: white;">&times;</span>
                    <h1 style="text-align: center; color: red;">CHANGE MY CONTACT</h1>
                </div>
                   <form method="post" action="contactchange.php">
                        <input type="tel" name="cont" placeholder="Enter your new contact" required>
                        <input type="submit" name="" value="Change">
                    </form>                               
            </div>
        </div>
        <div id="passwordchange" class="modal"> 
            <div class="modal-content" style="background-color: black;">
                <div>
                    <span class="closed" style="background-color: white;">&times;</span>
                    <h1 style="text-align: center; color: red;">CHANGE MY PASSWORD</h1>
                </div>
                   <form method="post" action="passwordchange.php" onSubmit="return check();" name="passform">
                    <input type="password" name="npass" placeholder="Enter New Password" required>
                    <br>
                    <input type="password" name="cpass" placeholder="Confirm Password " required>
                    <br>
                    <input type="submit" name="submit" value="Change Password">
                   </form>                               
            </div>
        </div>
        <div id="securityview" class="modal"> 
            <div class="modal-content" style="background-color: black;">
                <div>
                    <span class="closee" style="background-color: white;">&times;</span>
                    <h1 style="text-align: center; color: red;">SHOW SECURITY QUESTION</h1>
                </div>
                   <form method="post" action="securityview.php">
                        <input type="password" name="pass" placeholder="Enter your password" required>
                        <input type="submit" name="" value="Change">
                    </form>                               
            </div>
        </div>

        <div class="loginbox" style="background-image: url(image/HD-2560x1600-Wallpapers-Backgrounds-Download.jpg); opacity: 0.9; background-repeat: no-repeat;background-size:cover;">
            <div class="che" style="padding: 50px 15px;">
                <h3><span style="color: red;">Username: </span><?php echo $_SESSION['username'] ?></h3><br>
                <button class="btn btn-Large btn-primary btn-block" style="color: black;position:absolute; width: 420px;" id="namebtn" onclick="chgname()"><b>CHANGE NAME</b></button><br><br><br>
                
                <button class="btn btn-Large btn-primary btn-block" style="color: black;position:absolute;width: 420px;" id="mailbtn" onclick="chgmail()"><b>CHANGE EMAIL</b></button><br><br><br>

                <button class="btn btn-Large btn-primary btn-block" style="color: black;position:absolute;width: 420px;" id="contactbtn" onclick="chgcontact()"><b>CHANGE CONTACT</b></button><br><br><br>

                <button class="btn btn-Large btn-primary btn-block" style="color: black;position:absolute; width: 420px;" id="passwordbtn" onclick="chgpassword()"><b>CHANGE PASSWORD</b></button><br><br><br>

                <button class="btn btn-Large btn-primary btn-block" style="color: black;position:absolute; width: 420px;" id="securitybtn" onclick="viewsecurity()"><b>VIEW SECURITY QUESTION</b></button><br><br><br>
            </div>

        </div>
    </div>
 </body>
<script>

function chgname() {
var modal = document.getElementById("namechange");
var btn = document.getElementById("namebtn");
var span = document.getElementsByClassName("closea")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function chgmail() {
var modal = document.getElementById("mailchange");
var btn = document.getElementById("mailbtn");
var span = document.getElementsByClassName("closeb")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function chgcontact() {
var modal = document.getElementById("contactchange");
var btn = document.getElementById("contactbtn");
var span = document.getElementsByClassName("closec")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function chgpassword() {
var modal = document.getElementById("passwordchange");
var btn = document.getElementById("passwordbtn");
var span = document.getElementsByClassName("closed")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function check()
{
if(document.passform.cpass.value!=document.passform.npass.value)
  {
    alert("Confirm Password does not matched");
    document.passform.cpass.focus();
    return false;
  } 
   return true;
}

function viewsecurity() {
var modal = document.getElementById("securityview");
var btn = document.getElementById("securitybtn");
var span = document.getElementsByClassName("closee")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}


    </script>
</html>
