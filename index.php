<?php
$file = 'source.xml';
$xml = simplexml_load_file($file);
if (isset($_GET)):
    $_GET = array_map('strip_tags', $_GET);
endif;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Germania+One" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <title><?= $xml->page->title; ?></title>
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
                            <a class="nav-link" href="<?= $i + 1 ?>.html"><?= $xml->page[$i]->menu; ?></a>
                            <?php
                        endfor;
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
        if (isset($_GET['page']) && $_GET['page'] == '1.html'):
            ?>
            <p><?= $xml->page[0]->title; ?></p>
            <?php
            echo $xml->page[0]->content;
        elseif (isset($_GET['page']) && $_GET['page'] == '2.html'):
            ?>
            <p><?= $xml->page[1]->title; ?></p>
            <?php
            echo $xml->page[1]->content;
        elseif (isset($_GET['page']) && $_GET['page'] == '3.html'):
            ?>
            <p><?= $xml->page[2]->title; ?></p>
            <?php
            echo $xml->page[2]->content;
        elseif (isset($_GET['page']) && $_GET['page'] == '4.html'):
            ?>
            <p class="text-center bg-brick text-beige"><?= $xml->page[3]->title; ?></p>
            <?php
            echo $xml->page[3]->content;
        elseif (count($_GET) == 0):
            ?>
            <p><?= $xml->page[0]->title; ?></p>
            <?php
            echo $xml->page[0]->content;
        endif;
        ?>
            
            
        <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/scripts/Projet.js"></script>
    </body>
</html>

