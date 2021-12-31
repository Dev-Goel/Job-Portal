<?php include 'config.php'; ?>
<?php include 'header.php' ?>


<!-- Page content -->
<div class="content">
    <p>
        <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a> -->
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Post Job
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="Company Name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="" name="cname">
                </div>
                <div class="mb-3">
                    <label for="Designation" class="form-label">Designation</label>
                    <input type="text" class="form-control" id="Designation" name="pos">
                </div>
                <div class="mb-3">
                    <label for="Job Description" class="form-label">Job Description</label>
                    <input type="text" style="height:150px;" class="form-control" id="Job Description" name="Jdesc">
                </div>
                <div class="mb-3">
                    <label for="Skills" class="form-label">Skills Required</label>
                    <input type="text" class="form-control" id="skills" name="skills">
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="CTC" name="CTC">
                </div>
                <button type="submit" class="btn btn-primary" name="job">Submit</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Designation</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <?php $sql = "SELECT `cname`, `position`, `CTC` FROM `jobs`";
        
        $result = mysqli_query($conn, $sql);
        $i = 0;
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo "
                    <tbody>
                    <tr>
                        <td>" . ++$i . "</td>
                        <td>" . $rows['cname'] . "</td>
                        <td>" . $rows['position'] . "</td>
                        <td>" . $rows['CTC'] . "</td>
                    </tr>";
            }
        } else {
            echo "";
        }
        ?>
        </tbody>
        <!-- <tr>
                <th scope="row">1</th>
                <td>TCS</td>
                <td>Software Engineer</td>
                <td>8LPA</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Microsoft</td>
                <td>Software Development Engineer</td>
                <td>44LPA</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>ICICI Bank</td>
                <td>Management Trainee</td>
                <td>16LPA</td>
            </tr> -->

    </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>