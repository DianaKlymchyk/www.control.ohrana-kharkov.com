<?php 

if(isset($_POST['submit'])){
/* Устанавливаем e-mail Кому и от Кого будут приходить письма */    
	$to = "site@control.ohrana-kharkov.com"; // Здесь нужно написать e-mail, куда будут приходить письма	
    $from = "provodnik.kontrol@gmail.com"; // Здесь нужно написать e-mail, от кого будут приходить письма

/* Указываем переменные, в которые будет записываться информация с формы */
	$first_name = $_POST['first_name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
    $subject = "Форма отправки сообщений с сайта Provodnik";//Фиксированная тема письма
	
	
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта! 
Имя отправителя: $first_name 
Номер телефона: $phone 
Текст сообщения: $message 
Чтобы ответить на это письмо, создайте новое сообщение, скопируйте электронный адрес provodnik.kontrol@gmail.com и вставьте в поле Кому.";	
	
$headers = "From: $from \r\n";
	
/* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8; lang=ru');
    
}
?>
<!--Переадресация на главную страницу сайта, через 0.5 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://control.ohrana-kharkov.com/ru.html");}
window.setTimeout("changeurl();",500);
</script>
