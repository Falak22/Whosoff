
 <html>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
        <style>
            table,td,th{
                        border:solid 1px black;
            }
        </style>
</head>
<body>
<?php
include("db_connection.php");
$query = "SELECT * FROM employee_master";
       
$data = mysqli_query($con,$query);
// print_r ($data);

 //print_r($result);
 $string="";
 ?>
                         <html>

                         <head>

                             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
                                 rel="stylesheet">
                             <script
                                 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
                             </script>
                         </head>

                         <body>


                             <table class="width:5% table table-light ">
                                 <thead>
                                     <tr>
                                         <th>id</th>
                                         <th>EMPLOYEE ID:</th>
                                         <th>NAME:</th>
                                         <th>desgin_id</th>
                                         <th>email</th>
                                         <th>gender</th>
                                         <th>address</th>
                                         <th>dept_id</th>
                                         <th>username</th>
                                         <th>password</th>
                                         <th>ACTION:</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                     while($result = mysqli_fetch_assoc($data)){
                       // print_r($result);
                        $string .="<tr>
                                    <td>".$result['emp_id']."</td>
                                    <td>".$result['name']."</td>
                                    <td>".$result['design_id']."</td>
                                    <td>".$result['email']."</td>
                                    <td>".$result['contact']."</td>
                                    <td>".$result['gender']."</td>
                                    <td>".$result['address']."</td>
                                    <td>".$result['dept_id']."</td>
                                    <td>".$result['username']."</td>
                                    <td>".$result['password']."</td>
                                    <td><button>edit</button>
                                    <button>delete</button></td>
                                    </tr>";
 }
 
echo $string;


?>
                                 </tbody>

                         </body>

                         </html>