<?php
if (!isset($_SESSION)) {
    session_start();
}
define('TITLE', 'Assignments');
define('PAGE', 'assignments');
include('./adminInclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}
?>
<div class="col-sm-9 mt-5">
    <!--Table-->
    <p class="bg-dark text-white p-2">List of Assignments</p>
    <?php
    $sql = "SELECT student.stu_id, student.stu_name, assignments.assignment
            FROM student
            LEFT JOIN assignments ON student.stu_id = assignments.stu_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">
       <thead>
        <tr>
         <th scope="col">Student ID</th>
         <th scope="col">Name</th>
         <th scope="col">Assignment</th>
        </tr>
       </thead>
       <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<th scope="row">' . $row["stu_id"] . '</th>';
            echo '<td>' . $row["stu_name"] . '</td>';
            echo '<td><a href="data:application/pdf;base64,' . base64_encode($row["assignment"]) . '" target="_blank">View Assignment</a></td>';
            echo '</tr>';
        }

        echo '</tbody>
    </table>';
    } else {
        echo "0 Result";
    }
    ?>
</div>
</div> <!-- div Row close from header -->
<div><a class="btn btn-danger box" href="addnewassignment.php"><i class="fas fa-plus fa-2x"></i></a></div>
</div> <!-- div Container-fluid close from header -->
<?php
include('./adminInclude/footer.php');
?>



