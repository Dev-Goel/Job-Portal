<?php include 'config.php'; ?>
<?php include 'header.php' ?>

<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Applied for</th>
                <th scope="col">Qualification</th>
                <th scope="col">Passout Year</th>
                <th scope="col">Resume</th>
            </tr>
        </thead>

        <?php
        $sql = "SELECT `name`, `apply`, `qual`, `year` FROM `candidates`";
        $result = mysqli_query($conn, $sql);
        $i = 0;
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo '
                    <tbody>
                    <tr>
                        <th scope="row">' . ++$i . '</th>
                        <td>' . $rows['name'] . '</td>
                        <td>' . $rows['apply'] . '</td>
                        <td>' . $rows['qual'] . '</td>
                        <td>' . $rows['year'] . '</td>
                        <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                    </tr>';
            }
        } else {
            echo "";
        }

        ?>
        <!-- <tr>
                <th scope="row">2</th>
                <td>Ayaan Goel</td>
                <td>Amazon</td>
                <td>Software Development Engineer</td>
                <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Ritesh Goel</td>
                <td>ICICI Bank</td>
                <td>Management Trainee</td>
                <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
            </tr> -->
        </tbody>
    </table>
</div>