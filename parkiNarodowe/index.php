<!DOCTYPE html>
<html>
<head>
    <title>Parki Narodowe</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class='myNavbar'>
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <a class="navbar-brand loadContent" data-content="parki"  >Parki Narodowe</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link loadContent" data-content="spis" >Spis Parkow  Narodowych <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link loadContent" data-content="mapa" >Mapa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link loadContent"  data-content="kontakt" href="#">Kontakt</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bibliografia
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="http://www.ekoportal.gov.pl/informacja-o-srodowisku/polskie-parki-narodowe/" target="_blank">Ekoportal.gov.pl</a>
                    <a class="dropdown-item" href="#">Kolejna strona</a>
                    <a class="dropdown-item" href="#">Jeszcze jedna strona</a>
                  </div>
                </li>

              </ul>

            </div>
            <div class="my-2 my-lg-0 text-right">
                <span class="mr-sm-2" id="clock" >12:34:56</span>
            </div>
          </nav>
    </header>
    <div class='container' >

      <div class='row  contentAjax'>

      </div>

    </div>
    <footer>
        <div>
            &copy 2017 Marcin Janerka
        </div>
    </footer>


    <script src="jquery-3.2.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/ajax.js" type="text/javascript"></script>
    <script src="js/contact.js" type="text/javascript"></script>
    <script src="js/descriptionLoader.js" type="text/javascript"></script>
</body>
</html>
