<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dbcrud");

    if(isset($_POST['submit']))
        {
          $name = $_POST['name'];
          $address = $_POST['address'];
         $mobile = $_POST['mobile'];
         $email = $_POST['email'];
         $event = $_POST['event'];

           $sql = "insert into student(name,address,mobile,email,event)values(' $name',' $address',' $mobile','$email','$event')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
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
                        <h1> Event Registration </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                           <!-- <label>Name</label>-->
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name"> 
                        </div>
</br>
                        <div class="form-group">
                           <!-- <label>Address</label>-->
                            <input type="text" name="address" class="form-control"  placeholder="Enter Address"> 
                        </div>
</br>
                        <div class="form-group">
                          <!--  <label>Mobile</label>-->
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile"> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Email</label>-->
                            <input type="text" name ="email" class="form-control"  placeholder="Enter email"> 
                        </div>
</br>
                        <div class="form-group">
                            <!--<label>Submit paper</label>-->
                            <input type="file" name ="paper" class="form-control"  placeholder=""> 
                        </div>
</br>
                        <div class="form-group">
                           <!-- <label>Event</label>-->
                            <input type="text" name ="event" class="form-control"  placeholder="Enter event"> 
                        </div>
</br>
                        <div class="form-group">
                            <select id="paymentmethod" name="paymentmethod" class="form-control"  required>
                                <option value="" class="form-control" disabled selected>Select Payment Method</option>
                                <option value="credit">Credit card</option>
                                <option value="debit">Debit card</option>
                                <option value="paypal">Paypal</option>
                            </select>
                        </div>
</br>
                        <div class="form-group">
                           <!-- <label>Event</label>-->
                            <input type="text" name ="cname" class="form-control"  placeholder="Enter the name on card"> 
                        </div>
</br>
                        <div class="form-group">
                           <!-- <label>Event</label>-->
                            <input type="text" name ="cnumber" class="form-control"  placeholder="Enter card number"> 
                        </div>
</br>
                        <div class="form-group">
                           <!-- <label>Event</label>-->
                            <input type="text" name ="ccv" class="form-control"  placeholder="Enter CVV"> 
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


