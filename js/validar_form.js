// JavaScript Document
	function valida(){
    
     if (document.getElementById("nome").value==""){
    	alert("É Necessário preencher o campo nome");
        	document.getElementById("nome").focus();
			document.getElementById("nome").style.border = "1px solid #f00";
			document.getElementById("nome").style.backgroundColor = "#FFE4E4";
			
			return false;
    	}  

		   if (document.getElementById("telefone").value==""){
		   	swal("É Necessário preencher o campo telefone","error")
        	document.getElementById("telefone").focus();
			document.getElementById("telefone").style.border = "1px solid #f00";
			document.getElementById("nome").style.backgroundColor = "#FFE4E4";
			return false;
    	}
	}
	 function Enum(num){
	if (document.all)
		var tecla = event.keyCode;
	else if(document.layers)
		var tecla = num.which;
		if (tecla > 47 && tecla < 58)
			return true;
		else
			{
				if (tecla != 8)
					event.keyCode = 0;
				else
					return true;
			}
}