<?php
$title = ' ERMS | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
    include_once('../config.php');
    ?>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->
            <div class='row'>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->


                            <div class="container" style="margin-top:10px">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-light dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" value="show details"
                                                        name="show_date">
                                                        Attendance Review
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                            href="attendance_month.php">Month-wise</a>
                                                        <a class="dropdown-item"
                                                            href="attendance_semester.php">Semester-wise</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-3">
                                                <label for="month"> Month: </label>
                                                <select class="custom-select" name="month" id="month"
                                                    data-live-search="true" data-width="100%" value="" required>
                                                    <option value=""> Choose</option>
                                                    <option value=""> January </option>
                                                    <option value=""> February </option>
                                                    <option value=""> March </option>
                                                    <option value=""> April </option>
                                                    <option value=""> May </option>
                                                    <option value=""> June </option>
                                                    <option value=""> July </option>
                                                    <option value=""> August </option>
                                                    <option value=""> September </option>
                                                    <option value=""> October </option>
                                                    <option value=""> November </option>
                                                    <option value=""> December </option>
                                                </select>
                                            </div>

                                            <div class="col-3"></div>

                                            <div class="col-3" align="right">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#staticBackdrop">
                                                    Chart
                                                </button>
                                                <div class="modal fade" id="staticBackdrop" data-backdrop="static"
                                                    data-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                                    Chart</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body col-md-6">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">

                                                <div class="table-responsive">

                                                    <span id="message_operation"></span>
                                                    <table class="table table-striped table-bordered"
                                                        id="attendance_table">
                                                        <thead>
                                                            <tr>
                                                                <th>Course</th>
                                                                <th>Take session</th>
                                                                <th>points</th>
                                                                <th>remarks</th>
                                                                <th>Attendance Date</th>
                                                            </tr>

                                                            <?php
                                                    if (isset($_POST['show_date'])) {
                                                        $dat = $_POST['prese_date'];
                                                        $sql = "SELECT 
                        FROM attendance
                        LEFT JOIN student_enroll
                        ON `student`.`id` = `student_enroll`.`id`
                        ORDER BY `id` ASC;";
                                                    } else {
                                                        $sql = "select  DISTINCT s.student_id,s.student_name,s.student_batch,a.status,date(a.attendance_date) as attendance_date from student s inner join attendance a on s.student_id=a.student_id 
                          inner join batch b on s.student_batch=b.Batch_id and attendance_date=curdate();";
                                                    }


                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                            <tr>
                                                                <td scope='col'>
                                                                    <?php echo $row['Course']; ?>
                                                                </td>
                                                                <td scope='col'>
                                                                    <?php echo $row['student_id']; ?>
                                                                </td>
                                                                <td scope='col'>
                                                                    <?php echo $row['student_batch']; ?>
                                                                </td>
                                                                <td scope='col'>
                                                                    <?php echo $row['status']; ?>
                                                                </td>
                                                                <td scope='col'>
                                                                    <?php echo $row['attendance_date']; ?>
                                                                </td>
                                                                <?php
                                                    }
                                                        ?>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

</body>

</html>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css" />

<div class="modal" id="formModal">
    <div class="modal-dialog">
        <form method="post" id="attendance_form">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="modal_title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
    </div>
    <div class="form-group" id="student_details">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            </table>
        </div>
    </div>
</div>
</main>

<?php include_once("../script.php");
?>
</body>

</html>