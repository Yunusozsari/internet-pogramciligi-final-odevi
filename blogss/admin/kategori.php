<?php require_once 'header.php'; 
require_once 'sidebar.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">kategoriler</h3><br>
          <?php if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">İşlem başarılı</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">İşlem başarısız</p>

<?php }  ?>
          <div class="card-tools">
             <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">

          <table class="table table-striped projects">
              <thead>

                  <tr>
                      <th >
                         Sıra
                      </th>
                      <th >
                          Başlık
                       </th>
                      <th >
                          Durum
                      </th>
                    <th></th>
                           <a href="ekle.php?sayfa=kategori"> <button style="float:right" class="btn btn-info ">Yeni ekle</button></a>
                  </tr>
              </thead>
              <tbody>

                <?php

$kategorisor=$baglanti->prepare("SELECT * FROM kategori   order by kategori_sira ASC");
$kategorisor->execute(array());
while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
                  <tr>
                      <td>
                          <?php echo $kategoricek['kategori_sira'] ?>
                      </td>
                      <td>
                          <a>
                             <?php echo $kategoricek['kategori_baslik'] ?>
                          </a>
                          <br/>
                          
                      </td>
                      
                      
                      <td >
                           <?php if ($kategoricek['kategori_durum']=="1") { ?>
                   <span class="badge badge-success">Aktif</span>

                      <?php     }else{  ?>
                                           <span class="badge badge-danger">Pasif</span>
<?php } ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="icerik.php?katid=<?php echo $kategoricek['kategori_id'] ?>">
                              <i class="fas fa-folder">
                              </i>
                              Görüntüle
                          </a>
                          <a class="btn btn-success btn-sm" href="duzenle.php?sayfa=kategori&id=<?php echo $kategoricek['kategori_id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Düzenle
                          </a>
                          <a class="btn btn-danger btn-sm" href="islem.php?kategorisil&id=<?php echo $kategoricek['kategori_id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Sil
                          </a>
                      </td>
                  </tr>
                  
                <?php } ?>
                  
              
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once 'footer.php'; ?>