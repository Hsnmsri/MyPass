<?php
// Requierment includes
include "functions.php";
include "files_directory.php";

// Start session
session_start();

// Connect to database
include "connectdb.php";

$query = "SELECT u_name, u_password FROM mypass_admin WHERE id = 1";
$loginData = mysqli_query($MyPassdbConnection, $query);
$loginArrayData = mysqli_fetch_all($loginData);

$dbUserName = $loginArrayData[0][0];
$dbPassword = $loginArrayData[0][1];

$reqUserName = $_POST['username'] ?? '';
$reqPassword = $_POST['password'] ?? '';

// check user-status session for exiting
if (isset($_SESSION['user-status'])) {

    // check user-status session value
    switch ($_SESSION['user-status']) {

            // check user-status session value
        case 0: {
                if (!(($reqUserName == '') && ($reqPassword == ''))) {

                    if (($reqUserName == $dbUserName) && ($reqPassword == $dbPassword)) {

                        // set user-status session
                        $_SESSION['user-status'] = 1;
                        setcookie(session_name(), session_id(), time() + 60 * 60 * 3);

                        // create login history
                        set_login_history();

                        //redirect
                        header("Location: $dir_index");
                    } else {

                        Js_Message('Username or password is invalid!');
                    }
                }
            }
            break;
        case 1: {
                header("Location: $dir_index");
            }
            break;
        default: {
                // invalid number
                Js_Message('The Session is invalid value!');
            }
    }
} else {

    if (!(($reqUserName == '') && ($reqPassword == ''))) {

        // user-status not set
        if (($reqUserName == $dbUserName) && ($reqPassword == $dbPassword)) {

            // set user-status session
            $_SESSION['user-status'] = 1;
            setcookie(session_name(), session_id(), time() + 60 * 60 * 3);

            // create login history
            set_login_history();

            // redirect
            mysqli_query($MyPassdbConnection, $query);
            header("Location: $dir_index");
        } else {

            Js_Message('Username or password is invalid!');
        }
    }
}
