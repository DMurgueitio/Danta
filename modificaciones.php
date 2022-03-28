<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FYPX81JMET"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FYPX81JMET');
</script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dantaventura</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.6.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="col-md-12 d-inline-flex  mb-3 Primero ">
      <form action="" method="POST">
        <table class="table table-hover"> 
            <thead>
                <tr>
                    <th>Categoria</th>
                </tr>
            </thead>

            <tbody>
                <tr><th>Modificar Informacion Sobre La Danta              </th><td><input type="text" name="danta" class="form-control mt-6" placeholder="Sobre la Danta">          </tr></td>
                <tr><th>Modificar Informacion sobre La Historia           </th><td><input type="text" name="historia" class="form-control mt-6" placeholder="Historia" >               </tr></td>
                <tr><th>Modificar Informacion Sobre Donde Queda Ubicada   </th><td><input type="text" name="quien" class="form-control mt-6" placeholder="Donde queda Ubicada">     </tr></td>
                <tr><th>Modificar Informacion Sobre Como LLegar           </th><td><input type="text" name="como" class="form-control mt-6" placeholder="Como Llegar" >            </tr></td>
                <tr><th>Modificar Informacion Sobre Atractivos Turisticos </th><td><input type="text" name="atractivo" class="form-control mt-6" placeholder="Atractivos Turisticos">   </tr></td>
            </tbody>
        </table>
      </form>
    </div>
    <?php
      @$danta    = $_POST["danta"];
      @$historia = $_POST["historia"];
      @$quien    = $_POST["quien"];
      @$como     = $_POST["como"];
      @$atrac    = $_POST["atractivo"];
      @$tabla = "categoria";
      @$datos = array("danta"=>$_POST["danta"],
              "historia"=>$_POST["historia"],
              "quien"=>$_POST["quien"],
              "como"=>$_POST["como"],
              "atractivo"=>$_POST["atractivo"]);
    ?>
</body>
</html>