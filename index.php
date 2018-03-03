<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Format.php'; ?>

<?php 
      $db=new Database();
      $fm= new Format();

?>


<?php include 'inc/header.php' ; ?>



                       <!--END Heading-->

            <div class="container NewsEvent">
              <div class="row">


                <div class="col-lg-7">
                  <h3 class="text-center">NEWS & EVENTS <i class="fas fa-user-circle"></i></h3>
                  <!-- <img src="image/s2.jpg" class="img-fluid img-thumbnail" alt="Responsive image"> -->
                  
                  <section class="variable slider">

                    
                      <div>
                        <img src="image/s1.jpg" width="350" height="285" >
                      </div>
                      <div>
                        <img src="image/s2.jpg" width="350" height="285" >
                      </div>
                      <div>
                        <img src="image/s3.jpg" width="350" height="285" >
                      </div>
                      <div>
                        <img src="image/s1.jpg" width="350" height="285" >
                      </div>
                      <div>
                        <img src="image/s3.jpg" width="350" height="285" >
                      </div>
                      <div>
                        <img src="image/s2.jpg" width="350" height="285" >
                      </div>
                    </section>

                  
                  <p>The Department of Computer Science and Engineering is one of the pioneering educational institutions in and outside of the university. The long list of achievements ranging from organization of premium research conferences and <a href="#" >Read more</a>  </p>

                </div>

               

                

                  <div class="col-lg-5">
                  <h3 class="text-center">NOTICE </h3>
                  
               

                    <div class="list-group">

                      <?php 

                          $sql="SELECT title,date FROM tbl_notice";
                          $notice= $db->select($sql);
                          if ($notice) {
                            while ($result=$notice->fetch_assoc() ) {
                              
                            
                         


                       ?>
                      <a href="notice.php?id=<?php echo $result['id'] ?>" class="list-group-item list-group-item-secondary"><?php echo $result['title']; ?> <?php echo $fm->formatDate($result['date']); ?></a>
                      <a href="notice.php" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $result['title']; ?></a>
                      <a href="notice.php" class="list-group-item list-group-item-action list-group-item-success"><?php echo $result['title']; ?></a>





                      
                      
                      <!-- 
                      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary list group item</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a> -->
                      
                    </div>

                    <?php } ?> <!--End While loop-->

                    <?php  } else{ header("Location:Login.php");}?>
                
                 </div>

              </div>
            </div>


         



            <!--End News Event-->


            <section class="result container">
              <div class="row">
                <div class="col-lg-3">
                  <div class="div1">
                    <div class="icon_text">
                      <i class="fas fa-book"></i>
                      <h3><a href="#">Study Materials</a></h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="div1">
                    <div class="icon_text">
                      <i class="fas fa-pencil-alt"></i>
                      <h3><a href="#">Class Materials</a></h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="div1">
                    <div class="icon_text">
                      <i class="fas fa-newspaper"></i>
                      <h3><a href="#">Academic Calendar</a></h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="div1">
                    <div class="icon_text">
                      <i class="fas fa-sticky-note"></i>
                      <h3><a href="#">Result</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </section>

  


<?php include 'inc/footer.php' ; ?>