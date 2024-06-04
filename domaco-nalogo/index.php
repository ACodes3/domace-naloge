<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Index HTML</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-light-subtle">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="./slike/logo.png" alt="logo" width="70px" height="60px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Domov</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="o-meni.php">O meni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="./slike/the_school_for_good_and_evil_wallaper.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="./slike/raya-and-the-last-dragon-bg.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="./slike/the_witcher_wallpaper.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <section
      class="d-flex flex-column justify-content-around align-items-center mx-2"
    >
      <h1 class="display-1">Top 10 movies on Netflix</h1>
      <table class="table table-success table-striped w-100">
        <thead>
          <tr>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
        </tbody>
      </table>
      <h1 class="display-1">Top 10 series on Netflix</h1>
      <table class="table table-success table-striped w-100">
        <thead>
          <tr>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>@Lorem</td>
            <td>@Lorem</td>
          </tr>
        </tbody>
      </table>
    </section>
    <footer>
      <p>Footer element</p>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
