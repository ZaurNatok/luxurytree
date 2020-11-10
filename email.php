



<?php
  $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";


     $name = trim(strip_tags($_POST['name']));
     $phone = trim(strip_tags($_POST['phone']));
     $message = trim(strip_tags($_POST['message']));

     mail("luxurytree@mail.ru", "Заказ звонка", 
"Имя: $name\nТелефон: $phone \nСообщение: $message\n", 
"From: LUXURY TREE <$name>");


?>

<script type="text/javascript">
setTimeout('location.replace("/order.html")', 500);
/*Изменить текущий адрес страницы через 1 секунды (500 миллисекунд)*/
</script> 