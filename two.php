<?php
session_start();
$row=$_POST["row_field"];
$col=$_POST["col_field"];
$_SESSION['row']=$row;
$_SESSION['col']=$col;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
 <form method="post"action="three.php">
  <?php
   for($k=0;$k<2;$k++)
   {
    ?>
    
    <table>
        <?php
            for($i=0;$i<$row;$i++)
            {
              ?>
                <tr>
                <?php
                    for($j=0;$j<$col;$j++)
                    {
                      ?> 
                            <td>
                            <input type="text"name="a<?php echo $k; echo $i; echo $j;?>">
                           
                            </td>
                        <?php              
                    }
                ?>
                </tr>
                <?php
            }
        ?>
    </table><br>
    <?php
   }
    ?>
     <input type="submit" name="add"value="add">
     <input type="submit" name="sub" value="subtract">
    </form>
</body>
</html>