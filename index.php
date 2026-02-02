<!DOCTYPE html>
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
                echo $i . " Blueberry<br>";
            }
            elseif ($i % 3 == 0)
            {
                echo $i . " Blue<br>";
            }
            elseif ($i % 5 == 0)
            {
                echo $i . " Berry<br>";
            }
            else
            {
                echo $i . "<br>";
            }
        }
        ?>
    </body>
</html>
