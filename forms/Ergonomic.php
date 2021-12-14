<!DOCTYPE html>
<html>
<head>
    <title>Ergonomic</title>
</head>
<body>
Ergonomic
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
    <input type="text" name="armrest" required> <br><br>

    <label>Do you have lumbar support? </label><br>
    <input type="text" name="loins" required><br><br>

    <input type="submit" value="Utwórz obiekt" name="submit">
</form>
    <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $color = $_POST['color'];
            $price = $_POST['price'];
            $material = $_POST['material'];
            $armrest = $_POST['armrest'];
            $loins = $_POST['loins'];
            $db = new mysqli('localhost', 'root', '', 'zaliczenie_mi17');
            $sql = "INSERT INTO `ergonomic_objects`(`nazwa`, `color`,`price`, `material`,`armrest`,`for_the_loins`) VALUES ('$name','$color','$price','$material','$armrest','$loins');";
            $db->query($sql);
            $db->close();
            echo "<script>alert('Obiekt chair [name=$name, color=$color, price=$price, material=$material] został zapisany');
                document.location='../index.php'</script>";
        }
    ?>  

</body>
</html>