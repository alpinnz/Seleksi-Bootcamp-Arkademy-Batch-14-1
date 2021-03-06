<?php 
    include 'API/koneksi.php';
    $koneksi->close();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-4.4.1/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <title>{Arkademy}</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand ml-5 mr-5" href="#">
                <img src="assets/img/logo.png" height="40" alt="logo">
                <a href="#" class="navbar-brand font-weight-bold text-pink">ARKADEMY</a>
                <a href="#" class="navbar-brand font-weight-bold text-dark">COFEE SHOP</a>
            </a>
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item">
                    <a class="nav-link btn btn-danger pl-4 pr-4" href="#" data-toggle="modal" data-target="#add">ADD</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="content mt-5">
        <div class="container">
            <table class="table table-hover text-center border-radius shadow-lg">    
                <thead class="bg-secondary text-white font-weight-bold" style="font-size: large">
                    <tr>
                        <th class="pt-4 pb-4" scope="col">No</th>
                        <th class="pt-4 pb-4" scope="col">Cashier</th>
                        <th class="pt-4 pb-4" scope="col">Product</th>
                        <th class="pt-4 pb-4" scope="col">Category</th>
                        <th class="pt-4 pb-4" scope="col">Price</th>
                        <th class="pt-4 pb-4" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                            include 'API/koneksi.php';
                            $sql = "SELECT
                                Product.id AS id_product,
                                Cashier.id AS id_cashier,
                                Cashier.name AS cashier, 
                                Product.name AS product, 
                                Category.name AS category, 
                                Product.price AS price
                                FROM Product 
                                INNER JOIN Category ON Product.id_category = Category.id 
                                INNER JOIN Cashier ON Product.id_cashier = Cashier.id";
                            $result = $koneksi->query($sql);
                            
                            foreach($result as $res){
                        ?>      
                    <tr>    
                        <th scope="row"><?php echo $res["id_product"]; ?></th>
                        <td><?php echo $res["cashier"]; ?></td>
                        <td><?php echo $res["product"]; ?></td>
                        <td><?php echo $res["category"]; ?></td>
                        <td>Rp. <?php echo $res["price"];  ?></td>
                        <td>
                            <a class="btn text-green"  href="#" data-toggle="modal"
                                data-target="#edit-<?php echo $res["id_product"]; ?>">
                                Edit
                            </a>
                            <!-- Modal Edit -->
                                <div class="modal fade" id="edit-<?php echo $res["id_product"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog mt-5" role="document">
                                        <div class="modal-content border-radius">
                                            <div class="modal-header">
                                                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">EDIT</h5>
                                                <button type="button" class="close text-pink" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <form action="API/update.php" method="POST">
                                                        <input type="hidden" class="form-control" name="Id" value="<?php echo $res["id_product"];  ?>" required>
                                                        <div class="form-group">
                                                            <label></label>
                                                            <select class="form-control" name="Cashier">
                                                            <?php 
                                                            include 'API/koneksi.php';
                                                                $sqlCashier = "SELECT * FROM Cashier";
                                                                $resultCashier = $koneksi->query($sqlCashier);
                                                                
                                                                foreach($resultCashier as $resCashier){
                                                            ?>                                                            
                                                                <option value="<?php echo $resCashier["id"]; ?>"><?php echo $resCashier["name"]; ?></option>         
                                                            <?php   
                                                                }
                                                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label></label>
                                                            <input type="text" class="form-control" name="Product" value="<?php echo $res["product"]; ?>" placeholder="Ice Tea" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label></label>
                                                            <select class="form-control" name="Category" required>
                                                                <?php 
                                                                include 'API/koneksi.php';
                                                                    $sqlCategory = "SELECT * FROM Category";
                                                                    $resultCategory = $koneksi->query($sqlCategory);
                                                                    
                                                                    foreach($resultCategory as $resCategory){
                                                                ?>                                                            
                                                                    <option value="<?php echo $resCategory["id"]; ?>"><?php echo $resCategory["name"]; ?></option>         
                                                                <?php   
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label></label>
                                                            <input type="text" class="form-control" name="Price" value="<?php echo $res["price"];  ?>" placeholder="RP.10.000" required>
                                                        </div>
                                                        <div class="modal-footer no-border">
                                                            <input type="submit" name="submitEDIT" class="btn btn-danger pl-4 pr-4" value="EDIT" required>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            |
                            <a class="btn text-pink" href="API/delete.php?id_product=<?php echo $res["id_product"]; ?>">Delete</a>
                            <!-- <button type="button" class="btn text-pink" data-toggle="modal"
                                data-target="#delete-<?php echo $res["id_product"]; ?>">Delete</button> -->
                            <!-- Modal Delete -->
                                <div class="modal fade" id="delete-<?php echo $res["id_product"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog mt-5" role="document">
                                        <div class="modal-content border-radius">
                                            <div class="modal-header">
                                                <button type="button" class="close text-pink" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="text-center mb-1 font-weight-bold">
                                                        <h4 class="mb-2">
                                                            Data <?php echo $res["cashier"]; ?> ID <spam class="text-pink">#<?php echo $res["id_cashier"]; ?></spam>
                                                        </h4>
                                                        <img src="assets/img/cropped-centang.png" style="height: 300px;"
                                                            class="rounded mx-auto d-block mb-1" alt="...">
                                                        <h3>
                                                            Berhasil Dihapus!
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                    </tr>
                        <?php 
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Modal Add -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-5" role="document">
            <div class="modal-content border-radius">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">ADD</h5>
                    <button type="button" class="close text-pink" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="API/create.php" method="POST">
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" name="Cashier" required>
                                    <?php 
                                        include 'API/koneksi.php';
                                            $sqlCashier = "SELECT * FROM Cashier";
                                            $resultCashier = $koneksi->query($sqlCashier);
                                            
                                            foreach($resultCashier as $resCashier){
                                        ?>                                                            
                                            <option value="<?php echo $resCashier["id"]; ?>"><?php echo $resCashier["name"]; ?></option>         
                                        <?php   
                                            }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" name="Product" placeholder="Ice Tea" required>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" name="Category" required>
                                    <?php 
                                        include 'API/koneksi.php';
                                            $sqlCategory = "SELECT * FROM Category";
                                            $resultCategory = $koneksi->query($sqlCategory);
                                            
                                            foreach($resultCategory as $resCategory){
                                        ?>                                                            
                                            <option value="<?php echo $resCategory["id"]; ?>"><?php echo $resCategory["name"]; ?></option>         
                                        <?php   
                                            }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" name="Price" placeholder="RP.10.000" required>
                            </div>
                            <div class="modal-footer no-border">
                                <input type="submit" class="btn btn-danger pl-4 pr-4" name="submitADD" value="ADD">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap-4.4.1/js/bootstrap.min.js"></script>
</body>

</html>