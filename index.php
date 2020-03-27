<?php
session_start();

$mysqli = new mysqli("localhost","root","","date_sorting");
$sql = "SELECT * FROM data ";
$data = mysqli_query($mysqli,$sql);
$query = "SELECT * FROM data";
$query_run = mysqli_query($mysqli,$query);
$debit= 0;
$credit = 0;
while ($deb = mysqli_fetch_assoc ($query_run)) {
    $debit += $deb['debit'];
    $credit += $deb['credit'];
}
$current = $debit - $credit;

if($_SESSION){
    $data = $_SESSION['data'];
    $debit = 0;
    $credit = 0;
  foreach($_SESSION['data'] as $x){
    $debit += $x['debit'];
    $credit += $x['credit'];
  }
  $current = $debit - $credit;
}
session_destroy();


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Date Range</title>
  </head>
  <body>

    <div class="container-fluid">
       <div class="date-range-picker">
            <div class="row">
                <div class="col-xl-8 col-md-12 offset-xl-2 mb-5">
                    <h2 class="text-center">Date Range Search with PHP and Ajax</h2>
                </div>

                <div class="col-xl-4 col-md-12 offset-xl-4">
                    <div class="search-form mb-5">
                        <form action="manage.php" method="post" id="form">
                            <div class="form-row">
                                <div class="form-group input-group date col-md-6" data-provide="datepicker">
                                    <input type="text" class="form-control datepicker" id="start" requried name="start" data-date-format="yyyy/mm/dd" placeholder="Starting Date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                                <div class="form-group input-group date col-md-6" data-provide="datepicker">
                                    <input type="text" class="form-control datepicker" requried data-date-format="yyyy/mm/dd" id="end" name="end" placeholder="Ending Date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="button text-center">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-8 col-md-12 offset-xl-2">
                    <div class="data-table">
                        <div class=" table-full table-responsive">
                            <table id="example" class=" table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Debit</th>
                                        <th scope="col">Credit</th>
                                        <th scope="col">Order Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach($data as $item){ ?>
                                    <tr class="all-data">
                                        <td><?=$item['customer_name'] ?></td>
                                        <td><?=$item['item'] ?></td>
                                        <td class="value"><?=$item['debit'] ?></td>
                                        <td class="value"><?=$item['credit'] ?></td>
                                        <td class="date"><?=$item['date'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tbody>
                                    <tr class="total-value">
                                        <th class="sub-total" colspan="2">Total</th>
                                        <td><strong><?=$debit?></strong></td>
                                        <td class="credit"><strong><?=$credit?></strong></td>
                                    </tr>
                                    <tr class="diff">
                                        <th colspan="2">Difference between Debit and Credit</th>
                                        <td class="diff-total" colspan="2"><strong><?php echo $current ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>


    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="assets/js/jquery-3.3.1.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <script>
        

        $(document).ready(function() {
            $('#example').DataTable();
        });

        

        $(document).ready(function(){
                $('.datepicker').datepicker({ 
                format: 'yyyy-mm-dd',
                startDate: '-3d',
            })
        })


              
    </script>
  </body>
</html>