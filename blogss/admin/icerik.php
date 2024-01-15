<?php require_once 'header.php';
require_once 'sidebar.php';
$iceriksor=$baglanti->prepare("SELECT * FROM icerik where kategori_id=:kategori_id   order by icerik_sira ASC");
$iceriksor->execute(array(
'kategori_id'=>$_GET['katid']
));

 
 ?>



  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
       <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">İşlem başarılı</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">İşlem başarısız</p>

<?php }  ?>
          <div class="col-12">
            <div class="card">          
              <div class="card-header">
                <h3 class="card-title">Kategori</h3>
                <a href="icerik-ekle.php?katid=<?php echo $_GET['katid'] ?>">
<button style="float:right" type="submit" class="btn btn-info">Yeni içerik ekle</button></a>
           <!-- 
     <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
           -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Kategori Resim</th>
                       <th>Kategori Başlık</th>
                      <th>Kategori Sıra</th>
                    
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 

while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>
         
                    <tr>
                      <td><img style="width:150px" src="resimler/icerik/<?php echo $icerikcek['icerik_resim'] ?>"></td>
                          <td><?php echo $icerikcek['icerik_baslik'] ?></td>
                      <td><?php echo $icerikcek['icerik_sira'] ?></td>
                     
                    
                      <td><a href="icerik-duzenle.php?id=<?php echo $icerikcek['icerik_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="iceriksil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $icerikcek['icerik_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $icerikcek['icerik_resim'] ?>" type="hidden">

                                  <input name="katid" value="<?php echo $icerikcek['kategori_id'] ?>" type="hidden">
                           </form>


                        </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
 
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>