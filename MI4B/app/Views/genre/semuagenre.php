<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
</head>
<body>
    
</body>
        <h1>Data genre film kadek indri wedayani
        </h1>
        <table border="1" colspacing="0" colpadding="5">
            <tr>
                <th>No</th>
                <th>Nama genre</th>
                <th>create at</th>
                <th>update at</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($semuagenre as $genre):?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $genre['name_genre'] ?></td>
                    <td><?php echo $genre['create_at'] ?></td>
                    <td><?php echo $genre['update_at'] ?></td>
                </tr>
            <?php endforeach;?>
        </table>  
            </body>  

</html>