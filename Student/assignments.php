<?php
if (!isset($_SESSION)) {
    session_start();
}
define('TITLE', 'Assignment Submission');
define('PAGE', 'assignment');
include('./stuInclude/header.php');
include_once('../dbConnection.php');

if (isset($_SESSION['is_login'])) {
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}

$sql = "SELECT * FROM student WHERE stu_email='$stuEmail'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
}

if (isset($_POST['submitAssignmentBtn'])) {
    if ($_FILES['assignment']['name'] != "") {
        $assignmentName = $_FILES['assignment']['name'];
        $assignmentTempName = $_FILES['assignment']['tmp_name'];
        $assignmentSize = $_FILES['assignment']['size'];

        // Validate file size (maximum 10MB)
        $maxFileSize = 10 * 1024 * 1024; // 10MB
        if ($assignmentSize > $maxFileSize) {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">File size exceeds the maximum limit of 10MB.</div>';
        } else {
            $assignmentContent = file_get_contents($assignmentTempName);
            $assignmentContent = mysqli_real_escape_string($conn, $assignmentContent); // Escape special characters

            $sql = "INSERT INTO assignments (stu_id, assignment) VALUES ('$stuId', '$assignmentContent')";
            if ($conn->query($sql) === TRUE) {
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Assignment submitted successfully.</div>';
            } else {
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to submit the assignment.</div>';
            }
        }
    } else {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Please select a file to upload.</div>';
    }
}
?>

<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if (isset($stuId)) { echo $stuId; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="assignment">Upload Assignment (PDF only)</label>
            <input type="file" class="form-control-file" id="assignment" name="assignment">
        </div>
        <button type="submit" class="btn btn-primary" name="submitAssignmentBtn">Submit</button>
        <?php if (isset($passmsg)) { echo $passmsg; } ?>
    </form>
</div>

</div> <!-- Close Row Div from header file -->

<?php
include('./stuInclude/footer.php');
?>


