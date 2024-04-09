<?php

SESSION_START();
require("include/db-conn.php");

if (!isset($_SESSION['LoggedIN'])) {
    header("location: login.php");
}

if (isset($_GET['editCate'])) {
   $editCate = mysqli_real_escape_string($conn, $_GET['editCate']);

   if (!empty($editCate)) {
      $query = mysqli_query($conn, "SELECT * FROM cate_manager WHERE id='$editCate' LIMIT 1");
      $checkQuery = mysqli_num_rows($query);
      if ($checkQuery) {
        while ($row = mysqli_fetch_array($query)) {
            $cate_name = $row['cate_name'];
            $cateType = $row['cate_for'];
        }
          
      }else{
        header("location: cate-manager.php");
      }
   }else{
    header("location: cate-manager.php");
   }

}


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Category Manager | ChandanCodes</title>

    <?php include("include/header.php"); ?>
    
        <!-- Mobile Menu end -->
        
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Category</h4>
                            <center><strong>
                                <?php

                                if (isset($_SESSION['errorMSG'])) {
                                   echo $_SESSION['errorMSG'];
                                   unset($_SESSION['errorMSG']);
                                }

                                ?>                                

                            </strong></center>
                            <div class="add-product">
                              <form class="form-group d-flex" action="include/function.php" method="post">
                                <input type="text" class="form-control" name="cateName" placeholder="Category Name" value="<?php if (isset($_GET['editCate'])) { echo $cate_name; } ?>">
                                <br>
                                <select class="form-control" name="cateType">
                                    <?php

                                    if (isset($_GET['editCate'])) {
                                        echo '<option value='.$cateType.'>'.$cateType.'</option>';

                                    }else{
                                        echo "<option>--Category Type--</option>";
                                    }


                                    ?>
                                  
                                  <option value="menu , cate">Menu & Category</option>
                                  <option value="cate">Only Category</option>                                  
                                </select>
                                <br>
                                <?php

                                if (isset($_GET['editCate'])) {
                                    echo '<button class="btn btn-success" name="editCate_BTN" value='.$editCate.'>Update</button>';

                                }else{
                                    echo '<button class="btn btn-success" name="addCate">Add New</button>';
                                }

                                ?>                                
                              </form>                                
                            </div>
                            <table>
                                <tr>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                <?php

                                $cateQuery = mysqli_query($conn, "SELECT * FROM cate_manager");
                                $checkCate = mysqli_num_rows($cateQuery);
                                if ($checkCate) {
                                    while ($cRow = mysqli_fetch_array($cateQuery)) {
                                ?>
                                <tr>
                                    <td><?php echo $cRow['cate_name']; ?></td>
                                    <td><?php echo $cRow['cate_for']; ?></td>
                                    <td>
                                        <a href="cate-manager.php?editCate=<?php echo $cRow['id']; ?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        <a href="include/function.php?delCate=<?php echo $cRow['id']; ?>"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                                <?php

                                    }
                                
                                }else{
                                    echo "Category not available";
                                }

                                ?>

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