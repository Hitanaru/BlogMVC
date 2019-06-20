<?php
    require('controller/frontend.php');
    //session_start();
    if(isset($_GET['action'])){
        if($_GET['action'] == 'home'){
            home();
        }
        if($_GET['action'] == 'form'){
            form();
        }
        if($_GET['action'] == 'articles'){
            articles();
        }
        if($_GET['action'] == 'register'){
            register();
        }
        if($_GET['action'] == 'article'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                article();
            }
        }
    }
    else {
        home();
    }