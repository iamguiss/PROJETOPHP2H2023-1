<?php 
	print("Usando print para exibir na tela <br>");
	
	$data = "01 de março de 2023";
	$salario = 1530.00;
	$cargo = 'Estagiário';

	echo "Arquivo criado em $data <br>";

	printf("Salário mínimo: R$ %.2f <br>", $salario);

	$texto=sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);

	echo $texto;
 ?>