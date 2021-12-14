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
        <?php
            $conn = mysqli_connect("localhost","root","","zaliczenie_mi17");
            $query = "SELECT imgSrc FROM classes WHERE level = 1;";
            $sql = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($sql)){
                $imgSrc = $row["imgSrc"];
                echo "<div class = 'level1'>";
                echo "<img src='$imgSrc' alt='fotel'>";
                echo "</div>";
            }
        ?>
        <?php
            $conn = mysqli_connect("localhost","root","","zaliczenie_mi17");
            $query = "SELECT imgSrc ,id FROM classes WHERE level = 2;";
            $sql = mysqli_query($conn,$query);
            $l= mysqli_query($conn,"SELECT count(*) FROM classes WHERE level = 2;");
            $l=mysqli_fetch_array($l);
            $l = $l[0];
            $l=100/$l;
            while($row = mysqli_fetch_array($sql)){
                $id = $row["id"];
                $imgSrc = $row["imgSrc"];
                echo "<div class = 'level2' id='$id' style='width:$l%';>";
                echo "<img src='$imgSrc'>";
                echo "</div>";
            }
            
        ?>
        <?php
            $conn = mysqli_connect("localhost","root","","zaliczenie_mi17");
            $query = "SELECT imgSrc FROM classes WHERE level = 3;";
            $sql = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($sql)){
                $imgSrc = $row["imgSrc"];
                echo "<div class = 'level3'>";
                echo "<img src='$imgSrc'>";
                echo "</div>";
            }
        ?>
</body>
</html>