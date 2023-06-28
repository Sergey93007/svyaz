<?php
$to = "teryokhin930072@yandex.ru";//Почтовый ящик на который будет отправленно сообщение
  $subject = "Вопрос с сайта";//Тема сообщения
  $message = "Данные пользователя";//Сообщение, письмо
// Проверяем метод запроса POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Поочередно проверяем были переданны параметры формы или они пустые
		if(isset($_POST["username"])){
			//Если параметр есть, присваеваем ему переданое значение
			$name = trim(strip_tags($_POST["username"]));
		}
		if(isset($_POST["usernumber"]))
		{
			$number = trim(strip_tags($_POST["usernumber"]));
		}
		if (isset( $_POST["useremail"])) {
			$email = trim(strip_tags($_POST["useremail"]));
		}
		if (isset( $_POST["question"])) {
			$question = trim(strip_tags($_POST["question"]));
		}

			// Формируем письмо
				$message  .= " Телефон: ".$number;
				$message  .= " Почта: ".$email;
				$message  .= " Имя: ".$name;
				$message  .= " Вопрос: ".$question;
			// Окончание формирования тела письма
			// Посылаем письмо
			mail ($to, $subject, $message);
}
else
{
	exit;
} 
?>