<?php
$str = '';
echo var_dump($_POST);
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")){

    $to = 'info@sunrise-house.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Обратная связь Sunrise';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p>
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Обратная связь Sunrise\r\n";
    mail($to, $subject, $message, $headers);
    $str .= 'in IF';
}else{
    $str .= 'else IF';
}
$str .= 'ok: ' . $_POST['name'] . ' ' . $_POST['tel'];
echo $str;
?>