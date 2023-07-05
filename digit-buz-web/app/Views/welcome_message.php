<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DigitBuz</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="./styles.css" />
</head>

<body class="bg-color0">

  <nav class="navbar navbar-expand-lg fixed-top bg-light p-0">
    <div class="navbar-header d-flex">
      <div id="nav-icon1" class="navbar-toggle ml-4 d-lg-none collapsed" data-toggle="collapse"
        data-target="#navbarNavDropdown" aria-expanded="false" aria-controls="navbarNavDropdown">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <a class="navbar-brand p-3 pl-4" href="#">
        <span class="logo-text-left">DIGIT</span>
        <span class="logo-text-right">BUZ</span>
      </a>

    </div>
    <div class="navbar-collapse collapse" id="navbarNavDropdown">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">

            Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Links</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Crypto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right-buttons">

        <li class="nav-item">
          <a class="nav-link" href="#">Option1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Option2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
            <a class="dropdown-item" href="#">Action1</a>
            <a class="dropdown-item" href="#">Another action1</a>
            <a class="dropdown-item" href="#">Something else here1</a>
          </div>
        </li>
      </ul>

    </div>
  </nav>
  <div class="body-content">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?=
    $this->include('layout/footer');
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a13e0df62b.js" crossorigin="anonymous"></script>
</body>

</html>