<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
        <h1>Data peternakan kadek  </h1>
        <table border="1" colspacing="0" colpadding="5">
            <tr>
                <th>No</th>
                <th>nama_hewan</th>
                <th>jumlah</th>
                <th>harga_jual</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($data_peternakan as $row):?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?php echo $row['nama_hewan']?></td>
                    <td><?= $row['jumlah']?></td>
                    <td><?= $row['harga_jual']?></td>
            </tr>
            <?php endforeach;?>
        </table>    
    
</html>