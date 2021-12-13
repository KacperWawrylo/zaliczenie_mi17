<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>
<body>
    <center>
        <div class = "tabele">
            <table>
			<tr>
				<th>ID</th>
				<th>Nazwa</th>
				<th>imgSrc</th>
				<th>Title</th>
				<th>Level</th>
				<th>ParentID</th>
			</tr>
			    <?php
				    $mysqliCon = @mysqli_connect("localhost", "root", "", "zaliczenie_mi17");
				    $sql = "SELECT * FROM classes;";
				    $result = mysqli_query($mysqliCon, $sql);
				    while ($row = mysqli_fetch_array($result))
				    {
					    echo "<tr>";
					    echo "<td>".$row["id"]."</td>";
					    echo "<td>".$row["name"]."</td>";
					    echo "<td>".$row["imgSrc"]."</td>";
					    echo "<td>".$row["title"]."</td>";
					    echo "<td>".$row["level"]."</td>";
					    echo "<td>".$row["parentId"]."</td>";
					    echo "</tr>";
				    }
				    mysqli_close($mysqliCon);
			    ?>
		    </table> 
        </div>   
    </center>
    <h1>Fotele</h1>
    <div class="chair">
        <img src="img/chair.png" alt="">
    </div>
    <div class = "level2">
        <img src="img/biurowe.jpg" alt="biurowe">
    </div>
    <div class = "level2">
        <img src="img/gaming.jpg" alt="gaming">
    </div>
    <div class = "level2">
        <img src="img/forhome.jpg" alt="forhome">
    </div>
    <div class = "level3">
        <img src="img/ergonomic.jpg" alt="ergonomiczne">
    </div>
    <div class="level3">
        <img src="img/basic.png" alt="basic">
    </div>
    <div class="level4">
        <img src="img/basicchair.png" alt="ba">
    </div>
    <div class="level4">
        <img src="img/rockingchair.jpg" alt="rocking">
    </div>
</body>
</html>