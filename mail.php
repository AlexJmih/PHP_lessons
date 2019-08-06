<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="contscts1/html; charset=utf-8" />
   <title>Ваше сообщение успешно отправлено</title>
</head>
<body>
<?php
   header('Content-Type:contscts1/html;charset=utf-8');
   $back="<p><a href=\"javascript:history.back()\">Вернуться назад</a></p>";
   if(!empty($_POST['name']) and !empty($_POST['mail']) 
   and !empty($_POST['message'])){
      $name=trim(strip_tags($_POST['name']));
      $mail=trim(strip_tags($_POST['mail']));
      $message=trim(strip_tags($_POST['message']));
      mail('gamealexmin@mail.ru','Письмо с дипломки','Мне написал: '.$name.'<br>Его почта: '.$mail.'<br>
      Его сообщение: '.$message,"Content-type:contscts1/html;charset=utf-8");
      echo "Ваше сообщение успешно отправлено!<Br>Вы получите ответ в 
      ближайшее время<Br>$back";
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>