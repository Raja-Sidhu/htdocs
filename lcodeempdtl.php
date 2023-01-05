<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LCode Technologies</title>
  
    <link rel="icon" type="image/png" href="https://www.lcodetechnologies.com/wp-content/themes/lcode-theme/assets/images/favicon/favicon.png">
      <!--css-->

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myScript.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script src="js/sweetalert.min.js"></script>


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
            <source src="videos/bgv29.mp4" type="video/mp4">
        </video>
        <div id="particles-js"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <img class="mx-auto d-block" src="https://www.lcodetechnologies.com/wp-content/themes/lcode-theme/assets/images/lcode-logo.png" alt="LCODE">

                    <figure class="text-center">
                        <p class="addrs">Khivraj Complex II, 6th Floor, Anna Salai, Nandhanam, Chennai, Tamil Nadu-600035</p>
                    </figure>
                    <div class="card">

                        <div class="card-header bg-info">
                            <h4 class="display-6">Employee Registration </h4>
                        </div>

                        <div class="card-body">
                            <form id="form" method="POST" action="/formempdtl.php" autocomplete="off">

                                <div class="col-md-12">


                                    <!--Employee ID & Name -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Employee ID </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" maxlength="5" id="empid" name="empid" autofocus onchange="fetchemp()" onInput="checkEmpId()">
                                                <!-- Help Icon -->
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalrecord" title="Employee ID Help">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                                    </svg>
                                                    </button>
                                                </span>
                                                <!-- Help Icon End -->
                                            </div>
                                            <span id="check-empid"></span>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Employee Name <span class="req">*</span></label>
                                            <input type="text" class="form-control" maxlength="25" id="empname" name="empname">
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
                                                        <input type="radio" class="form-check-input" id="male" name="gender" value="Male">Male
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" id="female" name="gender" value="Female">Female
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" id="others" name="gender" value="Others">Others
                                                    </label>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <!--Department -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="dep">Department</label>
                                            </div>

                                            <div class="col-md-6">
                                                <select type="text" class="form-select" aria-label="multiple select example" id="dep" name="dep">
                                                    <option value="">Choose Department</option>
                                                    <option value="Accounting">Accounting</option>
                                                    <option value="Developing">Developing</option>
                                                    <option value="Testing">Testing</option>
                                                    <option value="Support">Support</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!--Address -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-5">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea type="text" class="form-control" style="overflow:auto;resize:none" id="addr" name="addr" rows=3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Mobile Number -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Mobile Number <span class="req">*</span></label>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="number" name="mobile" id="mobile" maxlength="10" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Date of Joining -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-2">
                                                <label>Date of Joining</label>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" name="doj" id="doj">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="error_msg"></div>
                                    <br>
                                    <div class="text-center">
                                        <button class="btn btn-primary " id="save" name="submit" type="submit">Submit</button>
                                        <button class="btn btn-warning " id="update" name="submit" type="submit" hidden>Update</button>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalcenter">View Records</button>
                                        <button class="btn btn-secondary" id="reset" name="reset" type="reset" onclick="reset()">Clear Fields</button>

                                    </div>

                                    <!-- Employee ID Help  -->
                                    <?php
                                    require('Config/connect.php');
                                    $query = "SELECT EMP_ID,EMP_NAME FROM EMPDETAILS ORDER BY EMP_ID";
                                    $rst = oci_parse($con, $query);
                                    oci_execute($rst);
                                    ?>
                                    <div class="modal fade" id="modalrecord" tabindex="-1" role="dialog" aria-labelledby="modalrecordtitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info">
                                                    <h5 class="modal-title display-6" id="modalrecordtitle">Employee ID Help</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover" id="myEmpId">
                                                                <thead>
                                                                    <tr class="bg-dark text-white">
                                                                        <th> Employee ID </th>
                                                                        <th> Employee Name </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $i = 0;
                                                                    while ($row = oci_fetch_array($rst)) {
                                                                    ?>

                                                                        <tr>
                                                                            <td><?php echo $row['EMP_ID']; ?></td>
                                                                            <td><?php echo $row['EMP_NAME']; ?></td>
                                                                            </tr>
                                                                </tbody>
                                                            <?php
                                                                        $i++;
                                                                    }
                                                                   
                                                            ?>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Employee ID Help -->


                                    <!-- View Records -->
                                    <?php
                                    require('Config/connect.php');
                                    $query = "SELECT * FROM EMPDETAILS ORDER BY EMP_ID";
                                    $result = oci_parse($con, $query);
                                    oci_execute($result);
                                    ?>
                                    <div class="modal fade" id="modalcenter" tabindex="-1" role="dialog" aria-labelledby="modalcentertitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:fit-content;">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h3 class="modal-title display-6" id="modalcenterlongtitle">Employee Details</h3>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-hover">
                                                                <thead align="center">
                                                                    <tr class="bg-dark text-white">
                                                                        <th> Employee ID </th>
                                                                        <th> Employee Name </th>
                                                                        <th> Gender </th>
                                                                        <th> Department </th>
                                                                        <th> Address </th>
                                                                        <th> Mobile Number </th>
                                                                        <th> Date of Joining </th>
                                                                        <th> Action </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $i = 0;
                                                                    while ($row = oci_fetch_array($result)) {
                                                                    ?>

                                                                        <tr>
                                                                            <td><?php echo $row['EMP_ID']; ?></td>
                                                                            <td><?php echo $row['EMP_NAME']; ?></td>
                                                                            <td><?php echo $row['GENDER']; ?></td>
                                                                            <td><?php echo $row['DEP']; ?></td>
                                                                            <td><?php echo $row['ADDR']; ?></td>
                                                                            <td><?php echo $row['MOB']; ?></td>
                                                                            <td><?php echo $row['DOJ']; ?></td>
                                                                            <td align="center">
                                                                                <a class="btn btn-sm btn-info" href="update.php?emp_id=<?= $row["EMP_ID"]; ?> "> Edit</a>&nbsp;

                                                                                <a class="btn btn-sm btn-danger" href="delete.php?emp_id=<?= $row["EMP_ID"]; ?>"> Delete</a>
                                                                            </td>
                                                                        </tr>
                                                                </tbody>
                                                            <?php
                                                                        $i++;
                                                                    }
                                                            ?>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---View Records End--->

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <p class=req > * Required Field</p>  -->

                    <!-- Sweet Alert for empty fields-->
                    <?php

                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "formempdtl=empty") == true) {
                    ?>
                        <script>
                            swal("Error", "Please fill all the fields!", "info");
                            exit();
                        </script>
                    <?php
                    }
                    ?>
                    <!-------->

                    <!-- Sweet Alert for Employee ID-->
                    <?php

                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "formempdtl=id") == true) {
                    ?>
                        <script>
                            swal("Error", "Employee ID should be in Numbers & Letters only!", "error");
                            exit();
                        </script>
                    <?php
                    }
                    ?>
                    <!-------->
                    <!-- Sweet Alert for Employee Name-->
                    <?php

                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "formempdtl=name") == true) {
                    ?>
                        <script>
                            swal("Error", "Employee Name should be in Letters only!", "error");
                            exit();
                        </script>
                    <?php
                    }
                    ?>
                    <!-------->

                    <!-- Sweet Alert for Mobile-->
                    <?php

                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "formempdtl=mob") == true) {
                    ?>
                        <script>
                            swal("Error", "Invalid Mobile Number!", "error");
                            exit();
                        </script>
                    <?php
                    }
                    ?>
                    <!-------->

                    <!-- Sweet Alert for Success-->
                    <?php

                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "formempdtl=success") == true) {
                    ?>
                        <script>
                            swal("Done", "Registered Successfully !", "success");
                            exit();
                        </script>
                    <?php
                    }
                    ?>
                    <!-------->
                    <!-- Sweet Alert for Update-->
                    <?php

                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "formempdtl=updated") == true) {
                    ?>
                        <script>
                            swal("Done", "Updated Successfully !", "success");
                            exit();
                        </script>
                    <?php
                    }
                    ?>
                    <!-------->

                </div>
            </div>
        </div>
    </div>

