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
    <title>Dashboard</title>
   
   <?php include("include/header.php"); ?>
            <!-- Mobile Menu end -->


            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <!-- <i class="icon nalika-home"></i> -->
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Dashboard</h2>
                                                <p>Welcome to <?php echo $_SESSION['LoggedIN']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <!-- <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Total Posts</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                    </div>
                                    <div class="progress progress-mini">
                                        <div style="width: 100%;" class="progress-bar bg-green"></div>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <?php

                                        $totalPosts = mysqli_query($conn, "SELECT * FROM `all_posts`");
                                        $checkPosts = mysqli_num_rows($totalPosts);
                                        if ($checkPosts) {
                                            echo '<h2 class="text-right no-margin">'.$checkPosts.'</h2>';
                                        }else{
                                            echo '<h2 class="text-right no-margin">0</h2>';
                                        }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Total Comments</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                    </div>
                                    <div class="progress progress-mini">
                                        <div style="width: 100%;" class="progress-bar bg-blue"></div>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php

                                        $totalCMT = mysqli_query($conn, "SELECT * FROM `comments`");
                                        $checkCMT = mysqli_num_rows($totalCMT);
                                        if ($checkCMT) {
                                            echo '<h2 class="text-right no-margin">'.$checkCMT.'</h2>';
                                        }else{
                                            echo '<h2 class="text-right no-margin">0</h2>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Total Contacts</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                    </div>
                                    <div class="progress progress-mini">
                                        <div style="width: 100%;" class="progress-bar bg-purple"></div>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         <?php

                                        $totalCNT = mysqli_query($conn, "SELECT * FROM `contacts`");
                                        $checkCNT = mysqli_num_rows($totalCNT);
                                        if ($checkCNT) {
                                            echo '<h2 class="text-right no-margin">'.$checkCNT.'</h2>';
                                        }else{
                                            echo '<h2 class="text-right no-margin">0</h2>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Total Category</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                    </div>
                                    <div class="progress progress-mini">
                                        <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red"></div>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <?php

                                        $totalCATE = mysqli_query($conn, "SELECT * FROM `cate_manager`");
                                        $checkCATE = mysqli_num_rows($totalCATE);
                                        if ($checkCATE) {
                                            echo '<h2 class="text-right no-margin">'.$checkCATE.'</h2>';
                                        }else{
                                            echo '<h2 class="text-right no-margin">0</h2>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-status mg-b-30" style="margin-top: 2rem;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Top 5 Recents Posts</h4>
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

                        $query = mysqli_query($conn, "SELECT * FROM `all_posts` ORDER BY post_id DESC LIMIT 5");
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
                                        <a href="publish-post.php?updateID=<?php echo $row['post_id'] ?>"><button data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <a href="include/function.php?delPost=<?php echo $row['post_id'] ?>"><button data-toggle="tooltip" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                                    </td>
                                </tr>

                        <?php
                            }
                        }else{
                            echo "Posts Not available";
                        }

                        ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Top 3 Recents Comments</h4>

                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                                <?php

                                $query = mysqli_query($conn, "SELECT * FROM `comments` ORDER BY id LIMIT 3");
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
                                            echo '<button class="btn btn-info"><small>Pending</small></button>';
                                        }

                                        ?>                                        
                                    </td>
                                    <td>
                                        <a href="include/function.php?cmtApp=<?php echo $cmt['id']; ?>"><button data-toggle="tooltip" class="btn btn-success"><i class="fa fa-check"></i> Approve</button></a>
                                        <a href="include/function.php?delCMT=<?php echo $cmt['id']; ?>"><button data-toggle="tooltip" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                                    </td>
                                </tr>
                                 
                                 <?php
                                        }
                                        
                                    }else{
                                        echo "Comments are not available";
                                    }

                                ?>

                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php include("include/footer.php"); ?>