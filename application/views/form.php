<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
<!--<link rel="styleSheet" href="css/style.css" type="text/css" media="screen">-->
<style>
body{
   font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
   font-size:12px;
 }
 p, h1, form, button{border:0; margin:0; padding:0;}
 .spacer{clear:both; height:1px;}
 .someSpace{clear:both;height: 80px;}
 /* ----------- My Form ----------- */
 .form{
   margin:0 auto;
   width:600px;
   padding:14px;
 }
 
   /* ----------- stylized ----------- */
   #stylized{
       border:solid 2px #b7ddf2;
       background:#ebf4fb;
   }
   #stylized h1 {
       font-size:14px;
       font-weight:bold;
       margin-bottom:8px;
   }
   #stylized p{
       font-size:11px;
       color:#666666;
       margin-bottom:20px;
       border-bottom:solid 1px #b7ddf2;
       padding-bottom:10px;
   }
   #stylized label{
       display:block;
       font-weight:bold;
       text-align:right;
       width:240px;
       float:left;
   }
   #stylized .small{
       color:#666666;
       display:block;
       font-size:11px;
       font-weight:normal;
       text-align:right;
       width:240px;
   }
   #stylized input{
       float:left;
       font-size:12px;
       padding:4px 2px;
       border:solid 1px #aacfe4;
       width:300px;
       margin:2px 0 20px 10px;
   }
   #stylized input.error{
        background: #f8dbdb;
        border-color: #e77776;
   }
   #stylized .error{
        background: #f8dbdb;
        color: #e77776;
   }
   #stylized button{
       clear:both;
       margin-left:250px;
       width:125px;
       height:31px;
       background:#666666 url(img/button.png) no-repeat;
       text-align:center;
       line-height:31px;
       color:#FFFFFF;
       font-size:11px;
       font-weight:bold;
   }
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/validate.js"></script>	
</head>

<body>



<div class="someSpace"></div>
<div id="stylized" class="form">
<?php echo form_open('form'); ?>

	<h1>Üyelik Formu</h1>
   	<p>isim, mail, pasapor numarası, cep telefonu, tckn</p>

   	<ul class="error">
   	<?php echo validation_errors(); ?>
   </ul>
 
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

 	<label>Cep Telefonu
 		<span id="mobileMsg" class="small">Telefon numarası giriniz</span>
   	</label>
 	<input type="text" name="mobile" id="mobile" />

 	<label>TC Kimlik No
 		<span id="tcknMsg" class="small">TC Kimlik</span>
   	</label>
 	<input type="text" name="tckn" id="tckn" />
 

    <button  type="submit">Gönder</button>
 	<div class="spacer"></div>

</form>
</div>

</body>
</html>