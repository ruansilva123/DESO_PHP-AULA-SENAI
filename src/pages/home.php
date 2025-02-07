<?php
    session_start();
    if(!$_SESSION["loggedin"]){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../static/style/styles.css">
</head>
<body>
    <nav class="navbar navbar-blur">
        <div class="container-fluid justify-content-end">
            <button class="btn btn-primary me-2" type="button"><a href="login.php" style="text-decoration:none; color:inherit">Logout</a></button>
            <button class="btn btn-primary me-2" type="button"><a href="register.php" style="text-decoration:none; color:inherit">Register new user</a></button>
        </div>
    </nav>
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <table class="table table-secondary table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Is admin</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("../sources/user/listAll.php");
                        if(!empty($users)){
                        foreach($users as $newUser){
                            echo ' <tr>
                                    <td>' . $newUser["pk_user"] . '</td>
                                    <td>' . $newUser["user_email"] . '</td>
                                    <td>' . $newUser["is_admin"] . '</td>
                                    <td><a
                                        class="btn btn-primary"
                                        style="text-decoration:none; color:inherit; color:white"
                                        href="../sources/user/exclude.php?user='.$newUser["pk_user"].'">Exclude</a>
                                    </td>
                                    <td><a
                                        class="btn btn-primary"
                                        style="text-decoration:none; color:inherit; color:white" 
                                        href="edit.php?user='.$newUser["pk_user"].'">Edit</a>
                                    </td>
                                </tr>';
                        }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>