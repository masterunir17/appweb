<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-corporativo-unir-1-122x60.jpg" type="image/x-icon">
  <meta name="description" content="Site Builder Description">
  <title>hoteles</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<?php

/**
 * List all users with a link to edit
 */

require "gdatos/config.php";
require "gdatos/common.php";

try {
  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM hoteles";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
<body>
  <section class="mbr-section info1 cid-qTzdVoeZ1x" id="info1-n">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                    Barcelona</h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                    HOTELES&nbsp;</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="contenido.html"><span class="mbri-undo mbr-iconfont mbr-iconfont-btn"></span>Volver</a></div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.me/u">bootstrap responsive templates</a></section><section class="mbr-section article content1 cid-qTDcucu2Kk" id="content1-16">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7"><p><strong>Barcelona es un lugar lleno de encantos y lugares donde perderse. Todo su patrimonio histórico y artístico no pasa desapercibido por sus visitantes. Esta ciudad te ofrecerá una amplia agenda cultural llena de museos, esculturas al aire libre, exposiciones, y otras actividades como: música, teatro y danza.</strong></p><p><strong>
</strong></p><div><strong>
</strong></div><div><strong>Si decides visitar esta fantástica ciudad, aquí encontrarás algunos de los mejores hoteles de lujo mejor valorados de Barcelona.</strong></div><div><strong><br></strong></div><div><strong>A continuación, los hoteles mas destacados.</strong></div><p></p></div>
        </div>
    </div>
</section>

<section class="features17 cid-qTzdqtK1IP" id="features17-k">
    
    

    
    <div class="container-fluid">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/monument-872x565.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">Monument Hotel</h4>
                        <p class="mbr-text mbr-fonts-style display-7">El Monument Hotel de cinco estrellas, se sitúa en la casa de Eric Batlló, joya arquitectónica del siglo XIX.  Su emblemática arquitectura lo convierte en una opción muy interesante entre los mejores hoteles de Barcelona.
<br>
<br>Este lujoso hotel se encuentra en el Paseo de Gràcia, a cinco minutos escasos de algunas de las obras arquitectónicas de Gaudí como la Casa Batlló y La Pedrera. También está situado muy cerca de la plaza Catalunya y de las Ramblas, una de las zonas favoritas para aquellas personas que quieren alojarse en el centro de Barcelona.
<br>
<br>Todas sus habitaciones están insonorizadas y con opción a balcón. El hotel acoge al reputado restaurante Lasarte, con dos estrellas Michelin que ofrece una cocina mediterránea de diseño. Este hotel es un lugar perfecto para todas aquellas personas que deseen descansar en pleno centro de Barcelona, disfrutar de su gastronomía y, al mismo tiempo encontrarse cerca de los lugares de mayor  interés turístico.</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/palace-872x569.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Hotel Palace GL</h4>
                        <p class="mbr-text mbr-fonts-style display-7">Entre los mejores hoteles de lujo de Barcelona encontramos al Hotel Palace por su trayectoria desde 1919. Con un servicio totalmente personalizado, este Hotel presenta un estilo neoclásico, con elegantes habitaciones, un luxury spa maya y un fabuloso restaurante con una estrella Michelin.
<br>
<br>El Hotel Palace de cinco estrellas está localizado en el Eixample, muy cerca de las Ramblas. Esta zona de gran interés cultural,  ofrece una fabulosa gama de comercios y servicios para aquellos que deseen disfrutar de las mayores comodidades en la ciudad.</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/claris-872x582.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Claris Hotel GI</h4>
                        <p class="mbr-text mbr-fonts-style display-7">El Hotel Claris GI  se ubica en una de las mejores zonas del centro de Barcelona, cerca del conocido Paseo de Gracia y a tan sólo unos minutos de la Avenida Diagonal, la famosa Plaza Catalunya, Las Ramblas y el antiguo Barrio Gótico. Su privilegiada situación nos permitirá acceder a la actividad comercial, cultural y turística de la cosmopolita ciudad de Barcelona.
<br>
<br>Sus habitaciones diseñadas con muebles hechos a manos, disponen de motivos decorativos como obras de arte romanas, egipcias e hindúes. Con un servicio exclusivo se convierte sin duda en uno de los mejores hoteles de Barcelona.</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/wit-872x654.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">The Wittmore Hotel</h4>
                        <p class="mbr-text mbr-fonts-style display-7">Este pequeño pero lujoso hotel de cinco estrellas se ubica en pleno centro de la “ciutat vella” de Barcelona, en el auténtico corazón de la ciudad donde historia, arquitectura, cultura y gastronomía se fusionan para convertirse en una de las localizaciones con mayor atractivo para el visitante. Es una opción excelente para alojarse en Barcelona.
<br>
<br>Este exclusivo hotel situado en la zona baja del barrio gótico nos permitirá descubrir sus alrededores para disfrutar de todo su ambiente. Nos podremos dirigir al barrio del Borne y de la Barceloneta caminando.
<br>El hotel inaugurado hace poco y ambientado en los años 50, dispone de un servicio atento y cercano.
<br>
<br>Te ofrece un restaurante con una exquisita elaboración gastronómica, ático-terraza donde disfrutar de increíbles vistas al casco antiguo de la ciudad y de piscina para refrescarnos durante los días calurosos. Habitaciones con todo lujo de detalles que te permitirán hallar todo el confort y descanso deseado durante tus vacaciones.</p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="section-table cid-qTzdYzCsZj" id="table1-o">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Relacion de Hoteles</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Resumen de los principales hoteles de la ciudad. Clasificados por precio y valoración</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      NOMBRE</th><th class="head-item mbr-fonts-style display-7">
                      DIRECCION</th><th class="head-item mbr-fonts-style display-7">
                      PRECIO MEDIO</th><th class="head-item mbr-fonts-style display-7">
                      UBICACION / ZONA</th><th class="head-item mbr-fonts-style display-7">
                      VALORACION</th></tr>
            </thead>

            <tbody>
              
              <?php foreach ($result as $row) : ?>
              
              
            <tr> 
                
                
			  <td class="body-item mbr-fonts-style display-7"><?php echo escape($row["nombre"]); ?></td><td class="body-item mbr-fonts-style display-7"><?php echo escape($row["direccion"]); ?></td><td class="body-item mbr-fonts-style display-7"><?php echo escape($row["precio"]); ?></td><td class="body-item mbr-fonts-style display-7"><?php echo escape($row["ubicacion"]); ?></td><td class="body-item mbr-fonts-style display-7"><?php echo escape($row["valoracion"]); ?></td>
			  </tr>
			 
			 <?php endforeach; ?>
			  
			  </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>