<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>

<link rel="stylesheet" href="/assest/css/bootstrap.min.css">
</head>
<body>
    
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">kdex07</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/film">semuafilm</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="/genre">Kategori Film</a>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href= "/about">tentang kami</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<div class ="row">
    <div class="col-md-12">
        <table class= "table table-hover">
            <tr>
            <th>No</th>
            <th>Nama Genre</th>
</tr>
<?php $i =1;?>
<?php foreach($data_genre as $genre) : ?>
    <tr>
        <td> <?= $i++; ?></td>
        <td> <?= $genre["nama_genre"]?></td>
<td>
    <a href="" class="btn btn-success"> Update</a>
    <a href="" class="btn btn-warning"> Delete</a>
</td>
</tr>
<?php endforeach; ?>
    </div>
    <script scr="/assets/js/bootstrap.min.js"></script>
</table>
</body>
</html>