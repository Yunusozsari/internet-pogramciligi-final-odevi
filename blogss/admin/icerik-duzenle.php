<?php
require_once 'header.php';
require_once 'sidebar.php';

$iceriksor=$baglanti->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
'icerik_id'=>$_GET['id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
 ?>

<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">İçerik</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                         <div class="form-group">
                    <label for="exampleInputEmail1">İçerik Resim</label>
                    <img style="width:150px" src="resimler/icerik/<?php echo $icerikcek['icerik_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">İçerik Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">İçerik başlık</label>
                    <input value="<?php echo $icerikcek['icerik_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık  giriniz.">
                  </div> 
        <input type="hidden" name="katid" value="<?php echo $icerikcek['kategori_id'] ?>">
                    <div class="form-group">
                    <label for="exampleInputEmail1">İçerik sıra</label>
                    <input value="<?php echo $icerikcek['icerik_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">İçerik Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor">
                    	<?php echo $icerikcek['icerik_aciklama'] ?> 
                    </textarea>
                  </div> 
                   
                  <input type="hidden" name="id" value="<?php echo $icerikcek['icerik_id'] ?>">

                      <div class="form-group">
                    <label for="exampleInputEmail1">İçerik anahtar kelime</label>
                    <input value="<?php echo $icerikcek['icerik_anahtarkelime'] ?>" name="icerikanahtar"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime  giriniz.">
                  </div> 
                   
                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="icerikduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>






 <?php require_once 'footer.php'; ?>