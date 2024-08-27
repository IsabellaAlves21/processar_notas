<?php
// Definindo a classe Aluno
class Aluno {
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;

    public function __construct($n1, $n2, $n3, $n4) {
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
        $this->nota4 = $n4;
    }

    private function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
    }

    public function exibirMedia() {
        $media = $this->calcularMedia();
        echo "<h1>Média do Aluno</h1>";
        echo "<p>A média das notas é: " . number_format($media, 2) . "</p>";
    }
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar as notas do formulário
    $nota1 = isset($_POST['nota1']) ? floatval($_POST['nota1']) : 0;
    $nota2 = isset($_POST['nota2']) ? floatval($_POST['nota2']) : 0;
    $nota3 = isset($_POST['nota3']) ? floatval($_POST['nota3']) : 0;
    $nota4 = isset($_POST['nota4']) ? floatval($_POST['nota4']) : 0;

    // Criar um objeto da classe Aluno e exibir a média
    $aluno = new Aluno($nota1, $nota2, $nota3, $nota4);
    $aluno->exibirMedia();
} else {
    echo "<p>Formulário não enviado corretamente.</p>";
}
?>
