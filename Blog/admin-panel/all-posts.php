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
    <title>All Posts | Blogs</title>

    <?php include("include/header.php"); ?>
    
        <!-- Mobile Menu end -->
        
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>All Posts</h4>
                            <span></span>
                            <center><strong>
                                <?php

                                if (isset($_SESSION['errorMSG'])) {
                                   echo $_SESSION['errorMSG'];
                                   unset($_SESSION['errorMSG']);

                                }

                                ?>                                

                            </strong></center>
                            <div class="add-product">
                                <a href="publish-post.php">Add Post</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>

                        <?php

                        $query = mysqli_query($conn, "SELECT * FROM `all_posts`");
                        $checkQuery = mysqli_num_rows($query);
                        if ($checkQuery) {
                            while ($row = mysqli_fetch_array($query)) {

                        ?>
                                <tr>
                                    <td><img src="<?php echo $row['banner']; ?>" alt="" /></td>
                                    <td><a href="<?php echo $row['slug']; ?>" target='_blank'><?php echo $row['title']; ?></a></td>
                                    <td>
                                        <?php

                                        if ($row['status']=="1") {
                                            echo '<button class="pd-setting">Active</button>';
                                        }else{
                                            echo '<button class="ds-setting">Inactive</button>';
                                        }

                                        ?>
                                        
                                    </td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td>
                                        <a href="publish-post.php?updateID=<?php echo $row['post_id'] ?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        <a href="include/function.php?delPost=<?php echo $row['post_id'] ?>"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>

                        <?php
                            }
                        }else{
                            echo "Posts Not available";
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