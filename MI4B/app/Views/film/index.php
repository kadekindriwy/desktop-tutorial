<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
        <h1>Data film kadek  </h1>
        <table border="1" colspacing="0" colpadding="5">
            <tr>
                <th>No</th>
                <th>nama_film</th>
                <th>genre</th>
                <th>duration</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($data_film as $row):?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?php echo $row['nama_film']?></td>
                    <td><?= $row['genre']?></td>
                    <td><?= $row['duration']?></td>
            </tr>
            <?php endforeach;?>
        </table>    
    
</html>