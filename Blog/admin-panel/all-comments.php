<?php

SESSION_START();
require("include/db-conn.php");

if (!isset($_SESSION['LoggedIN'])) {
    header("location: login.php");
}


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All Comments | Blogs</title>

    <?php include("include/header.php"); ?>
    
        <!-- Mobile Menu end -->
        
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Comments</h4>
                            <center><strong>
                                <?php

                                if (isset($_SESSION['errorMSG'])) {
                                   echo $_SESSION['errorMSG'];
                                   unset($_SESSION['errorMSG']);

                                }

                                ?>                                

                            </strong></center>

                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                                <?php

                                $query = mysqli_query($conn, "SELECT * FROM `comments`");
                                $checkQuery = mysqli_num_rows($query);
                                if ($checkQuery) {
                                    while ($cmt = mysqli_fetch_array($query)) {
                                        
                                ?>
                                <tr>
                                    <td><?php echo $cmt['name']; ?></td>
                                    <td><?php echo $cmt['email']; ?></td>
                                    <td><textarea class="form-control" rows="1.5"><?php echo $cmt['message']; ?></textarea></td>
                                    
                                    <td>
                                        <?php

                                        if ($cmt['status'] == '1') {
                                            echo '<button class="btn btn-success">Active</button>';
                                        }else{
                                            echo '<button class="btn btn-danger">Pending</button>';
                                        }

                                        ?>                                        
                                    </td>
                                    <td>
                                        <a href="include/function.php?cmtApp=<?php echo $cmt['id']; ?>"><button data-toggle="tooltip" class="btn btn-success"><i class="fa fa-check"></i> Approve</button></a>
                                        <a href="include/function.php?delCMT=<?php echo $cmt['id']; ?>"><button data-toggle="tooltip" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Trash</button></a>
                                    </td>
                                </tr>
                                 
                                 <?php
                                        }
                                        
                                    }else{
                                        echo "Comments are not available";
                                    }

                                ?>

                                
                            </table>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include("include/footer.php"); ?>