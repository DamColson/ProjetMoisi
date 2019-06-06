<?php
$file = 'source.xml';
if(!file_exists($file)):
    echo 'Le XML n\'existe pas';
else:
if(isset($_GET)):
    $_GET = array_map('strip_tags',$_GET);
    $xml = simplexml_load_file($file);
endif;
endif;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Germania+One" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <title></title>
    </head>
    <body class="bg-beige germaniaStyleFont">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <?php
                    for ($i = 0; $i < 4; $i++):
                        ?>
                        <li class="nav-item">    
                            <a class="nav-link" href="<?=$i+1?>.html"><?= $xml->page[$i]->menu; ?></a>
                            <?php
                        endfor;
                        ?>
                    </li>
                </ul>
            </div>
</nav>
        <?php
        if(isset($_GET['page']) && $_GET['page'] == '1.html'):
            ?>
            <p class="text-center bg-beige text-brick h2 mt-3 underlined"><?=$xml->page[0]->title;?></p>
            <?php
            echo $xml->page[0]->content;
        elseif(isset($_GET['page']) && $_GET['page'] == '2.html'):
            ?>
            <p class="text-center bg-beige text-brick h2 mt-3 underlined"><?=$xml->page[1]->title;?></p>
            <?php
            echo $xml->page[1]->content;
        elseif(isset($_GET['page']) && $_GET['page'] == '3.html'):
?>
            <p class="text-center bg-beige text-brick h2 mt-3 underlined"><?=$xml->page[2]->title;?></p>
            <?php
            echo $xml->page[2]->content;
        elseif(isset($_GET['page']) && $_GET['page'] == '4.html'):
?>
            <p class="text-center bg-beige text-brick h2 mt-3 underlined"><?=$xml->page[3]->title;?></p>
            <?php
            echo $xml->page[3]->content;
        elseif(count($_GET) == 0):
?>
            <p class="text-center bg-beige text-brick h2 mt-3 underlined"><?=$xml->page[0]->title;?></p>
            <?php
            echo $xml->page[0]->content;
        endif;
        
        
        ?>
            <footer class="page-footer bg-brick text-beige font-small pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
          <h5 class="underlined">Qui sommes nous ?</h5>
          <p>Nous sommes un groupement permanent d’entreprises locales du bâtiment spécialisées dans les travaux de rénovation d’appartements et de maisons et de construction d’extensions horizontale ou verticale de maisons.</p>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="underlined">Liens divers</h5>
            <ul class="list-unstyled">
              <li>
                <a href="4.html">Nous contacter</a>
              </li>
              <li>
                <a href="https://www.codeur.com/blog/wp-content/uploads/2017/09/mention-legale-site-web-700x423.jpg" target="_blank">Mentions légales</a>
              </li>
              <li>
                <a href="https://www.ocordo-travaux.fr/" target="_blank">Nos concurrents directs</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="underlined">Nos réseaux Sociaux</h5>

            <ul class="list-unstyled">
              <li>
                <a href="https://fr-fr.facebook.com/pg/Agence-Ocordo-Travaux-123901887644073/about/"><i class="fab fa-facebook fa-2x"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/ocordo-travaux/"><i class="fab fa-linkedin fa-2x"></i></a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright: Team Glandouille</div>
  </footer>
    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/scripts/Projet.js"></script>
    </body>
</html>
