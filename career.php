<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Career</title>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid" style="background-image: url('banner.jpeg'); background-size: cover;">
                <div class="container">
                    <h1 class="display-4" style="color: white;">Job Portal</h1>
                    <p class="lead" style="color: white;">Best Jobs available matching your skills.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $sql = "SELECT `cname`, `position`, `Jdesc`, `skills`, `CTC` FROM `jobs`";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="jobs" style="background-color: lightgrey; width: 350px; border: 10px solid green;padding: 20px; margin: 20px; border-radius: 25px;">
                        <h3 style="text-align: center;">' . $row['position'] . '</h3>
                        <h4 style="text-align: center;">' . $row['cname'] . '</h4>
                        <p style="color: black; text-align:justify;">' . $row['Jdesc'] . '</p>
                        <p style="color: black;"><b>Skills Required: </b>' . $row['skills'] . '</p>
                        <p style="color: black;"><b>CTC: </b>' . $row['CTC'] . '</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                        Apply Now
                        </button>
                    </div>
                </div>';
            }
        } else {
            echo "";
        }
        ?>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Applying For</label>
                            <input type="text" class="form-control" name="apply">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Qualification</label>
                            <input type="text" class="form-control" name="qual">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Year Passout</label>
                            <input type="text" class="form-control" name="year">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submitapply" class="btn btn-primary">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>