</body>

</html>


<!-- For Field Focus -->
<script>
    $(document).ready(function() {
        $('input,select,textarea').on('keypress', function(e) {
            if (e.which == 13) {
                switch ($(this).attr('id')) {
                    case 'empid':
                        $('#empname').focus();
                        e.preventDefault();
                        break;
                    case 'empname':
                        $('#male').focus();
                        e.preventDefault();
                        break;
                    case 'male':
                        $('#dep').focus();
                        e.preventDefault();
                        break;
                    case 'female':
                        $('#dep').focus();
                        e.preventDefault();
                        break;
                    case 'others':
                        $('#dep').focus();
                        e.preventDefault();
                        break;
                    case 'dep':
                        $('#addr').focus();
                        e.preventDefault();
                        break;
                    case 'addr':
                        $('#mobile').focus();
                        e.preventDefault();
                        break;
                    case 'mobile':
                        $('#doj').focus();
                        e.preventDefault();
                        break;
                }
            }
        });
    });
</script>

<!-- Space Key Disabled in Employee ID -->
<script>
    $("input#empid").on({
        keydown: function(e) {
            if (e.which === 32)
                return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
    });
</script>

<!--------------End---------->

<!-- For Reset -->
<script>
    $(document).ready(function() {
        $("button").click(function() {
            $("#reset").trigger("reset");
        });
    });
</script>
<!-- Reset End -->


<!-- Fetching Values -->
<script>
    function fetchemp() {
        var id = document.getElementById("empid").value;
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
                x: id
            },
            dataType: "JSON",
            success: function(data) {
                document.getElementById("empname").value = data.empname;

                if (data.gender == "Male") {
                    document.getElementById("male").checked = data.gender;
                } else if (data.gender == "Female") {
                    document.getElementById("female").checked = data.gender;
                } else if (data.gender == "Others") {
                    document.getElementById("others").checked = data.gender;
                } else {
                    document.getElementById("male").checked = data.gender;
                    document.getElementById("female").checked = data.gender;
                    document.getElementById("others").checked = data.gender;
                }


                document.getElementById("dep").value = data.dep;
                document.getElementById("addr").value = data.addr;
                document.getElementById("mobile").value = data.mobile;
                document.getElementById("doj").value = data.doj;

            }


        })
    }
