<?php
    include "dbconnect.php";
    if(!isset($_GET['pid'])){
        header("location: ../index.php");
    }

    $pid = $_GET['pid'];

    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $pages = $_POST['pages'];
        $price = $_POST['price'];
        $code = $_POST['code'];
        $author = $_POST['author'];
        
        $sql = "UPDATE lists SET title='$title', pages='$pages', price='$price', code='$code', author='$author' WHERE id=$pid";
        mysqli_query($connection, $sql);
        header('Location: ../index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>BOOKS</title>
</head>
<body>
    <div class="header">BOOKS</div>
    <div class="middle">
        <center><?php
        $sql_get = "SELECT * FROM lists WHERE id=$pid LIMIT 1";
        $res = mysqli_query($connection, $sql_get);

        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                $title = $row['title'];
                $pages = $row['pages'];
                $price = $row['price'];
                $code = $row['code'];
                $author = $row['author'];


            echo "<br><b>UPDATE<b><br><br>";
            echo "<form action='edit.php?pid=$pid' method='post'>";
            echo "<input placeholder='Title' value='$title' type='text' name='title' required minlength='1' maxlength='100'><br><br>";
            echo "<input placeholder='pages' value='$pages' type='number' name='pages' required minlength='1' maxlength='100'><br><br>";
            echo "<input placeholder='price' value='$price' type='number' name='price' required minlength='1' maxlength='100'><br><br>";
            echo "<input placeholder='code' value='$code' type='text' name='code' required minlength='1' maxlength='100'><br><br>";
            echo "<input placeholder='author' value='$author' type='text' name='author' required minlength='1' maxlength='100'><br><br>";
            }
        }
        ?>
    
    <input type="submit" name="update" value="UPDATE"><br><br>
    </form></center>
    </div>
    <div class="footer">All Rights Reserved By Bacho Inc©</div>
</body>
</html>