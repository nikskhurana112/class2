<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" style="margin:auto";">
    
    <?php for($i = 0 ;  $i <= 10; $i++) { ?>
    <tr style="text-align: center;">
        <td><?php echo $_GET['table'] ?></td>
        <td>*</td>
        <td><?php echo $i ?></td>
        <td><?php echo ($i * $_GET['table']) ?></td>
    </tr>
    <?php } ?>
</table>
    
</body>
</html>