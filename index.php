<?php

require __DIR__.'/autoload.php';

$view =new \App\View;
$view->title = 'Мой крутой сайт!';  // создеам св-во title и записываем в него значение
$view->desc = 'Сайт про новости';  // создеам св-во desc и записываем в него значение
$view->users = \App\Models\User::findAll(); // создеам св-во users и записываем в него всех пользователей

echo count($view);
die;

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
 