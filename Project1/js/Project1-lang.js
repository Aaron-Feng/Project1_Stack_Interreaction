$('#fontAri').click(function(){
	$('body').css("font-family","Arial");
});

$('#fontTime').click(function(){
	$('body').css("font-family","TimesNewRoman");
});

$('#fontCali').click(function(){
	$('body').css("font-family","Calibri");
});

$('#fontSizeI').click(function(){
	var mySize = $('body').css("font-size"); 
    var textFontSize = parseFloat(mySize , 10);
    var unit = mySize.slice(-2); 
    textFontSize += 2;
	$('body').css("font-size",  textFontSize + unit );
	$('button').css("font-size",  textFontSize + unit );
	$('textarea').css("font-size",  textFontSize + unit );
});

$('#fontSizeD').click(function(){
	var mySize = $('body').css("font-size"); 
    var textFontSize = parseFloat(mySize , 10);
    var unit = mySize.slice(-2); 
    textFontSize -= 2;
	$('body').css("font-size",  textFontSize + unit );
	$('button').css("font-size",  textFontSize + unit );
	$('textarea').css("font-size",  textFontSize + unit );
});

$('#fontStyleBold').click(function(){
	if(this.checked){
	$('body').css("font-weight","bold");
	$('button').css("font-weight","bold");
	$('textarea').css("font-weight","bold");
	}
	else{
	$('body').css("font-weight","");
	$('button').css("font-weight","");
	$('textarea').css("font-weight","");	
	}
});
	
$('#fontStyleUnderline').click(function(){
	if(this.checked){
	$('body').css("text-decoration","underline");
	$('button').css("text-decoration","underline");
	$('textarea').css("text-decoration","underline");
	}
	else{
	$('body').css("text-decoration","");
	$('button').css("text-decoration","");
	$('textarea').css("text-decoration","");	
	}
});

$('#fontStyleItalic').click(function(){
	if(this.checked){
	$('body').css("font-style","italic");
	$('button').css("font-style","italic");
	$('textarea').css("font-style","italic");
	}
	else{
	$('body').css("font-style","");
	$('button').css("font-style","");
	$('textarea').css("font-style","");	
	}
});

$('#langCn').click(function(){
	$("[data-localize]").localize("lang",{pathPrefix:"lang",language:"cn"});
});

$('#langEn').click(function(){
	$("[data-localize]").localize("lang",{pathPrefix:"lang",language:"en"});
});
