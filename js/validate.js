$(document).ready(function(){

	var form = $("#form");
	var name = $("#name");
	var nameMsg = $("#nameMsg");
	var email = $("#email");
	var emailMsg = $("#emailMsg");
	var passport = $("#passport");
	var passportMsg = $("#passportMsg");
	var mobile = $("#mobile");
	var mobileMsg = $("#mobileMsg");
	var tckn = $("#tckn");
	var tcknMsg = $("#tcknMsg");


	name.blur(validateName);
	email.blur(validateEmail);
	passport.blur(validatePassport);
	mobile.blur(validateMobile);
	tckn.blur(validateTCKN);

	name.keyup(validateName);
	email.keyup(validateEmail);
	passport.keyup(validatePassport);
	mobile.keyup(validateMobile);
	tckn.keyup(validateTCKN);

	form.submit(function(){
		if(validateName() & validateEmail() & validatePassport() & validateMobile() & validateTCKN())
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

	function validateEmail(){
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

		if(filter.test(a)){
			email.removeClass("error");
			emailMsg.text("Email adresinizi giriniz");
			emailMsg.removeClass("error");
			return true;
		}

		else{
			email.addClass("error");
			emailMsg.text("Lütfen geçerli bir email adresi giriniz");
			emailMsg.addClass("error");
			return false;
		}
	}

	function validatePassport(){
		var a = $("#passport").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

		if(filter.test(a)){
			passport.removeClass("error");
			passportMsg.text("Pasaport No Format : TR-123456");
			passportMsg.removeClass("error");
			return true;
		}

		else{			
			passport.addClass("error");
			passportMsg.text("Pasaport No: harf, rakam ve '-' den oluşabilir");
			passportMsg.addClass("error");
			return false;
		}
	}

	function validateMobile(){
		var a = $("#mobile").val();;
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

		if(filter.test(a)){
			mobile.removeClass("error");
			mobileMsg.text("Cep Telefonu");
			mobileMsg.removeClass("error");
			return true;
		}

		else{
			mobile.addClass("error");
			mobileMsg.text("Sadece rakamlardan (ve boşluktan) oluşabilir (10-14)");
			mobileMsg.addClass("error");
			return false;
		}
	}
	function validateTCKN(){
		var a = $("#tckn").val();
		var filter = /^[0-9]{11}$/;

		if(filter.test(a)){
			tckn.removeClass("error");
			tcknMsg.text("TCKN");
			tcknMsg.removeClass("error");
			return true;
		}

		else{			
			tckn.addClass("error");
			tcknMsg.text("TCKN sadece rakamlardan oluşabilir (11 hane)");
			tcknMsg.addClass("error");
			return false;
		}
	}

});