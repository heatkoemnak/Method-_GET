<html>
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title> -->
    <?php
        require_once('db/hdsd.php');
    ?>
</head>
<body>
    

    <form action = "?" method="POST">
        name:<input type="text" name="stname"><br>
        email:<input type="text" name="stemail"><br>
        place:<input type="text" name="stplace">
        
        <input type="submit" name="submit"value="send">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $name=$_POST['stname'];
            $email=$_POST['stemail'];
            $place=$_POST['stplace'];
            
            $sql="INSERT INTO db(studentname,email,place) value=('$name','$email','$place')";
            if (mysqli_query($conn,$sql))
            {
                echo "Connection is succesfull";
            }
            else {
                echo "connection is failed";
            }
        }
        
    ?>
</body>
</html>