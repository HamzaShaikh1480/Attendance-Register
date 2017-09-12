<?php require("header.php"); ?>


<?php 

require ("conn.php");

$sql  = "SELECT * FROM userdata";

$result  = mysqli_query($con, $sql);



?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All User Information </h3>
              </div>

             
            </div>

            <div class="clearfix"></div>
              

               <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>WhatsApp Number</th>
                        </tr>
                      </thead>


                      <tbody>
                        
<?php while($row = mysqli_fetch_array($result) ):;?>

                        <tr>
                          <th> <?php echo $row['id'] ?> </th>
                          <td><?php echo $row['u_name'] ?></td>
                          <td><?php echo $row['u_number'] ?></td>
                        </tr>
                        
<?php endwhile;?>

                      </tbody>
                    </table>





            
          </div>
        </div>
        <!-- /page content -->

<?php require("footer.php"); ?>