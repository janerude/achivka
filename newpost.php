<?php include("header.php");
?>
	<div class="shareform">
	   <p><b>Ваше имя:</b><br>
	   <input type="text" size="40"></p>	 
	   
	   <p><b>Ваше фото:</b>
	   <form enctype="multipart/form-data" method="post"></p>
	   <p><input type="file" name="f"></p>
	   	 
	   <p><b>Чего вы достигли:</b><br>
	   <textarea name="comment" cols="40" rows="3"></textarea></p>
	   <p><input type="submit" value="Отправить">
	   <input type="reset" value="Очистить"></p>
	</div>
<?php include ("footer.php");
?>