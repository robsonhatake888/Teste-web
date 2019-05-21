<!DOCTYPE html>
<html>
<head>
	<title>Nosso singelo formulário</title>
	<meta charset="utf-8">
</head>
<body>

<?php if ($_POST['email'] == 'robson' and $_POST['password'] == '123'): ?>

	 <h3>Login realizado com sucesso!</h3>
<?php else: ?>

<h3>Credenciais incorretas. Você vai ser redirecionado em cinco segundos</h3>
<script type="text/javascript">
	setTimeout(function(){
		window.location = 'login.html';
	}, 5000);
</script>
<?php endif; ?>

</body>
</html>