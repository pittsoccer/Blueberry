<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        for ($i = 1; $i <= 100; $i++)
        {
            if ($i % 15 == 0)
            {
                echo $i . " Blueberry\n";
            }
            elseif ($i % 3 == 0)
            {
                echo $i . " Blue\n";
            }
            elseif ($i % 5 == 0)
            {
                echo $i . " Berry\n";
            }
            else
            {
                echo $i . "\n";
            }
        }
        ?>

    </body>
</html>
