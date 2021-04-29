     <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  

  <!-- Edit -->
    <div class="modal fade" id="nilai<?php echo $row['id_participant']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                     <center><h4 class="modal-title" id="myModalLabel">Nilai</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   
                </div>
                <div class="modal-body">
                <?php

                    $edit=mysqli_query($conn,"SELECT * FROM   participant  WHERE id_participant ='".$row['id_participant']."'");
                    $erow=mysqli_fetch_array($edit);


                    $idpart = $erow["id_participant"];


       
              
                ?>
                <div class="container-fluid">
                <form method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="id_participant" value="<?= $erow["id_participant"]; ?>">
                       <div class="form-group">
                                                       <b> <label>Nama : <?= $erow["nama_participant"]; ?></label> </b>
                                                    
                                                    </div>

                                                     <div class="form-group">
                                                       <table class="table" id="tabel-data">
  <thead>

    <tr>
      <th scope="col" class="text-center">No,</th>
      <th scope="col" class="text-center">Quiz</th>
      <th scope="col" class="text-center">Score</th>
      <th scope="col" class="text-center">Date</th>
    </tr>
  </thead>
  <tbody>
       <?php
        $yws = mysqli_query($conn,"SELECT * FROM  gb_answer  WHERE id_participant = $idpart");
        $i = 1;
  foreach( $yws as $row ) {
    ?>

    <tr>
      <th scope="row" class="text-center"><?= $i; ?></th>
      <td class="text-center"><?= $row["question"]; ?></td>
      <td class="text-center"><?= $row["score"]; ?></td>
      <td class="text-center"><?= $row["date"]; ?></td>
    </tr>
      <?php $i++; ?>
  <?php } ?>
   
  </tbody>
      <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
</table>
                                                    
                                                    </div>


                                               



                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                  
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- /.modal -->

  <?php
include('./../temp/staff/scripts.php');
?>