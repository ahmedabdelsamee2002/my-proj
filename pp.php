<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre><?php 
    if (isset($_POST["up"])) {
       // var_dump($_FILES["img"]);
        $from=$_FILES["img"]["tmp_name"];
        $to="files/" . $_FILES["img"]["name"]; 
       move_uploaded_file($from,$to);
    }
    
    //upload لايعمل مع ال get
    ?></pre>

<form method="post" action="pp.php" enctype="multipart/form-data">
<table> 
<tr><td>choose file</td>
<td><input type="file" name="img"></td>
<td><button type="submit" name="up" >uploud</td>
</tr>
</table>


</form>












</body>
</html>