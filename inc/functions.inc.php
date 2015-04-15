<?php

function add_person(){

     global $smarty, $page, $page_errors, $page_info, $page_title;

    $step = isset($_POST['step']) ? $_POST['step'] : 0;
    $p_fornavn = "";
    $p_etternavn = "";
    $p_tlfnummer = "";
    $p_epost = "";
    $p_adresse = "";
    $p_postnr = "";

    // form is submitted
    if ($step == 1) {
        $p_fornavn = $_POST['fornavn'];
        $p_etternavn = $_POST['etternavn'];
        $p_tlfnummer = $_POST['tlfnummer'];
        $p_epost = $_POST['epost'];
        $p_adresse = $_POST['adresse'];
        $p_postnr = $_POST['postnr'];

        // input check
        $page_errors = __check_input($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
        // no input error
        if (count($page_errors) == 0) {
            // check if the user exists
            if (__is_user($p_fornavn, $p_etternavn)) {
                $page_errors[] = "A erson with these credentials already exists!";
            } else {
                $saved = __save_to_db($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
                if (!$saved) {
                    $page_errors[] = "Error saving into the database!";
                } else {
                    // show login page
                    $page = "login";
                    $page_info = "You have succesfully signed up. You can log in now.";
                }
            }
        }

        // if there are any problems, we display the form again
        if (count($page_errors) > 0) {
            $step = 0;
        }
    }

    // displaying the form
    if ($step == 0) {
        // remembering previously filled in values
        // (this is the same as having $smarty->assign(...) for each variable separately)
        $smarty->assign(array(
            "name" => $name,
            "email" => $email,
            "student_no" => $student_no,
            "user_unix" => $user_unix,
            "user_codecademy" => $user_codecademy,
            "user_github" => $user_github
        ));
        $page = "signup";
        $page_title = "sign-up";
    }
}

function __check_input($name, $email, $student_no, $user_unix, $user_codecademy, $user_github) {
    $errors = array();
    if (strlen($name) == 0) {
        $errors[] = "Name is empty!";
    }
    if (strlen($student_no) == 0) {
        $errors[] = "Student number is empty!";
    } else if (strlen($student_no) != 6) {
        $errors[] = "Invalid student number!";
    }
    if (strlen($email) == 0) {
        $errors[] = "Email is empty!";
    } else if (substr($email, -6) != "uis.no") {
        $errors[] = "Not an uis.no email address!";
    }
    if (strlen($user_unix) == 0) {
        $errors[] = "Unix username is empty!";
    }
    if (strlen($user_codecademy) == 0) {
        $errors[] = "Codecademy username is empty!";
    }
    if (strlen($user_github) == 0) {
        $errors[] = "Github username is empty!";
    }

    return $errors;
}

?>