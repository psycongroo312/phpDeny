<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $array = include './math.php'?>

    <table>
        <tr>
            <th>Индекс</th>
            <th>Значение</th>
        </tr>
        
        <?php 
        include './table.php'; 
        abc($table)
        ?>
        

    </table>
    

    
</body>
</html>