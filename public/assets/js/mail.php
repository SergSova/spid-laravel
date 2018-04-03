<?
if ($_POST['body']) {
    mail('Musevich@gmail.com', 'результаты теста', $_POST['body']);
    echo 'ok';
}
?>