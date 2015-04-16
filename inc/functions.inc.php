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
    if (__is_person($p_fornavn, $p_etternavn)) {
      $page_errors[] = "Denne personen er allerede registrert!";
    } else {
      $saved = __save_person_to_db($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Personen er nå registrert i databasen.";
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

  $page = "add_person";
  $page_title = "";
}
}

function add_gruppe(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $g_gruppenavn = "";


    // form is submitted
 if ($step == 1) {
  $g_gruppenavn = $_POST['gruppenavn'];
 

        // input check
  $page_errors = __check_gruppe($g_gruppenavn);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_gruppe($g_gruppenavn)) {
      $page_errors[] = "Denne gruppen er allerede registrert!";
    } else {
      $saved = __save_gruppe_to_db($g_gruppenavn);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Gruppen er nå registrert i databasen.";
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

  $page = "add_gruppe";
  $page_title = "";
}
}


function add_avtale(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $a_avtaleType = "";
 $a_tidspunkt = "";
 $a_kommentar = "";
 $a_stedID = "";


    // form is submitted
 if ($step == 1) {
  $a_avtaleType = $_POST['avtaleType'];
  $a_tidspunkt = $_POST['tidspunkt'];
  $a_kommentar = $_POST['kommentar'];
  $a_stedID = $_POST['stedID'];
 

        // input check
  $page_errors = __check_avtale($a_avtaleType, $a_tidspunkt, $a_stedID);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_avtale($a_avtaleType, $a_tidspunkt, $a_kommentar, $a_stedID)) {
      $page_errors[] = "Denne avtalen er allerede registrert!";
    } else {
      $saved = __save_avtale_to_db($a_tidspunkt, $a_avtaleType, $a_kommentar, $a_stedID);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Avtalen er nå registrert i databasen.";
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

  $page = "add_avtale";
  $page_title = "";
}
}

function add_avtaler(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $aa_avtaleID = "";
 $aa_personID = "";
 $aa_gruppeID = "";
 


    // form is submitted
 if ($step == 1) {
  $aa_avtaleID = $_POST['avtaleID'];
  $aa_personID = $_POST['personID'];
  $aa_gruppeID = $_POST['gruppeID'];
 

        // input check
  $page_errors = __check_avtaler($aa_avtaleID, $aa_personID, $aa_gruppeID);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_avtaler($aa_avtaleID, $aa_gruppeID, $aa_personID)) {
      $page_errors[] = "Personen/Gruppen er allerede knyttet til avtalen!";
    } else {
      $saved = __save_avtaler_to_db($aa_avtaleID, $aa_personID, $aa_gruppeID);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Personen/Gruppen er nå knyttet til avtalen og registrert i databasen.";
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

  $page = "add_avtaler";
  $page_title = "";
}
}

function add_gruppe_person(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $gp_gruppeID = "";
 $gp_personID = "";
 


    // form is submitted
 if ($step == 1) {
  $gp_gruppeID = $_POST['gruppeID'];
  $gp_personID = $_POST['personID'];
  
 

        // input check
  $page_errors = __check_gruppe_person($gp_gruppeID, $gp_personID);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_gruppe_person($gp_gruppeID, $gp_personID)) {
      $page_errors[] = "Personen er allerede registrert i denne gruppen!";
    } else {
      $saved = __save_gruppe_person_to_db($gp_gruppeID, $gp_personID);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Personen er nå registrert i denne gruppen!";
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

  $page = "add_gruppe_person";
  $page_title = "";
}
}

//////////////////////////////
//Send to DB functions: DONE//
//////////////////////////////

function __save_person_to_db($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO person (fornavn, etternavn, tlfnummer, epost, adresse, postnr) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param('ssissi', $p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_gruppe_to_db($g_gruppenavn){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO gruppe (gruppenavn) VALUES (?)");
  $stmt->bind_param('s', $g_gruppenavn);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_avtale_to_db($a_tidspunkt, $a_avtaleType, $a_kommentar, $a_stedID){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO avtale (tidspunkt, avtaleType, kommentar, stedID) VALUES (?, ?, ?, ?)");
  $stmt->bind_param('sssi', $a_tidspunkt, $a_avtaleType, $a_kommentar, $a_stedID);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_avtaler_to_db($aa_avtaleID, $aa_personID, $aa_gruppeID){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO avtaler (avtaleID, personID, gruppeID) VALUES (?, ?, ?)");
  $stmt->bind_param('iii', $aa_avtaleID, $aa_personID, $aa_gruppeID);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_gruppe_person_to_db($gp_gruppeID, $gp_personID){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO gruppe_person (gruppeID, personID) VALUES (?, ?)");
  $stmt->bind_param('ii', $gp_gruppeID, $gp_personID);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}


/////////////////////////////////////////////
//Sjekker om duplicates er registrert: DONE//
/////////////////////////////////////////////

function __is_person($p_fornavn, $p_etternavn){
  global $mysql;

  $stmt = $mysql->prepare("SELECT * FROM person WHERE fornavn=? AND etternavn=?");
  $stmt->bind_param('ss' $p_fornavn, $p_etternavn);
  $stmt->execute();
  $stmt->bind_result($res);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}

function __is_gruppe($g_gruppenavn){
  global $mysql;

  $stmt = $mysql->prepare("SELECT * FROM gruppe WHERE gruppenavn=?");
  $stmt->bind_param('s' $g_gruppenavn);
  $stmt->execute();
  $stmt->bind_result($res);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}

function __is_avtale($a_avtaleType, $a_tidspunkt, $a_kommentar, $a_stedID){
  global $mysql;

  $stmt = $mysql->prepare("SELECT * FROM avtale WHERE avtaleType=? AND tidspunkt=? AND kommentar=? AND stedID=?");
  $stmt->bind_param('sssi' $a_avtaleType, $a_tidspunkt, $a_kommentar, $a_stedID);
  $stmt->execute();
  $stmt->bind_result($res);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}

function __is_avtaler($aa_avtaleID, $aa_gruppeID, $aa_personID){
  global $mysql;

  $stmt = $mysql->prepare("SELECT * FROM avtaler WHERE avtaleID=? AND gruppeID=? OR avtaleID=? AND personID=?");
  $stmt->bind_param('iii' $aa_avtaleID, $aa_gruppeID, $aa_personID);
  $stmt->execute();
  $stmt->bind_result($res);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}

function __is_gruppe_person($gp_gruppeID, $gp_personID){
  global $mysql;

  $stmt = $mysql->prepare("SELECT * FROM gruppe_person WHERE gruppeID=? AND personID=?");
  $stmt->bind_param('ii' $gp_gruppeID, $gp_personID);
  $stmt->execute();
  $stmt->bind_result($res);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}


////////////////////////
//List functions: DONE//
////////////////////////

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




/////////////////////////
//Check functions: DONE//
/////////////////////////


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

function __check_avtale($a_avtaleType, $a_tidspunkt, $a_stedID) {
  $errors = array();
  if (strlen($a_avtaleType) == 0) {
    $errors[] = "Avtale Type er tomt!";
  }
  if (strlen($a_tidspunkt) == 0) {
    $errors[] = "Tidspunkt er tomt!";
  }else if (strlen($a_tidspunkt) != 19){
    $errors[] = "Skriv tidspunkt i formattet:'2015-08-01 14:00:00'";
  }
  if (strlen($a_stedID) == 0) {
    $errors[] = "Sted ID er tomt!";
  }
  return $errors;
}
function __check_avtaler($aa_avtaleID, $aa_personID, $aa_gruppeID) {
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

?>
