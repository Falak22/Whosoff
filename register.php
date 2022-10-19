<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LMS | registerpage</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
    body {
        background-image: url('https://images.unsplash.com/photo-1538449492226-2c34ed994f3e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80');
        background-size: cover;
        background-position: center;
        height: 200vh;
        display: flex;


    }
    </style>
</head>

<body class="hold-transition login-page"
    style=" background-image: url('https://images.unsplash.com/photo-1552072232-059f1a5d76c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
    ;>
    <div class="login-box">
        <div class="login-logo">
            <a href="register.php"><b style="color:white;">REGISTERATION PAGE</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Please fill the appropriate details</p>

            <form action="#" method="post">
                <div class="form-group has-feedback">
                    <label>Employee Id</label>
                    <input type="text" name="empid" id="empid" class="form-control" placeholder="Eg: CS001" />
                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Eg:John Doe">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Username</label>
                    <input type="text" name="username" id="user" class="form-control" placeholder="John@gmail.com">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Password</label>
                    <input type="password" name="password" required id="pswd" class="form-control"
                        placeholder="please Fill minimum 8 characters" maxlength="8">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Email Id</label>
                    <input type="email" name="email" required id="emailid" class="form-control"
                        placeholder="john@gmail.com">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Contact No.</label>
                    <input type="text" name="phone" id="phn" class="form-control" placeholder="Contact" maxlength="10">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="m-4">

                        <Select class="form-control" name="gender" id="gender">
                            <option value="0" disabled>Choose a Field
                            <option>
                            <option value="1">Male
                            <option>
                            <option value="2">Female
                            <option>





                        </select>
                    </div>

                    <div class="form-group">
                        <label>Designation</label>

                        <Select class="form-control" name="designation" id="design">

                            <option value="0" disabled>Choose a Field
                            <option>
                            <option value="1">Principal
                            <option>
                                <optgroup label="Dean">
                                    <option value="4">Administrator
                                    <option>

                                    <option value="5">Infrastructure
                                    <option>
                                    <option value="6">Research and Development
                                    <option>
                                </optgroup>
                                <optgroup label="Hod">
                                    <option value="7">Computer Science Department
                                    <option>
                                    <option value="8">Information Science Department
                                    <option>
                                    <option value="9">Electrical Department
                                    <option>
                                    <option value="10">Electrical Department
                                    <option>
                                    <option value="11">Mechanical Department
                                    <option>
                                    <option value="12">Civil Department
                                    <option>
                                    <option value="13">Aeronautical Department
                                    <option>
                                </optgroup>
                                <optgroup label="Teaching Staff">
                                    <option value="14">Professor
                                    <option>
                                    <option value="15">Assistant Professor
                                    <option>
                                    <option value="16">Associate Professor
                                    <option>
                                </optgroup>
                                <optgroup label="Non Teaching Staff">
                                    <option value="17">Lab Instructor
                                    <option>
                                    <option value="18">Clerk
                                    <option>
                                    <option value="19">Placement Officer
                                    <option>
                                    <option value="20">Librarian
                                    <option>

                                </optgroup>


                        </select>
                    </div>


                    <div class="form-group">
                        <label>Department</label>
                        <div class="m-4">

                            <Select class="form-control" name="department" id="dept">
                                <option value="0" disabled>Choose a Field
                                </option>
                                <option value="1">Computer Science
                                </option>
                                <option value="2">Information Science
                                </option>
                                <option value="3">Electrical
                                </option>
                                <option value="4">Electrical and Electronics
                                </option>
                                <option value="5">Mechanical
                                </option>
                                <option value="6">Civil
                                </option>
                                <option value="7">Aeronautical
                                </option>





                            </select>
                        </div>
                        <br>

                        <div class="form-group has-feedback">
                            <label>Address</label>
                            <input type="text" name="address" id="address" class="form-control" />
                        </div>
                        <div class="row">

                            <!--div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div-->
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="button" name="submit" id="reg_submit" value="submit"
                                    class="btn btn-primary btn-block btn-flat ">Submit
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
            </form>

            <!--div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div-->
            <!-- /.social-auth-links -->



        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    

</body>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            //alert('hi');
            $(document).on('click','#reg_submit',function(){
                //alert('hi');

                var emp_id = $('#empid').val();
                var emp_name=$('#name').val();
                var username=$('#user').val();
                var password=$('#pswd').val();
                var email=$('#emailid').val();
                var contact=$('#phn').val();
                var gender=$('#gender').val();
                var design=$('#design').val();
                var dept=$('#dept').val();
                var address=$('#address').val();
                var url = 'insert.php';


                //alert(emp_id);
                if(emp_id == ''|| emp_name==''|| username==''|| password==''|| email==''|| contact==''|| gender==0 || design==0 || dept==0 || address==''){
                    alert('fields are empty');
                }else{
                    alert('ready for submission');
                    $.post(url,{ 
                             p1 : emp_id, p2: emp_name, p3 : username, p4 : password, p5 : contact, p6 : gender, p7 : design, p8 : dept, p9 : address, p10 : email },
                        function(data,status){
                            alert(data+'-'+status);
                    });
                }
            
            });
        });
    </script>
</html>