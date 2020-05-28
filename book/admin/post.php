<?php
    if(isset($_POST['post'])){
        $title = $_POST['title'];
        $pages = $_POST['pages'];
        $price = $_POST['price'];
        $code = $_POST['code'];
        $author = $_POST['author'];
        
        $sql = "INSERT INTO lists (title, pages, price, code, author)
        VALUES ('$title',
        '$pages',
        '$price',
        '$code',
        '$author')";
        mysqli_query($connection, $sql);
        header('Location: index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Post</title>
</head>
<body>
    <center><article>
    <br><b>POST SOMETHING<b>
    <form action="" style = "padding:20px" method="post">
    <input placeholder="Title" type="text" name="title" required minlength="1" maxlength="100"><br><br>
    <input placeholder="pages" type="number" name="pages" required minlength="1" maxlength="100"><br><br>
    <input placeholder="price" type="number" name="price" required minlength="1" maxlength="100"><br><br>
    <input placeholder="code" type="text" name="code" required minlength="1" maxlength="100"><br><br>
    <input placeholder="author" type="text" name="author" required minlength="1" maxlength="100"><br><br>
    <br>
    <input type="submit" name="post" value="POST">
    </form>
    </article></center>
</body>
</html>