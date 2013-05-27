<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
<link rel="styleSheet" href="css/style.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/validate.js"></script>	
</head>

<body>

<?php echo validation_errors(); ?>

<div class="someSpace"></div>
<div id="stylized" class="form">
<?php echo form_open('form'); ?>

	<h1>Üyelik Formu</h1>
   	<p>isim, mail, pasapor numarası, cep telefonu, tckn</p>
 
    <label>İsim
 		<span id="nameMsg" class="small">İsminizi giriniz</span>
   	</label>
 	<input type="text" name="name" id="name" />
 
 	<label>Email
 		<span id="emailMsg" class="small">Email adresinizi giriniz</span>
   	</label>
 	<input type="text" name="email" id="email" />

 	<label>Pasaport No
 		<span id="passportMsg" class="small">Başlangıç sadece harf yada rakam olabilir</span>
   	</label>
 	<input type="text" name="passport" id="passport" />


 

    <button  type="submit">Gönder</button>
 	<div class="spacer"></div>

</form>
</div>

</body>
</html>