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
          <h3 class="card-title">Aboneler</h3><br>
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
                         İd
                      </th>
                      <th >
                          Email
                       </th>
                    
                    <th></th>
                         
                  </tr>
              </thead>
              <tbody>

                <?php

$abonesor=$baglanti->prepare("SELECT * FROM abone   order by abone_id ASC");
$abonesor->execute(array());
while ($abonecek=$abonesor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
                  <tr>
                      <td>
                          <?php echo $abonecek['abone_id'] ?>
                      </td>
                   
                       <td>
                          <?php echo $abonecek['abone_email'] ?>
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