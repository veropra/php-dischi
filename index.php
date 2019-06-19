<?php //include 'data.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-dischi</title>
    <link rel="stylesheet" href="public/css/php-dischi.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  </head>
  <body>
    <header></header>
    <div class="container">
      <div class="main_content">
        <?php
          /*foreach ($albums as $album){ ?>
            <div class="card_disco">
              <img src= "<?php echo $album ['img']?>">
              <div class="dati_disco">
                <p class="album"><?php echo $album ['album']?></p>
                <p class="nome_artista"><?php echo $album ['band']?></p>
                <small class="anno"><?php echo $album ['year']?></small>
              </div>
            </div>
        <?php }*/ ?>
      </div>
    </div>
    <script id="template_disco" type="text/x-handlebars-template">
      <div class="card_disco">
        <img src= "{{ img }}">
        <div class="dati_disco">
          <p class="album">{{ album }}</p>
          <p class="nome_artista">{{ band }}</p>
          <small class="anno">{{ year }}</small>
        </div>
      </div>
    </script>
    <script src= "public/js/php-dischi.js"></script>
  </body>
</html>
