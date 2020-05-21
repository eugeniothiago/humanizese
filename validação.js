// JavaScript Document
	
	function validarSenha(){
  	var NovaSenha = document.getElementById('NovaSenha').value;
   	var CNovaSenha = document.getElementById('CNovaSenha').value;
	if (NovaSenha != CNovaSenha) {
		alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS");
		document.Formsenha.NovaSenha.focus(); 
	}else{
		document.FormSenha.submit();
	}
}
	function checkbox(){
		var checado= document.Form.getElementById('check').checked;
			if (checado== false){
				alert ("Você precisa concordar com os Termos de Uso para concluir seu cadastro!");
				document.Formsenha.check.focus();
				return false;
			}
			else {
				return true
			}
}