<!DOCTYPE html>
<html>
<head>
    <title>Gaming</title>
</head>
<body>
Gaming
<form action="" method="POST">
    <label>Name</label><br>
    <input type="name" name="name" required> <br><br>

    <label>Color</label><br>
    <input type="color" name="color" required> <br><br>

    <label>Price</label><br>
    <input type="number" name="price" required> <br><br>

    <label>Material</label><br>
    <input type="text" name="material" required> <br><br>

    <label>Do you have armrest?</label><br>
    <input type="text" name="armrest" required> <br>

    <input type="submit" value="Utwórz obiekt" name="submit">
</form>
    <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $color = $_POST['color'];
            $price = $_POST['price'];
            $material = $_POST['material'];
            $armrest = $_POST['armrest'];
            $db = new mysqli('localhost', 'root', '', 'zaliczenie_mi17');
            $sql = "INSERT INTO `gaming_objects`(`name`, `color`,`price`, `material`,`armrest`) VALUES ('$name','$color','$price','$material','$armrest');";
            $db->query($sql);
            $db->close();
            echo "<script>alert('Obiekt chair [name=$name, color=$color, price=$price, material=$material, armrest=$armrest] został zapisany');
                document.location='../index.php'</script>";
        }
    ?>  

</body>
</html>