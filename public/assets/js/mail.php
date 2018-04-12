<?
if ($_POST['body']) {
//    var_dump($_POST['body']);
//die();


    if (mail('Musevich@gmail.com,sergeysova@ukr.net', 'результаты теста', $_POST['body'])) {
        echo 'ok';
    }else{
        echo 'ne ok';
    }
}
?>