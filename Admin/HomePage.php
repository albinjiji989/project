<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
?>
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                            <a href="HomePage.php?did">
                                <p class="mb-2">Total <br> Users</p></a>
                                <?php
                                
$selQry="select coalesce(count(*),0) as user from tbl_user";
$row=$con->query($selQry);
$data=$row->fetch_assoc();
                                ?>
                                <h6 class="mb-0"><?php echo $data["user"] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                            <a href="HomePage.php?cid">
                                <p class="mb-2">Total<br> Trainers</p></a>
                                <?php
$selQr="select coalesce(count(*),0) as train from tbl_trainer where trainer_status=1";
$row1=$con->query($selQr);
$data1=$row1->fetch_assoc();
                                ?>
                                <h6 class="mb-0"><?php echo $data1["train"] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                            <a href="HomePage.php?bid">
                                <p class="mb-2">Total <br> Nutritionists</p></a>
                                <?php
$selQ="select coalesce(count(*),0) as nut from tbl_nutrition where nutrition_status=1";
$row2=$con->query($selQ);
$data2=$row2->fetch_assoc();
                                ?>
                                <h6 class="mb-0"><?php echo $data2["nut"] ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


                       <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">User List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                   
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date of Registration</th>
                                    <th scope="col">Contact</th>
                                    
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
 <?php
if(isset($_GET["did"]))
{
$selU="select * from tbl_user";
$rowU=$con->query($selU);
while($dataU=$rowU->fetch_assoc())
{
                                ?>
                                <tr>
                                  
                                    <td><?php  echo $dataU["user_name"]?></td>
                                    <td><?php  echo $dataU["user_email"]?></td>
                                    <td><?php  echo $dataU["user_date"]?></td>
                                    <td><?php  echo $dataU["user_contact"]?></td>
                                    
                                </tr>
                               <?php
}
}
                               ?>
 <?php
if(isset($_GET["cid"]))
{
$selU="select * from tbl_trainer";
$rowU=$con->query($selU);
while($dataU=$rowU->fetch_assoc())
{
                                ?>
                                <tr>
                                  
                                    <td><?php  echo $dataU["trainer_name"]?></td>
                                    <td><?php  echo $dataU["trainer_email"]?></td>
                                    <td><?php  echo $dataU["trainer_date"]?></td>
                                    <td><?php  echo $dataU["trainer_contact"]?></td>
                                    
                                </tr>
                               <?php
}
}
                               ?>
 <?php
if(isset($_GET["bid"]))
{
$selU="select * from tbl_nutrition";
$rowU=$con->query($selU);
while($dataU=$rowU->fetch_assoc())
{
                                ?>
                                <tr>
                                  
                                    <td><?php  echo $dataU["nutrition_name"]?></td>
                                    <td><?php  echo $dataU["nutrition_email"]?></td>
                                    <td><?php  echo $dataU["nutrition_date"]?></td>
                                    <td><?php  echo $dataU["nutrition_contact"]?></td>
                                    
                                </tr>
                             <?php
}
}
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            

          <?php
include("Foot.php");
ob_flush();
?>