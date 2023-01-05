<?php  
 $con = mysqli_connect("localhost", "root", "", "empdtls");  
 $query = "SELECT * FROM employee";  
 $result = mysqli_query($con, $query);  
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LCODE</title>
    <!--css-->
    <link rel="stylesheet" href="Empdtls/style.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/sweetalert.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="js/myScript.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>


</head>

<body>
    <!-- <div class="bg-image"
     style=" background-image:url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: 100vh; background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     position: relative; 
     background-size: 100% 100%;"> 
     <div > -->

    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="media/bgv29.mp4" type="video/mp4">
        </video>

        <div class="container pt-3">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <img class="mx-auto d-block"
                        src="https://www.lcodetechnologies.com/wp-content/themes/lcode-theme/assets/images/lcode-logo.png"
                        alt="LCODE">

                    <figure class="text-center">
                        <p class="addrs">Khivraj Complex II, 6th Floor, Anna Salai, Nandhanam, Chennai, Tamil
                            Nadu-600035</p>
                    </figure>
                    <div class="card">

                        <div class="card-header bg-info">
                            <h4 class="display-6">Employee Registration </h4>
                        </div>

                        <div class="card-body">
                            <?php 
                            $empidErr=$empnameErr=$mobileErr="";
                            $empid=$empname=$mobile="";
                            if($_SERVER['REQUEST_METHOD']=='POST')
                            {
                            // //validating empid
                            // if(empty($_POST['empid']))
                            // {
                            //     $empidErr="This field is required";
                            // }
                            // else
                            // {
                            //     $pattern="/^[a-zA-Z]+$/";
                            //     $check=preg_match_all($pattern,$_POST['empid']);
                            //     if($check)
                            //     {
                            //         $empid=$_POST['empid'];
                            //     }
                            //     else
                            //     {
                            //     $empidErr="Invalid Input";            
                            //     }
                            // }
                            //validating empname
                                if(empty($_POST['empname']))
                                {
                                    $empnameErr="This field is required";
                                }
                                else
                                {
                                    $pattern="/^[a-zA-Z]+$/";
                                    $check=preg_match_all($pattern,$_POST['empname']);
                                    if($check)
                                    {
                                        $empname=$_POST['empname'];
                                    }
                                    else
                                    {
                                    $empnameErr="Invalid Input";            
                                    }
                                }
                                //validating mobile
                                if(empty($_POST['mobile']))
                                {
                                    $mobileErr="This field is required";
                                }
                                else
                                {
                                    $pattern="/^[6-9]{1}[0-9]{9}/";
                                    $check=preg_match_all($pattern,$_POST['mobile']);
                                    if($check)
                                    {
                                        $mobile=$_POST['mobile'];
                                    }
                                    else
                                    {
                                    $mobileErr="Enter the valid Number";            
                                    }
                                }
                            }
                            ?>
                            <form id="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"
                                autocomplete="off">

                                <div class="col-md-12">

                                    <div class="col-lg-12">
                                        <!--Employee ID & Name -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> ID </label>
                                                <input type="text" class="form-control" maxlength="5" id="empid"
                                                    name="empid" onkeypress="return handleEnter(this, event)"
                                                    onInput="checkEmpId()">
                                                <span id="check-empid"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <label> Name <span class="red">*</span></label>
                                                <input type="text" class="form-control" maxlength="25" id="empname"
                                                    name="empname" onkeypress="return handleEnter(this, event)">
                                                <span> <?php echo $empnameErr;?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <!--Gender -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Gender</label>
                                        </div>

                                        <div class="col-md-12">
                                            <fieldset class="form-group mb-2">

                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" id="gender"
                                                            name="gender" value="Male">Male
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" id="gender"
                                                            name="gender" value="Female">Female
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" id="gender"
                                                            name="gender" value="Others">Others
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">

                                            <!--Department -->
                                            <div class="col-md-6">
                                                <label for="dep">Department</label>
                                                <select type="text" class="form-select" id="dep" name="dep"
                                                    aria-label="Default select example">
                                                    <option value=" ">Choose Department</option>
                                                    <option value="Accounting">Accounting</option>
                                                    <option value="Developing">Developing</option>
                                                    <option value="Testing">Testing</option>
                                                    <option value="Support">Support</option>
                                                </select>
                                            </div>

                                            <!-- Blood Group -->
                                            <div class="col-md-6">
                                                <label for="dep">Blood Group</label>
                                                <select type="text" class="form-select" id="dep" name="dep"
                                                    aria-label="Default select example">
                                                    <option value=" ">Choose Bloodgroup</option>
                                                    <option value="Accounting">A+</option>
                                                    <option value="Developing">A-</option>
                                                    <option value="Testing">B+</option>
                                                    <option value="Support">B-</option>
                                                    <option value="Support">AB+</option>
                                                    <option value="Support">AB-</option>
                                                    <option value="Support">O+</option>
                                                    <option value="Support">O-</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!--Current Address -->

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Current Address</label>

                                                <textarea type="text" class="form-control"
                                                    style="overflow:auto;resize:none" id="addr" name="addr" rows=3
                                                    onkeydown="return (event.keyCode!=13);"></textarea>
                                            </div>

                                            <!--Permanent Address -->
                                            <div class="col-md-6">
                                                <label>Permanent Address</label>

                                                <textarea type="text" class="form-control"
                                                    style="overflow:auto;resize:none" id="addr" name="addr" rows=3
                                                    onkeydown="return (event.keyCode!=13);"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Date of Birth -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Date of Birth</label>

                                        <div class="input-group date" id="doj">
                                            <input type="text" class="form-control" name="doj">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Date of Joining -->
                                    <div class="col-md-6">
                                        <label>Date of Joining</label>

                                        <div class="input-group date" id="doj">
                                            <input type="text" class="form-control" name="doj">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <br>


                                <br>
                                <!-- Mobile Number -->
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Mobile Number<span class="red">*</span></label>

                                            <input type="tel" name="mobile" id="mobile" class="form-control"
                                                maxlength="10">
                                            <span> <?php echo $mobileErr;?></span>
                                        </div>

                                        <!-- E-mail -->
                                        <div class="col-md-6">
                                            <label class="form-label">E-mail<span class="red">*</span></label>
                                            <input type="tel" name="mobile" id="mobile" class="form-control"
                                                maxlength="10">
                                            <span> <?php echo $mobileErr;?></span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Emergency Contact Person -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Emergency Contact Person </label>

                                        <div class="input-group date" id="doj">
                                            <input type="text" class="form-control" name="doj">

                                        </div>
                                    </div>

                                    <!-- Emergency Contact Number -->
                                    <div class="col-md-6">
                                        <label>Emergency Contact Number</label>

                                        <div class="input-group date" id="doj">
                                            <input type="text" class="form-control" name="doj">
                                            _
                                        </div>
                                    </div>
                                </div>


                                <div id="error_msg"></div>
                                <br>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-sm" id="save" type="submit">Submit</button>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#modalcenter">View Records</button>
                                    <button class="btn btn-secondary btn-sm" type="reset">Clear Fields</button>
                                </div>


                                <!-- Modal -->

                                <div class="modal fade" id="modalcenter" tabindex="-1" role="dialog"
                                    aria-labelledby="modalcentertitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width:fit-content;">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h3 class="modal-title display-6" id="modalcenterlongtitle">Employee
                                                    Details</h3>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                    aria-label="Close">

                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <?php
                                                    require_once('Config/connect.php');
                                                    $query="SELECT * FROM empdetails";
                                                    $result=mysqli_query($con,$query)
                                                    ?>
                                                    <table class="table table-sm table-bordered">
                                                        <thead>
                                                            <tr class="bg-dark text-white">
                                                                <th> Employee ID </th>
                                                                <th> Employee Name </th>
                                                                <th> Gender </th>
                                                                <th> Department </th>
                                                                <th> Address </th>
                                                                <th> Mobile Number </th>
                                                                <th> Date of Joining </th>
                                                            </tr>
                                                        </thead>
                                                        <tr>
                                                            <?php
                                                        while($row=mysqli_fetch_assoc($result))
                                                        {
                                                        ?>
                                                            <td><?php echo $row['emp_id']; ?></td>
                                                            <td><?php echo $row['emp_name']; ?></td>
                                                            <td><?php echo $row['gender']; ?></td>
                                                            <td><?php echo $row['dep']; ?></td>
                                                            <td><?php echo $row['addr']; ?></td>
                                                            <td><?php echo $row['mob']; ?></td>
                                                            <td><?php echo $row['doj']; ?></td>

                                                        </tr>
                                                        <?php    
                                                        }
                                                        ?>
                                                        <tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---Modal End--->
                        </div>
                        </form>
                    </div>
                </div>
                <p class=req>* Required Field</p>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<!---Insert data to the database--->
<script>
    $(document).ready(function () {
        $("#save").click(function () {
            $.ajax({
                url: "formempdtl.php",
                type: "post",
                data: $("#form").serialize(),
                success: function (data) {
                    alert(data);

                }
            })
            $("#form").trigger("reset");
        });
    });
</script>

<!---Checking the Emp ID--->
<script>
    function checkEmpId() {

        jQuery.ajax({
            url: "check_availability.php",
            data: 'empid=' + $("#empid").val(),
            type: "POST",
            success: function (data) {
                $("#check-empid").html(data);
            },
            error: function () {}
        });
    }
</script>