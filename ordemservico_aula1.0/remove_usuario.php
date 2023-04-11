<?php 
	require_once("valida_session.php");
	require_once ("bd/bd_usuario.php");

	$codigo = $_GET['cod'];

	if($codigo == $_SESSION['cod_usu']){
		$_SESSION['texto_erro'] = 'Os dados do usuario não foram excluidos, você não pode modificar seu proprio';
		header("Location:usuario.php");
	}
	else{
		$dados = removeUsuario($codigo);

		if($dados == 0){
			$_SESSION['texto_sucesso'] = 'Os dados do usuário foram excluidos do sistema!';
			header ("Location:usuario.php");
		}else{
			$_SESSION['texto_erro'] = 'Os dados do usuário não foram excluidos do sistema.';
			header ("Location:usuario.php");
		}
	}	
?>