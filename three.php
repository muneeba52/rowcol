<?php
session_start();
?>
<table>
       
        <?php
            for($i=0;$i<$_SESSION['row'];$i++)
            {
        ?>
                <tr>
                    <?php
                        for($j=0;$j<$_SESSION['col'];$j++)
                        {
                      ?> 
                            <td>
                            <input type="text" value="<?php
                            if(isset($_POST['add']))
                            {
                                echo $_POST['a0'.$i.$j]+$_POST['a1'.$i.$j];
                            }
                            else
                            {
                                echo $_POST['a0'.$i.$j]-$_POST['a1'.$i.$j];        
                            }
                                                      
                                                      ?>">
                            </td>
                        <?php              
                            }
                        ?>
                </tr>
        <?php
            }
        ?>
    </table>
