<!doctype html>
<html lang="de">
<head>
  <title>JF Pavimenti | Trend15</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="JF Pavimenti | Produkte | Teppichböden | Trend15">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="../../../favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../../favicons/apple-touch-icon-60x60.png">
  <link rel="icon" type="image/png" href="../../../favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="../../../favicons/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#5a9aa8">
  <meta name="msapplication-config" content="../../../favicons/browserconfig.xml">
  <!-- Favicons Ende -->
  <link rel="stylesheet" type="text/css" href="../../../css/produkte.min.css">
<!--[if lt IE 9]>
  <script src="../../../html5shiv/html5shiv.min.js"></script>
<![endif]-->
<!-- PhotoSwipe -->
  <!-- Core CSS file -->
  <link rel="stylesheet" type="text/css" href="../../../photoswipe/photoswipe.min.css">
  <!-- Skin CSS file (optional)
       In folder of skin CSS file there are also:
       - .png and .svg icons sprite,
       - preloader.gif (for browsers that do not support CSS animations) -->
  <link rel="stylesheet" type="text/css" href="../../../photoswipe/default-skin/default-skin.min.css">
<!-- PhotoSwipe Ende -->
</head>
<body>
  <header>
    <section>
      <a href="../../../index.html" id="back">Zurück</a>
      <h1>Produkte</h1>
      <a href="../../../index.html#kontakt" id="buy">Kontakt<span id="word"> aufnehmen</span></a>
    </section>
  </header>
  <main>
    <section class="wrapper-white2">
      <div class="content">
        <div class="dropdown">
          <a href="../../parkettboden/index.html">
            <p>Parkettböden</p>
            <img src="../../../img/parkettboden.jpg" alt="Parkettboden" width="205" height="275">
          </a>
          <div>
            <a href="../../parkettboden/calgary-25-ldx/raumbilder.php">Calgary 2.5 LDX</a>
            <a href="../../parkettboden/calgary-35/raumbilder.php">Calgary 3.5</a>
            <a href="../../parkettboden/castle/raumbilder.php">Castle</a>
            <a href="../../parkettboden/chalet/raumbilder.php">Chalet</a>
            <a href="../../parkettboden/kingston-35-sb/raumbilder.php">Kingston 3.5 SB</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="../../dielenboden/index.html">
            <p class="produkt-text">Dielenböden</p>
            <img src="../../../img/dielenboden.jpg" alt="Dielenboden" width="205" height="275">
          </a>
          <div>
            <a href="../../dielenboden/castilla/raumbilder.php">Castilla</a>
            <a href="../../dielenboden/chateau/raumbilder.php">Chateau</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="../../designbelag/index.html">
            <p class="produkt-text">Designbeläge</p>
            <img src="../../../img/designbelag.jpg" alt="Designbelag" width="205" height="275">
          </a>
          <div>
            <a href="../../designbelag/design-plus-xxl/raumbilder.php">Design Plus XXL</a>
            <a href="../../designbelag/design-royal/raumbilder.php">Design Royal</a>
            <a href="../../designbelag/design-royalspace-16/raumbilder.php">Design RoyalSpace 16</a>
            <a href="../../designbelag/design-supreme/raumbilder.php">Design Supreme</a>
            <a href="../../designbelag/swift16/raumbilder.php">Swift16</a>
          </div>
        </div>
        <div class="dropdown dactive">
          <a href="../../teppichboden/index.html" class="last">
          <p class="produkt-text">Teppichböden</p>
          <img src="../../../img/teppichboden.jpg" alt="Teppichboden" width="205" height="275">
          </a>
          <div>
            <a href="../../teppichboden/select15/raumbilder.php">Select15</a>
            <a href="../../teppichboden/trend15/raumbilder.php" class="lactive">Trend15</a>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper-white4">
      <div class="content gallery raum">
<?php
  foreach (glob('raumbilder/thumbnails/*.jpg') as $thumb) {
    $name = basename($thumb);
    $large = 'raumbilder/'.$name;
    list($width, $height) = getimagesize($large);
    echo '
<figure class="ra-fig">
  <a href="'.$large.'" data-size="'.$width.'x'.$height.'">
    <img src="'.$thumb.'" class="ra-thumb">
  </a>
  <figcaption>'.$name.'</figcaption>
</figure>
    ';
  }
?>
      </div>
    </section>
  </main>
<!-- PhotoSwipe -->
  <?php include "../../../photoswipe/individual.php";?>
  <!-- Core JS file -->
  <script src="../../../photoswipe/photoswipe.min.js"></script>
  <!-- UI JS file -->
  <script src="../../../photoswipe/photoswipe-ui-default.min.js"></script>
  <!-- Individual JS file -->
  <script src="../../../photoswipe/individual.min.js"></script>
<!-- PhotoSwipe Ende -->
</body>
</html>