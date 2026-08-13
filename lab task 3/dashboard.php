<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Student Dashboard</title>

    <link rel="stylesheet" href="style.php">

</head>

<body>

<div class="container">

    <div class="dashboard-card">

        <h1>Student Dashboard</h1>


        <!-- SESSION INFORMATION -->

        <div class="section">

            <h2>Session Information</h2>

            <?php

            if (
                isset($_SESSION["student_name"]) &&
                isset($_SESSION["student_id"])
            ) {

            ?>

                <div class="info">

                    <strong>
                        Student Name:
                    </strong>

                    <?php

                    echo htmlspecialchars(
                        $_SESSION["student_name"]
                    );

                    ?>

                </div>


                <div class="info">

                    <strong>
                        Student ID:
                    </strong>

                    <?php

                    echo htmlspecialchars(
                        $_SESSION["student_id"]
                    );

                    ?>

                </div>


                <div class="info">

                    <strong>
                        Email:
                    </strong>

                    <?php

                    echo htmlspecialchars(
                        $_SESSION["email"]
                    );

                    ?>

                </div>


                <div class="info">

                    <strong>
                        Department:
                    </strong>

                    <?php

                    echo htmlspecialchars(
                        $_SESSION["department"]
                    );

                    ?>

                </div>

            <?php

            } else {

            ?>

                <div class="message error">
                    Session data is not available.
                </div>

            <?php

            }

            ?>

        </div>


        <!-- COOKIE INFORMATION -->

        <div class="section">

            <h2>Cookie Information</h2>

            <?php

            if (isset($_COOKIE["student_name"])) {

            ?>

                <div class="info">

                    <strong>
                        Student Name from Cookie:
                    </strong>

                    <?php

                    echo htmlspecialchars(
                        $_COOKIE["student_name"]
                    );

                    ?>

                </div>

            <?php

            } else {

            ?>

                <div class="message error">
                    Cookie data is not available.
                </div>

            <?php

            }

            ?>

        </div>


        <!-- BUTTONS -->

        <div class="buttons">

            <a
                href="session_delete.php"
                class="btn danger"
            >
                Remove Session
            </a>


            <a
                href="cookie_delete.php"
                class="btn warning"
            >
                Remove Cookie
            </a>


            <a
                href="index.php"
                class="btn secondary"
            >
                Register Again
            </a>

        </div>

    </div>

</div>

</body>

</html>