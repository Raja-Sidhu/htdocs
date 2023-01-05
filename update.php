<!DOCTYPE html>
<html>

<head>
    <title>Employee Details</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="js/myScript.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>

<body>

    <form action="finalupdate.php?emp_ID=<?= $_GET["emp_id"]; ?>" name="frmEdit" method="post">
        <?php
        require('Config/connect.php');
        $query = "SELECT * FROM EMPDETAILS WHERE EMP_ID = '" . $_GET["emp_id"] . "' ";
        $objParse = oci_parse($con, $query);
        oci_execute($objParse, OCI_DEFAULT);
        $row = oci_fetch_array($objParse);
        if (!$row) {
            echo "Not found Employee ID=" . $_GET["emp_id"];
        } else {
        ?>
            <div class="container pt-3">
                <!--<div class="modal fade" id="modalcenter" tabindex="-1" role="dialog" aria-labelledby="modalcentertitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document"  style="max-width:fit-content;">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h3 class="modal-title display-6" id="modalcenterlongtitle">Employee Details</h3>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                       
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">
                                                    <div class="container"> -->

                <table class="table table-sm table-bordered">
                    <thead align="center">
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
                        <td>
                            <div align="center"><input type="text" name="emp_id" size="5" value="<?= $row["EMP_ID"]; ?>"></div>
                        </td>
                        <td>
                            <div align="center"><input type="text" name="emp_name" size="25" value="<?= $row["EMP_NAME"]; ?>"></div>
                        </td>
                        <td>
                            <div align="center"><input type="text" name="gender" size="5" value="<?= $row["GENDER"]; ?>"></div>
                        </td>
                        <td>
                            <div align="center"><input type="text" name="dep" size="10" value="<?= $row["DEP"]; ?>"></div>
                        </td>
                        <td>
                            <div align="center"><input type="text" name="addr" size="250" value="<?= $row["ADDR"]; ?>"></div>
                        </td>
                        <td>
                            <div align="center"><input type="text" name="mob" size="10" value="<?= $row["MOB"]; ?>"></div>
                        </td>
                        <td>
                            <div align="center"><input type="text" name="doj" size="10" value="<?= $row["DOJ"]; ?>"></div>
                        </td>
                    </tr>

                </table>

                <div class="text-center">
                    <button class="btn btn-primary btn-sm" id="save" name="submit" type="submit">Submit</button>
                </div>
                <!--</div>
                                                    </div> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
            </div>

        <?php
        }
        oci_close($con);
        ?>
    </form>
</body>

</html>