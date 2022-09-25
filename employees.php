<?php

  declare(strict_types=1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/header.php'; ?>
</head>

<body>
    <?php include 'db.php'; ?>

    <?php include 'includes/navbar.php'; ?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                    </div>
                <?php session_unset();
                } ?>
                <div class="card card-body">
                <form action="create_employee.php" method="POST">
                        <div class="form-group mb-4">
                            <input type="text" name="firstName" class="form-control" placeholder="first name" autofocus>
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" name="lastName" class="form-control" placeholder="last name" autofocus>
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-primary  btn-block" name="create_emp" value="Create employee">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Project</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT employees.id, employees.firstName, employees.lastName, projects.Project_name 
                                FROM employees
                                LEFT OUTER JOIN projects ON employees.addedProject = projects.Project_id
                                ORDER BY employees.id";
                        
                        $result_employees = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result_employees)) { ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['firstName'] ?></td>
                                <td><?php echo $row['lastName'] ?></td>
                                <td><?php echo $row['Project_name'] ?></td>
                                <td>
                                    <a href="update_employee.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm me-3">
                                        Update
                                    </a>
                                    <a href="delete_employee.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>