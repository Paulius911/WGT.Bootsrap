<!DOCTYPE html>
<html>

<head>
    <title>women go tech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700&amp;subset=latin-ext" rel="stylesheet">
  <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/itbextra.css" media="screen" />

</head>

<body>
 <header id="navbar">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="header-inner">
           <div class="logo-wrapper">
             <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/wgt_logo.png" alt="<?php bloginfo('name'); ?>">
           </div>
           <div id="btn-toggle-menu" class="button-itb-meniu"></div>
           <div id="menu-mobile-toggle" class="meniu-wrapper">
           <ul>
             <li><a href="#">Pradinis</a></li>
             <li><a href="#">Apie mus</a></li>
             <li><a href="#">Video</a></li>
             <li><a href="#">Komanda</a></li>
             <li><a href="#">Kontaktai</a></li>
             <li><a href="#">Registruokis dabar</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
  </div>
 </header>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = 50;

console.log(sticky);

function myFunction() {
if (window.pageYOffset >= sticky) {
 navbar.classList.add("sticky")
} else {
 navbar.classList.remove("sticky");
}
}


jQuery( "#btn-toggle-menu" ).click(function() {
jQuery( "#menu-mobile-toggle" ).toggle();
});
</script>
