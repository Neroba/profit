<?php

require __DIR__.'/autoload.php';

$view =new \App\View;
$view->users = \App\Models\User::findAll();

//echo $view->render(__DIR__.'/App/templates/index.php');
$view->display(__DIR__.'/App/templates/index.php');

//$users = \App\Models\User::findAll();
//include __DIR__.'/App/templates/index.php';

/*use App\Models\User;
use App\Model;

require __DIR__.'/autoload.php';



$user = new User();
$user->name = 'Vasja';
$user->email = 'v@pupkin.ru';
$user->insert();


$users = User::findall();

//var_dump($users);

function sendEmail(Model $user, string $message) {
    echo $message . ' Почта уходит на ' . $user->email;
}
sendEmail($users[0], 'Hello!');
  */
 