</script>
<!-- Fetching Values End -->

<!-- Checking the Emp ID -->
<script>
    function checkEmpId() {

        jQuery.ajax({
            url: "check.php",
            data: 'empid=' + $("#empid").val(),
            type: "POST",
            success: function(data) {
                $("#check-empid").html(data);
            },
            error: function() {}

        });
    }
</script>
<!-- Checking the Emp ID  End-->

<!-- Emp ID Mouse Click-->
<script>
    $(document).ready(function() {
        $('#myEmpId tr').dblclick(function() {
            var valueOfTd = $(this).find('td:first-child').text();
            var valueOfTd2 = $(this).find('td:nth-child(2)').text();
            document.getElementById("empid").value = valueOfTd;
            // document.getElementById("empname").value=valueOfTd2;
        });
    });
</script>
<!-- Emp ID Mouse Click End-->

<!-- Calender -->
<script>
    $(function() {
        var d = new Date();
        var tdate = d.getDate();
        var tmonth = d.getMonth() + 1;
        var tyear = d.getFullYear();
        var todaydate = tdate + '/' + tmonth + '/' + tyear;
        $("#doj").datepicker({
            todayHighlight: true,
            autoclose: true,
            format: 'dd/mm/yyyy',
            startDate: '01/01/2012',
            endDate: todaydate,
        });
    });
</script>
<!-- Calender End -->