<?php

require('./assets/php/controller/frontend.php');
require('./assets/php/controller/backend.php');

try { 
    ob_start(); 
    if (isset($_GET['action'])) {
        if($_GET['action'] == 'projectList') {
            projectList();
        } else if ($_GET['action'] == 'projectP1') {
            showProjectP1();
        } else if ($_GET['action'] == 'projectP2') {
            showProjectP2();
        } else if ($_GET['action'] == 'projectP3') {
            showProjectP3();
        } else if ($_GET['action'] == 'projectP4') {
            showProjectP4();
        } else if ($_GET['action'] == 'skill') {
            showSkill();
        } else if ($_GET['action'] == 'formation') {
            showFormation();
        } else if ($_GET['action'] == 'contact') {
            showContact();
        } else if ($_GET['action'] == 'login') {
            showLogin();
        } else if ($_GET['action'] == 'admin') {
            showAdmin();
        } else if ($_GET['action'] == 'adminComment') {
            showAdminComment();
        } else if ($_GET['action']== 'adminContact') {
            showAdminContact();
        } else if ($_GET['action'] == 'addComment'){
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['idProject'], $_POST['author'], $_POST['comment']);
                }
             else {
                echo 'Erreur';
            }
        }
    } else {
        projectList();
    }
   $content = ob_get_clean(); 
   require('./assets/php/view/frontend/template.php'); 
} 
catch(Exception $e) {
    echo 'erreur : ' .$e->getMessage();
}
