<?php
$nota=rand(1,20);
switch ($nota) {
	case ($nota <8):
	print("A nota do aluno é $nota, O aluno reprovou");
		break;

	case ($nota >8 && $nota >9.4):
			print("A nota do aluno é $nota, O aluno foi admitido a exame");
			break;	

	case ($nota >9.5 && $nota >20):
			print("A nota do aluno é $nota, O aluno foi aprovado");
			break;			
	

}

?>