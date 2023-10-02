<?php
class SalaVirtual{
    public $nome;
    public $quantidade_aluno;
    public $professor_responsavel;


public function nomesala($nomesala){
    if(is_string($nomesala) AND $nomesala !==NULL){
        $this->$nome == $nomesala;
    }
}

public function quant_aluno_menor($quant_aluno_menor){
    if(is_numeric($quant_aluno_menor) AND $quant_aluno_menor >=0){
        $this->$quantidade_aluno <= $quant_aluno_menor;
    }
}

public function responsavel($prof_responsavel){
    if(is_string($prof_responsavel) AND $prof_responsavel !==NULL){
        $this->$professor_responsavel == $prof_responsavel;
    }
}

}

$atributo = new SalaVirtual();
$atributo->nome = 'Desenvolvimento de Web 2';
$atributo->quantidade_aluno = 35;
$atributo->professor_responsavel = 'Orlando';

$atributo2 = new SalaVirtual();
$atributo2->nome = 'Técnica de Programação';
$atributo2->quantidade_aluno = 35;
$atributo2->professor_responsavel = 'Jeane';

var_dump($atributo);
echo "<br>";
var_dump($atributo2);

?>