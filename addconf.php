<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dbcrud");

    if(isset($_POST['submit'])) {
      $confid = $_POST['confid'];
      $confname = $_POST['confname'];
      $startdate = $_POST['startdate'];
      $enddate = $_POST['enddate'];
      $topic = $_POST['topic'];
      $regamount = $_POST['regamount'];
      $speaker = $_POST['speaker'];

      $sql = "insert into organizer(confid,confname,startdate,enddate,topic,regamount,speaker)values('$confid', '$confname', '$startdate', '$enddate', '$topic', '$regamount', '$speaker')";

      if(mysqli_query($connection, $sql)) {
          echo '<script>location.replace("organizer.php")</script>';  
      } else {
        echo "Some thing Error" . $connection->error;
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>body{
    background-color: #c9d6ff;
    background:linear-gradient(to right,#e2e2e2,#c9d6ff);
}
.container{
    background:#fff;
    width:100%;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
}</style>
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> New Conference </h1>
                    </div>
                    <div class="card-body">

                    <form action="addconf.php" method="post">
                        <div class="form-group">
                            <!--<label>Conference Id</label>-->
                            <input type="text" name="confid" class="form-control"  placeholder="Enter Conference Id"> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Conference Name</label>-->
                            <input type="text" name="confname" class="form-control"  placeholder="Enter Conference Name"> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Description</label>-->
                            <input type="text" name ="description" class="form-control"  placeholder="Enter Conference Description"> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Start Date</label>-->
                            <input type="date" name ="startdate" class="form-control"  placeholder=""> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>End Date</label>-->
                            <input type="date" name ="enddate" class="form-control"  placeholder=""> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Topic </label>-->
                            <input type="text" name ="topic" class="form-control"  placeholder="Enter Topic"> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Registration Amount </label>-->
                            <input type="text" name ="regamount" class="form-control"  placeholder="Enter amount"> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Speaker </label>-->
                            <input type="text" name ="speaker" class="form-control"  placeholder="Enter Speaker"> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>

