
<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8"> 
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- FONTAWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- SWIPER JS -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- FANCYBOX -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

<!-- LIGHTBOX -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SCRIPTS -->
<script src="JS/script.js"></script>

<!-- STYLES -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<body>


<header>
  <nav class="navbar navbar-expand-lg" id="headerNav">
    <div class="container-fluid text-center">
      <a class="navbar-brand d-block d-lg-none" href="index.html">
        <img src="imagens/rsz_logosurf.png" class="surfescapelogo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand d-none d-lg-block" href="index.html">
        <img src="imagens/rsz_logosurf.png" alt="Logo">
      </a>
    </li>
  </ul>
  <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link mx-3" href="school.php">
              <h4>Escola</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3" href="rentals.php">
              <h4>Packs e Aluguer</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3" href="gallery.php">
              <h4>Galeria</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3" href="contacts.php">
              <h4>Contactos</h4>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
</body>
</html>

<!-- /////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////////// -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  var header = document.getElementById("headerNav");
  var footer = document.getElementById("footer");
  var lastScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

  function showFooter() {
    footer.style.display = "block";
  }

  function hideFooter() {
    footer.style.display = "none";
  }

  function handleScroll() {
    var currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScrollPosition > lastScrollPosition) {
      header.classList.add("navbar-transparent");
      showFooter();
    } else {
      header.classList.remove("navbar-transparent");
      hideFooter();
    }

    lastScrollPosition = currentScrollPosition;
  }

  window.addEventListener("scroll", handleScroll);
});
</script> 

