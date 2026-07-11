<!DOCTYPE html>
<html>
	<head>
		<meta charSet="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/fonts/css/clash-display.css">
		<link rel="stylesheet" href="./css/fonts/css/clash-grotesk.css">
		<link rel="stylesheet" href="./css/animations.css">
		<link rel="stylesheet" href="./css/style.css">
    <script src="/js/rellax.min.js" defer></script>
    <script>
      window.onload = () => {
        var rellax = new Rellax('.js-rellax')
      }
    </script>
	</head>
	<body class="body home">
		<header class="header">
      <div class="section socials">
        <div class="inner">
          <ul class="social-icons">
            <li><a title="Envoyez-moi un courriel" href=""><img alt="Email" src="/images/icons-socials-mailme.png"></a></li>
            <li><a title="Linkedin" href=""><img alt="Linkedin" src="/images/icons-socials-linkedin.png"></a></li>
            <li><a title="Instagram" href=""><img alt="Instagram" src="/images/icons-socials-instagram.png"></a></li>
            <li class="hamburger-holder">
            </li>
          </ul>
          <button class="mobile-menu-button mobile-menu-open" type="button" command="show-modal" commandfor="mobile-menu" aria-expanded="false" aria-controls="mobile-menu">
            <svg aria-hidden="true" viewBox="0 0 24 24" width="24" height="24">
              <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
            </svg>
          </button>

        </div>
      </div>
      <div class="section menu">
        <div class="inner">

          <dialog id="mobile-menu" class="mobile-menu" >
            <div class="dialog-header">
              <button class="mobile-menu-button" type="button" id="menu-close" commandfor="mobile-menu"
                            command="close">
                <svg aria-hidden="true" viewBox="0 0 24 24" width="24" height="24">
                  <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
              </button>
            </div>

            <nav aria-label="Mobile Navigation">
              <ul class="">
                <!-- DON'T FORGET TO ALSO UPDATE THE DESKTOP MENU ITEMS -->
                <li class="<?= active('accueil') ?>"><a href="/">Accueil</a></li>
                <li class="<?= active('services') ?>"><a href="/services.php">Services</a></li>
                <li class="<?= active('blogue') ?>"  ><a href="/blogue.php">Blogue</a></li>
                <li class="<?= active('contact') ?>" ><a href="/contact.php">Contact</a></li>
              </ul>
            </nav>
          </dialog>


          <nav class="nav">
            <h1 class="logo"><a href="/">Élisa Cyr</a></h1>
            <ul class="main-nav">
              <!-- DON'T FORGET TO ALSO UPDATE THE MOBILE MENU ITEMS -->
              <li class="<?= active('accueil') ?>"><a class="hvr-sweep-to-bottom" href="/">Accueil</a></li>
              <li class="<?= active('services') ?>"><a class="hvr-sweep-to-bottom" href="/services.php">Services</a></li>
              <li class="<?= active('blogue') ?>"  ><a class="hvr-sweep-to-bottom" href="/blogue.php">Blogue</a></li>
              <li class="<?= active('contact') ?>" ><a class="hvr-sweep-to-bottom" href="/contact.php">Contact</a></li>
            </ul>
          </nav>
        </div><!-- /inner -->
      </div>

