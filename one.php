<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
    <link href="css/style.css">
</head>
<body>
    <form action="two.php" method="post">
        <div class="form-group"> 
            <label>Enter the number of rows</label>
            <input type="number" name="row_field">
        </div>
        <div class="form-group">
            <label>Enter the number of columns</label>
            <input type="number" name="col_field">
        </div>
        <input type="submit" value="create"> 
    </form>
</body>
</html>