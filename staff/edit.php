  <!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id_participant']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                     <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   
                </div>
                <div class="modal-body">
                <?php

                    $edit=mysqli_query($conn,"select * from participant where id_participant='".$row['id_participant']."'");
                    $erow=mysqli_fetch_array($edit);


       
              
                ?>
                <div class="container-fluid">
                <form method="POST" action="ekat.php" enctype="multipart/form-data">
                <input type="hidden" name="id_participant" value="<?= $erow["id_participant"]; ?>">
                       <div class="form-group">
                                                        <label>ID</label>
                                                        <input class="form-control" type="text"  name="id_participant" value="<?php echo $erow['id_participant']; ?>" disabled />
                                                    </div>

                                                     <div class="form-group">
                                                        <label>Nama</label>
                                                        <input class="form-control" type="text"  name="nama_participant" value="<?php echo $erow['nama_participant']; ?>" disabled />
                                                    </div>

                                                      <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" type="text"  name="email_participant" value="<?php echo $erow['email_participant']; ?>"  />
                                                    </div>
                                                       <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" type="text"  name="pass_participant" value="<?php echo $erow['pass_participant']; ?>"  />
                                                    </div>

                                                        <div class="form-group">
                                                    <label>Akses Student</label>
                                                    <select id="inputState" class="form-control" name="akses_participant">

                                                        <?php
                                                        $akses =  $erow["akses_participant"];

                                                        if ($akses==null) { ?>
                                                            <option selected>Null</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>

                                                     <?php   }else{ ?>

                                                         <option selected value="<?= $erow["akses_participant"]; ?>"><?= $erow["akses_participant"]; ?></option>
                                                             <option value="0">0</option>
                                                             <option value="1">1</option>

                                                             <?php
                                                         


                                                    }

                                                        ?>



                                                    </select>
                                                </div>



                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit"  class="btn btn-warning" name="ubahkater"><span class="glyphicon glyphicon-check" n></span> Ubah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- /.modal -->
