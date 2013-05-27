$(document).ready(function(){

	var form = $("#form");
	var name = $("#name");
	var nameMsg = $("#nameMsg");

	name.blur(validateName);
	name.keyup(validateName);

	form.submit(function(){
			if(validateName())
				return true;
			else
				return false;
	});


	function validateName(){
		var a = $("#name").val();
		var filter = /^[a-zA-Z ]+$/;

		//Geçerliyse error class'ı kaldır
		if (filter.test(a)) {
			name.removeClass("error");
			nameMsg.text("İsim giriniz");
			nameMsg.removeClass("error");
			return true;
		}
		else {
			name.addClass("error");
			nameMsg.text("İsim alanı harfler ve boşluktan oluşabilir");
			nameMsg.addClass("error");
			return false;
		}
	}

});