<?PHP
$n = rand(1, 104);
$d = rand(1, 50);

include('connection.php');

$sql1 = "select dare from `dares` where sno='$d'";
$res1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
$row1 = mysqli_fetch_row($res1);


echo '
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <title>Dare</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

</head>

<body style="font-family: \'Dancing Script\', cursive;">

<div class="container">


    <div class="jumbotron">
        <h1 style="text-align: center">Dare for the Farewell</h1>
    </div>


<div class="container" style="max-width:800px; border:1px;">
    <div class="row">
    
    <div class="col-6">
    
    <h1><b>Dare to Perform :</b></h1>
    <br/>
  <h3>' .$row1[0].'</h3>

<br/>

<a href="/dare/dare.php" class="btn btn-info" role="button">New Dare</a>
</div>
        <div class="col-6">

<h1><b>Lucky person</b></h1>

       <img class="img-responsive center-block" src="img/' . $n . '.jpg">
        </div>






    </div>

</div>



    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>';

?>









