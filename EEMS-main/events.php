<div class="container">
            <div class="col-md-12">
            <hr>
            </div>

<div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                             

                          <img src=" <?php  echo $row['img_link'];?>" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong><?php echo '<td>' . $row['event_title'] . '</td>';?></strong></u></h1><!--title-->
                            <p style="color:#003300  ;font-size:20px "><!--content-->
                            <?php
                            
                           
                            echo 'Date:' . $row['Date'] .'<br>'; 
                            echo 'Time:' . $row['time'] .'<br>'; 
                            echo 'Location:' . $row['location'] .'<br>'; 
                            echo 'Student Co-ordinator:' . $row['st_name'] .'<br>'; 
                            echo 'Staff Co-ordinator:' . $row['name'] .'<br>'; 
                            echo 'ID:' . $row['event_id'] .'<br>';
                    
                        ?>
                            </p>
                            
                            <br><br>
                            <a rel="tooltip"  title="Book" event_id="e<?php echo $row['event_id']; ?>" href="register.php<?php echo '?event_id='. $row['event_id'] ; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Register</i></a>
                                                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
</div>
 </div><!--row div-->