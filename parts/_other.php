<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2019-01-29 10:43
 * @File name           : _other.php
 */

?>


<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2019-01-29 10:43
 * @File name           : _other.php
 */

?>

<!-- <div class="result-search pb-5">
    <section id="section1 container-fluid">
        <header class="c-header">
            <div class="mask"></div>
          <?php
          // ----------------------------------------------------------------------
          // include navbar part
          // ----------------------------------------------------------------------
          include '_navbar.php'; ?>
        </header>
      <?php
      // ------------------------------------------------------------------------
      // include search form part
      // ------------------------------------------------------------------------
      include '_search-form.php'; ?>
    </section>

    <section class="container mt-8">
      
    </section>
</div> -->

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>LOGIN PUSTAKAWAN</title>
    <link rel="stylesheet" href="<?php echo assets('css/ivaa.style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-1">
                <div class="marquee">
                  <div class="track">
                    <div class="content">&nbsp;INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA)</div>
                  </div>
                </div>
            </div>
        
        <div class="col-md-5">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
            </a>
            <?php if ($_GET['p'] == "librarian") {
              echo '<h1 class="area-a">PUSTAKAWAN</h1>';
            } elseif ($_GET['p'] == "login") {
              echo '<h1 class="area-a">LOGIN <br> PUSTAKAWAN</h1>';
            } else {
              echo '<div class="py-0 other-search">';
              echo '<h1 class="text-center">PERPUSTAKAAN</h1>';
              echo include '_search-form.php';
              echo '</div>';
            }
            ?>

        </div>

<div class="col-md-6" id="kanan-a">
    
             <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">HOME</a>
        <a href="info_perpustakaan.html">INFO PERPUSTAKAAN</a>
        <a href="pustakawan.html">PUSTAKAWAN PICKS</a>
        <a href="perpustakaan2.html">SOROTAN PUSTAKA</a>
        <a href="data_kawan_ivaa.html">DAFTAR KAWAN IVAA</a>
        <a href="index.php?p=member">AREA ANGGOTA</a>
        <a href="#">LOGIN PUSTAKAWAN</a>
        <a href="perpustakaan.html">VISITOR / BUKU TAMU</a>
        <a href="onlinearchive.html">ONLINE ARCHIVE</a>
        <a></a>
        <a></a>
        <li id="inline" style="list-style-type: none;">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </li>
            </div>

        <span class="area-a" style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776; </span>

    <div class="row h-100" id="kolomkanan">
        <div class="col-md-12">
                  <?php
                        if ($_GET['p'] !== 'show_detail') {
                          echo '';
                          if ($_GET['p'] === 'librarian') {
                            echo '<div class="box area-a" style="margin-top: -200px;">';
                            echo "<h2>PUSTAKAWAN</h2>";
                            echo '<div class="flex flex-row flex-wrap">' . $main_content . '</div>';
                            echo '</div';
                          } else {
                            echo '<div class="box area-a" style="margin-top: -200px;">';
                             echo "<h4>LOGIN PUSTAKAWAN</h4>";
                            echo $main_content;
                            echo '</div>';
                          }
                        } else {
                          echo $main_content;
                        }
                      ?>
                
                

               
                
        </div>
    </div>
  
    </div>


</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
           
        </div>
    </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>