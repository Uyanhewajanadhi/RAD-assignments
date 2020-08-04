<!DOCTYPE html>
<html>

<head>
    <title>User Data</title>
    <style>
    table,
    td {
        border: 1px;
        solid black;
    }

    td {
        padding: 5px;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: white;
        background: black;
        text-align: center;
        border: none
    }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
		<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body  style="background-image: linear-gradient(to right, #000000, #660066, #ffb3ff);">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="input-group">
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i> Star Way User <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <!-- View Data start -->

    <h4 style="text-align:center;color:#ffffff">Modify Users</h4>
    <form name="userinput" method="post">
        <br/>
        <div class="container">
            <!--display users start-->
            <form name="userdata" method="post" >
                <table class="table" style="color:#ffffff;">
                    <tr style="color:#ffff99;">
                        <th>Id</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Mobile</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <?php
                    foreach($data as $row){
                        echo "<tr>";
                        echo "<td>". $row->id ."</td>";
                        echo "<td>". $row->name ."</td>";
                        echo "<td>". $row->email ."</td>";
                        echo "<td>". $row->mobile ."</td>";
                        echo '<td><a href="deleteData?id='.$row->id.'" class="btn-sm btn-danger">Delete</a></td>';
                        echo '<td><a href="updateData?id='.$row->id.'" class="btn-sm btn-warning">Update</a></td>';
                        echo "</tr>";
                    }
                ?>
                </table>
            </form>
            <!--display users end-->
            <a href="http://[::1]/codeigniter/assignment/index.php/Activities/generate_pdf" target="_blank" class="btn btn-primary">
                Generate Report
            </a>
        </div>
        <br />

        </div>


    </form>
    <!-- View data end-->

    <div class="footer page-footer font-small blue pt-4">
        <hr style="visibility:hidden">
        <p>© 2020 Copyright <a href="#"> Janadhi Uyanhewa </a></p>
    </div>
    <!-- Footer -->
</body>

</html>