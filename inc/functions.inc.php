<?php


/////////////////
//Add functions//
/////////////////

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
        $page_errors = __check_person($p_fornavn, $p_etternavn);
        // no input error
        if (count($page_errors) == 0) {
            // check if the user exists
            if (__is_user($p_fornavn, $p_etternavn)) {
                $page_errors[] = "Denne personen er allerede registrert!";
            } else {
                $saved = __save_person_to_db($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
                if (!$saved) {
                    $page_errors[] = "Error saving into the database!";
                } else {
                    // show login page
                    $page = "main_page";
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
    
        $page = "";
        $page_title = "main_page";
    }
}

////////////////////////
//Send to DB functions//
////////////////////////

function __save_person_to_db($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO person (fornavn, etternavn, tlfnummer, epost, adresse, postnr) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param('ssissi', $p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

///////////////////////////////////////
//Sjekker om duplicates er registrert//
///////////////////////////////////////

function __is_user($p_fornavn, $p_etternavn){
  global $mysql;

  $stmt = $mysql->prepare("SELECT * FROM person WHERE fornavn=? AND etternavn=?");
  $stmt->bind_param('ss' $p_fornavn, $p_etternavn);
  $stmt->execute();
  $stmt->bind_result($res);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;

}

//////////////////
//List functions//
//////////////////

function list_person(){
  global $smarty, $page, $page_title, $mysql;

  $query = "SELECT * FROM person";
  $result = mysqli_query($mysql, $query);

  while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('person', $value);
  $page = "list_person";
  $page_title = "Person Liste";
}

function list_avtale(){
  global $smarty, $page, $page_title, $mysql;

  $query = "SELECT * FROM avtale";
  $result = mysqli_query($mysql, $query);

  while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('avtale', $value);
  $page = "list_avtale";
  $page_title = "Avtale Liste";
}

function list_gruppe(){
  global $smarty, $page, $page_title, $mysql;

  $query = "SELECT * FROM gruppe";
  $result = mysqli_query($mysql, $query);

  while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('guppe', $value);
  $page = "list_gruppe";
  $page_title = "Gruppe Liste";
}


///////////////////
//Check functions//
///////////////////


function __check_person($p_fornavn, $p_etternavn, $p_tlfnummer) {
    $errors = array();
    if (strlen($p_fornavn) == 0) {
        $errors[] = "Fornavn er tomt!";
    }
    if (strlen($p_etternavn) == 0) {
        $errors[] = "Etternavn er tomt!";
    }
    return $errors;
}

function __check_avtale($a_tidspunkt, $a_avtaleType, $a_stedID) {
    $errors = array();
    if (strlen($a_tidspunkt) == 0) {
        $errors[] = "Tidspunkt er tomt!";
    }else if (strlen($a_tidspunkt) != 19){
        $errors[] = "Skriv tidspunkt i formattet:'2015-08-01 14:00:00'";
    }
    if (strlen($a_avtaleType) == 0) {
        $errors[] = "Avtale Type er tomt!";
    }
    if (strlen($a_stedID) == 0) {
        $errors[] = "Sted ID er tomt!";
    }
    return $errors;
}
function __check_avtaler($aa_personID, $aa_gruppeID, $aa_avtaleID) {
    $errors = array();
    if (strlen($aa_avtaleID) == 0) {
        $errors[] = "Avtale ID er tomt!";
    }
    if (strlen($aa_gruppeID)&&(strlen($aa_personID)) == 0) {
        $errors[] = "Person ID og Gruppe ID er tomt!";
    }
    return $errors;
}
function __check_gruppe_person($gp_gruppeID, $gp_personID) {
    $errors = array();
    if (strlen($$gp_gruppeID) == 0) {
        $errors[] = "Gruppe ID er tom!";
    } else if (strlen($gp_gruppeID) >= 25) {
     $errors[] = "Ugyldig Gruppe ID!";
    }

    if (strlen($gp_personID) == 0) {
        $errors[] = "Person ID er tom!";
    } else if (strlen($gp_personID) >= 25) {
        $errors[] = "Ugyldig Person ID!";
    }
    return $errors;
}

function __check_gruppe($g_gruppenavn) {
    $errors = array();
    if (strlen($g_gruppenavn) == 0) {
        $errors[] = "Gruppenavn er tomt!";
    }
    return $errors;
}
/////////
?>
