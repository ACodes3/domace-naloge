<?php
// razhroščevanje
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Sporočila za napake, default
$errors = [];
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = trim($_POST['ime']);
    $priimek = trim($_POST['priimek']);
    $email = trim($_POST['email']);
    $telefon = trim($_POST['telefon']);
    $sporocilo = trim($_POST['sporocilo']);

    // Validacija podatkov
    if (empty($ime) || !preg_match("/^[a-zA-Z]+$/", $ime)) {
        $errors[] = "Ime mora vsebovati samo črke.";
    }

    if (empty($priimek) || !preg_match("/^[a-zA-Z]+$/", $priimek)) {
        $errors[] = "Priimek mora vsebovati samo črke.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Vnesite veljaven e-naslov.";
    }

    if (empty($telefon) || !preg_match("/^\d+$/", $telefon)) {
        $errors[] = "Telefon mora vsebovati samo številke.";
    }

    if (empty($sporocilo)) {
        $errors[] = "Sporočilo ne sme biti prazno.";
    }

    // Pošlji email -mail() funkcijo
    if (empty($errors)) {
        $to = "info@email.com"; // Spremenimo da dela v nek veljaven email
        $subject = "Novo sporočilo iz kontaktnega obrazca";
        $message = "Ime: $ime\nPriimek: $priimek\nEmail: $email\nTelefon: $telefon\nSporočilo:\n$sporocilo";
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            $success_message = "Vaše sporočilo je uspešno poslano.";
        } else {
            $errors[] = "Prišlo je do napake pri pošiljanju vašega sporočila.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Kontakt obrazec</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link href="./style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
</head>
<body class="bg-light-subtle">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="./slike/logo.png" alt="logo" width="70px" height="60px" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Domov</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="o-meni.php">O meni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="kontakt.php">Kontakt</a>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container my-5 shadow">
      <div class="row">
        <div
          class="col-md-4 bg-primary p-5 text-white order-sm-first order-last"
        >
          <h2>Kontakt</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            odio nulla impedit eius quaerat, dolores harum consequuntur illum
            minima vel, nostrum modi ea ex nam consequatur deleniti explicabo
            reprehenderit quisquam?
          </p>
          <div class="d-flex mt-2">
            <i class="bi bi-geo-alt"></i>
            <p class="mt-3 ms-3">Naslov: Nek izmišljen naslov....</p>
          </div>
          <div class="d-flex mt-2">
            <i class="bi bi-telephone-forward"></i>
            <p class="mt-4 ms-3">Phone : 0123456789</p>
          </div>
          <div class="d-flex mt-2">
            <i class="bi bi-envelope"></i>
            <p class="mt-4 ms-3">Email : primer@email.com</p>
          </div>
          <div class="d-flex mt-2">
            <i class="bi bi-youtube"></i>
            <p class="mt-4 ms-3">Websajt : www.website.com/</p>
          </div>
        </div>
        <div class="col-md-8 p-5">
          <h2>Kontaktirajte nas</h2>
          <?php if (!empty($errors)): ?>
              <div class="alert alert-danger">
                  <?php foreach ($errors as $error): ?>
                      <p><?php echo $error; ?></p>
                  <?php endforeach; ?>
              </div>
          <?php elseif (!empty($success_message)): ?>
              <div class="alert alert-success">
                  <p><?php echo $success_message; ?></p>
              </div>
          <?php endif; ?>

          <form class="row g-3 contactForm mt-4" method="post" action="kontakt.php">
            <div class="col-md-6">
              <label for="inputIme" class="form-label">Ime</label>
              <input
                type="text"
                class="form-control"
                id="inputIme"
                name="ime"
                required
              />
            </div>
            <div class="col-md-6">
              <label for="inputPriimek" class="form-label">Priimek</label>
              <input
                type="text"
                class="form-control"
                id="inputPriimek"
                name="priimek"
                required
              />
            </div>
            <div class="col-12">
              <label for="inputSporocilo" class="form-label">Sporočilo</label>
              <textarea
                class="form-control"
                id="inputSporocilo"
                name="sporocilo"
                rows="4"
                required
              ></textarea>
            </div>
            <div class="col-12">
              <label for="inputEmail" class="form-label">e-naslov</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                name="email"
                required
              />
            </div>
            <div class="col-12">
              <label for="inputTelefon" class="form-label">Tel. št</label>
              <input
                type="text"
                class="form-control"
                id="inputTelefon"
                name="telefon"
                required
              />
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-3">Pošlji</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
</body>
</html>
