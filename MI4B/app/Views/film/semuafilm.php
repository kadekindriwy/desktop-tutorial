<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
</head>
<body>
    
</body>
        <h1>Data Film kadek indri wedayani
        </h1>
        <table border="1" colspacing="0" colpadding="5">
            <tr>
                <th>No</th>
                <th>cover</th>
                <th>Nama Film</th>
                <th>Genre</th>
                <th>Durasi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($semuafilm as $film):?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td>
                        <img style="width:70px;"src="/assest/cover/kadek/<?= $film['cover'] ?>" alt="">
                    </td>
                    <td><?php echo $film['nama_film'] ?></td>
                    <td><?php echo $film['id_genre'] ?></td>
                    <td><?php echo $film['duration'] ?></td>
                </tr>
            <?php endforeach;?>
        </table>  
            </body>  

</html>