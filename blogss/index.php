<?php require_once 'header.php'; ?>

  <section style="background-image:url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>)" id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1><?php echo $slidercek['slider_baslik'] ?></h1>
      <h2><?php echo $slidercek['slider_aciklama'] ?></h2>
      <a target="_blank" href="<?php echo $slidercek['slider_link'] ?>" class="btn-get-started"><?php echo $slidercek['slider_buton'] ?></a>
    </div>
  </section>



  <main id="main">

  
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php 

      $blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC limit 12 ");
$blogsor->execute(array());

while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {  ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img style="height:250px" src="Admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" class="img-fluid" alt="...">
              <div class="course-content">
               

                <h3><a href="blog-detay-<?=seo($blogcek['blog_baslik']).'-'.$blogcek['blog_id'] ?>"><?php echo $blogcek['blog_baslik'] ?></a></h3>
                <p><?php 
                     $aciklama=$blogcek['blog_aciklama'];
                     $bolaciklama=substr($aciklama, 0,50);

                       echo $bolaciklama;
                 ?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
<?php } ?>
        

        

        </div>

      </div>
    </section><!-- End Courses Section -->

 

  <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php
 
$galerisor=$baglanti->prepare("SELECT * FROM galeri order by galeri_sira ASC limit 12 ");
$galerisor->execute(array());
while ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {
 ?>
          <div style="margin-top:10px" class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="course-item">
              <img src="admin/resimler/galeri/<?php echo $galericek['galeri_resim'] ?>" class="img-fluid" alt="...">
              
            </div>
          </div> <!-- End Course Item-->

          
<?php } ?>
        

        </div>

      </div>
    </section><!-- End Courses Section -->
  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>