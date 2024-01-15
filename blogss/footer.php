
  <footer style="background-color:black" id="footer">

    <div style="background-color:black" class="footer-top">
      <div class="container">
        <div class="row"> 

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="color:white">BLOGSS</h3>
            <p style="color:white">
             Adresimiz:<?php echo $ayarcek['ayar_adres'] ?><br>
              <strong>Telefon:</strong> <?php echo $ayarcek['ayar_telefon'] ?><br>
              <strong>Email:</strong> <?php echo $ayarcek['ayar_email'] ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color:white">Sayfalarımız</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a style="color:white" href="index">Anasayfa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:white" href="hakkimizda">Hakkımzıda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:white" href="ekip">Ekibimiz</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:white" href="blog">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:white" href="iletisim">İletişim</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color:white">Kategoriler</h4>
            <ul>
              <?php 

$kategorisor=$baglanti->prepare("SELECT * FROM kategori   order by kategori_sira ASC");
$kategorisor->execute(array());
while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
              <li style="color:white"><i class="bx bx-chevron-right"></i><a style="color:white" href="kategori-detay-<?=seo($kategoricek['kategori_baslik']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_baslik'] ?></a></li> 
           <?php } ?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 style="color:white">E-bültene abone olun</h4>
            <p style="color:white">E-bültene abone olarak anında içeriklerden haberdar olabilirsiniz.</p>
            <form action="admin/islem.php" method="post">
              <input placeholder="Lütfen email giriniz." type="email" name="email">
              <input name="abone" type="submit" value="Abone Ol">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div style="color: white" class="copyright">
          &copy; Tüm Hakları Saklıdır <strong><span> </span></strong> <?php echo date("Y") ?>
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>