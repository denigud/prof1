<!DOCTYPE html>
<?php
//connect to database
$connect = mysqli_connect("localhost", "root", "", "population");
$query = "SELECT * FROM abau LIMIT 3000";
$result = mysqli_query($connect, $query);
?>
<html lang="en">
<head>
    <!--Datatables Jquery Plugin with Php MySql and Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" <a href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPG_ADMIN_Desktop|DASHBOARD_APPLICATION</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>


</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CPG_ADMIN</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Dashboard</a></li>
                <li class="active"><a href="population.php">Population</a></li>
                <li><a href="#">Law</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Agriculture</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome, user</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>POPULATION<small>ABAU Records</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Create Content
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                        <li><a href="#">Add Post</a></li>
                        <li><a href="#">Add User</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active"></li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="abau.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> ABAU <span class="badge">12</span></a>
                    <a href="Rigo_Coast.php"  class="list-group-item",><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Rigo<span class="badge">33</span></a>
                    <a href="goilala.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Goilala <span class="badge">29652 </span></a>
                    <a href="Hiri.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> HIRI <span class="badge">203</span></a>
                </div>


            </div>
            <div class="table-responsive">
                <table id="employee_data" class="table table-striped table-bordered">
                    <thead>
                    <tr>

                        <td>ID</td>
                        <td>FirstName</td>
                        <td>LastName</td>
                        <td>Gender</td>
                        <td>District</td>
                        <td>Ward</td>
                        <td>View</td>

                    </tr>
                    </thead>
                    <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        echo '
                         <tr>
                              <td>'.$row["id"].'</td>
                              <td>'.$row["first_name"].'</td>
                              <td>'.$row["last_name"].'</td>
                              <td>'.$row["Sex"].'</td>
                              <td>'.$row["District"].'</td>
                              <td>'.$row["Ward"].'</td>
                          <td><button type="button" name="view" class="btn btn-info view" id="'.$row["id"].'" >View</button></td>

                         </tr>
                         ';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>


</section>



<footer id="footer">
    <p>Copyright  Central Provincial Government central.gov.pg, © 2018 </p>
</footer>

<!-- Modals -->

<!-- Add Page -->
<div id="post_modal" class="modal fade">
    <div class= "modal-dialog">
        <div class= "modal-content">
            <!--modal header-->
            <div class= "modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Record Details</h4>
            </div>
            <!--modal body-->
            <div class="modal-body" id="post_detail">

            </div>
            <!--modal footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!--<script>
   CKEDITOR.replace( 'editor1' );
</script>

  <!-- Bootstrap core JavaScript
  ================================================== -->

</body>
</html>





<script>

    $(document).ready(function(){
        $('#employee_data').DataTable();
    });
</script>

<script>
    $(document).ready(function(){

        function fetch_post_data(_id)
        {
            $.ajax({
                url:"confetch.php",
                method:"POST",
                data:{id:id},
                success:function(data)
                {
                    $('#post_modal').modal('show');
                    $('#post_detail').html(data);
                }
            });
        }

        $(document).on('click', '.view', function(){
            var _id = $(this).attr("id");
            fetch_post_data(_id);
        });

        $(document).on('click', '.previous', function(){
            var _id = $(this).attr("id");
            fetch_post_data(_id);
        });

        $(document).on('click', '.next', function(){
            var id = $(this).attr("id");
            fetch_post_data(id);
        });

    });
</script>