<!DOCTYPE html>
<html>
<head>
    <title>Chair</title>
</head>
<body>
CHAIR
<form action="" method="POST">
    <label>Name</label><br>
    <input type="name" name="name" required> <br><br>

    <label>Color</label><br>
    <input type="color" name="color" required> <br><br>

    <input type="submit" value="Utwórz obiekt" name="submit">
</form>
    <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $color = $_POST['color'];
            $db = new mysqli('localhost', 'root', '', 'zaliczenie_mi17');
            $sql = "INSERT INTO `chair_objects`(`name`, `color`) VALUES ('$name','$color')";
            $db->query($sql);
            $db->close();
            echo "<script>alert('Obiekt chair [name=$name, color=$color] został zapisany');
                document.location='../index.php'</script>";
        }
    ?>  

</body>
</html>