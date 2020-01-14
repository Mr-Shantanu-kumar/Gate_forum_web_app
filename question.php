<?php session_start(); ?>
<?php if (!isset($_SESSION['username'])) {

    header('location:index.html');
}?>
<!DOCTYPE html>
<html>
    <head>
    
        <mata charset= "utf-8"></mata>
        <title> GATE FORUM </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body style="background-image: url(image/30-300619_kimi-no-nawa-wallpaper-iphone-source-your-name.png); background-repeat: no-repeat;background-size:cover;">
            <?php include 'navb.php'; ?>
          <br><br><br><br><br><br><br>
        <div class="container text-center">
            <h1 style="text-align: center; color: white;font-size: 50px;"><u><b> GATE QUESTIONS</b></u></h1><br><br>
            <div class="jumbotron" style="background-color: black; opacity: 0.9;">
                <div style="opacity: 1;">
                <h2 style="color: red;">Add New Question </h2>
                <form method="post" action="addquestion.php">
                    <div class ="form-group">
                       <h3 style="color: green;">Question</h3><br>
                        <input type="text" name="ques" class="form-control" placeholder="Enter your question here" required><br>
                    </div>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
            </div>
          </div>
        </div>
    </body>
</html>
