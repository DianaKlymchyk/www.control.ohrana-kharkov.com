<?php
$message = "test php mail";
$message = wordwrap($message, 70);
mail('vladgor69@gmail.com', 'My Subject', $message);

?>