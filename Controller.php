<?php
/**
 * Created by PhpStorm.
 * User: bew
 * Date: 2019-02-20
 * Time: 18:26
 */

if(isset($_POST)){
    $totalProfit = 0;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $bsname = $_POST['bsnname'];
    $file = $_FILES['file']['type'];
    $fileupload = array('text/comma-separated-values','text/csv','application/vnd.ms-excel');

    if (!in_array($_FILES['file']['type'],$fileupload)) {
        echo "<script>
                alert('File type incorrect! - $file ');
                window.location.href = \"index.php\";
              </script>>";
    }
    else {
        $myfile = fopen($_FILES["file"]["tmp_name"], "r");

        while (!feof($myfile)) {
            $inform[] = fgetcsv($myfile);
        }
        $count = 0;
        fclose($myfile);
        foreach ($inform as $row){
            $profit[] = $row[3]-$row[2];
        }
//        print_r($profit);
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculate profit</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
</html>
<body>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Asar");

        body{
            background-color: #f5c6cb;
            font-family: 'Asar', serif;
            background-image: url("https://images.pexels.com/photos/1089842/pexels-photo-1089842.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
        }
        .text-center{
            background-color: white;
        }
        .card-header{
            background-color: #f5c6cb;
        }
        .card-body{
            background-color: #ed969e;
        }





    </style>
<div class="container">
    <div class="intable">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead class="text-center ">
                <tr>
                    <th scope="col">Order</th>
                    <th scope="col">Month</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Income</th>
                    <th scope="col">Profit</th>
                </tr>
                </thead>
                <tbody class="text-center">
                <?php
                for ($i = 1; $i< sizeof($inform) ; $i++){
                    $cost = $inform[$i][2];
                    $income = $inform[$i][3];
                    if ($i > 0){
                        if ($income>$cost){
                            $color = "#3ab41c";

                        }else if ($income<$cost){
                            $color ="#d21b00";
                        }

                    }
                    echo "
                    <tr>
                    <td>" . $inform[$i][0] . "</td>
                    <td>" . $inform[$i][1] . "</td>
                    <td>" . $inform[$i][2] . "</td>
                    <td>" . $inform[$i][3] . "</td>
                    <td style='color: ".$color.";'>" . $profit[$i]. "</td>
                    </tr>
                     ";

                }
                ?>
                </tbody>

            </table>
            <div class="card text-center col-sm-15">
                <div class="card-header">
                    TOTAL PROFIT
                </div>
                <div class="card-body">
                    <?php
                    for ($i = 1; $i< sizeof($profit) ; $i++){
                        $totalProfit += $profit[$i];


                    }
                    echo $totalProfit;
                    ?>
                </div>
            </div>


    </div>



</div>
</body>

