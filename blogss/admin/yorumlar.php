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
                         Ad soyad
                      </th>
                      <th >
                         Detay
                       </th>
                     
                    <th></th>
                         
                  </tr>
              </thead>
              <tbody>

                <?php

$yorumlarsor=$baglanti->prepare("SELECT * FROM yorumlar  where yorum_onay=:yorum_onay");
$yorumlarsor->execute(array(
'yorum_onay'=>0
));
while ($yorumlarcek=$yorumlarsor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
                  <tr>
                      <td>
                          <?php echo $yorumlarcek['yorum_adsoyad'] ?>
                      </td>
                      <td>
                          <a>
                             <?php echo $yorumlarcek['yorum_detay'] ?>
                          </a>
                          <br/>
                          <small>
                        <?php echo $yorumlarcek['yorum_zaman'] ?>
                          </small>
                      </td>
                      
                      
               
                      <td class="project-actions text-right">
                           <a class="btn btn-success btn-sm" href="islem.php?yorumonayla&id=<?php echo $yorumlarcek['yorum_id'] ?>">
                              <i class="fas fa-plus">
                              </i>
                              Onayla
                          </a>
                             <a class="btn btn-danger btn-sm" href="islem.php?yorumsil&id=<?php echo $yorumlarcek['yorum_id'] ?>">
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