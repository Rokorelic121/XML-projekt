<?php

// ucitaj knjige.xml
$xml = simplexml_load_file('podaci/knjige.xml');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popis ne vraćenih knjiga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Knjižnica</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Korisnici</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="povrat.php">Povrat knjiga</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h2 class="mt-4">Popis ne vraćenih knjiga</h2>

    <table class="table mt-3">
      <thead>
        <tr>
          <th>Naslov</th>
          <th>Autor</th>
          <th>Članski broj</th>
          <th>Datum posudbe</th>
          <th>Adresa</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($xml->zapis as $z): ?>
          <tr>
            <td><?php echo htmlspecialchars($z->naslov); ?></td>
            <td><?php echo htmlspecialchars($z->autor); ?></td>
            <td><?php echo htmlspecialchars($z->clanski_broj); ?></td>
            <td><?php echo htmlspecialchars($z->datum_posudbe); ?></td>
            <td><?php echo htmlspecialchars($z->adresa); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>