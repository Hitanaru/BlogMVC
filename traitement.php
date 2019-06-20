<?php
    require('controller/frontend.php');
    if (isset($_POST['action'])) {
        if($_POST['action'] == 'new_article'){
            header('Location: index.php?action=articles');
            insertArticle($_POST['name'], $_POST['description'], $_POST['category']);
        }
        if($_POST['action'] == 'new_user'){
            if(!empty($_POST['username'] && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repeatPassword']))){
                if($_POST['password'] !== $_POST['repeatPassword'])
                {
                    echo 'Les mots de passe doivent être identiques';
                }
                else{
                    newUser($_POST['username'], $_POST['email'], $_POST['password'], $_POST['repeatPassword']);
                    //header('Location: index.php?action=register');
                }
            }
            else{
                echo 'Tous les champs ne sont pas remplis';
            }
        }
    }
?>
