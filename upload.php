<?php
	$arquivo = $_FILES['arquivo'] || FALSE;

	if($arquivo){
		$origem = $_FILES['arquivo']['tmp_name'];
		if (move_uploaded_file($origem, 'anexo.png') == 0) {
			echo 'Sucesso';
		}else{
			echo 'Fracasso: na hora de copiar o arquivo para destino.';
		}

	}else{
		echo "Fracasso: o arquivo nem foi submetido.";
	}
?>