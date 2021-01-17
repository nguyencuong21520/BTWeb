<?php

            require("../config.php");
            $user_check = $_SESSION['login_user'];
            $query = "SELECT * from users where email = '$user_check'";
            $ses_sql = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($ses_sql);
            $currentUserName = $row['name'];
            $currentRole = $row['permission']
?>