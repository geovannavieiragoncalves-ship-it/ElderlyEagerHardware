// <?php
// class Pessoa{
//     public $nome;
//     public $idade;

//   public function __construct($nome, $idade){
//     $this->nome = $nome;
//     $this->idade = $idade;
//   }

//   public function apresentar(){
//     return "Olá, meu nome é $this->nome e tenho $this->idade anos de idade.\n";
//    }

//    public function verificarIdade(){
//      // if($this->idade >= 18){
//      //   return "$this->nome é maior de idade.\n";
//      // }else{
//      //   return "$this->nome é menor de idade.\n";
//      // }
     
//      return ($this->idade >= 18) ? "$this->nome é maior de idade.\n" : "$this->nome é menor de idade.\n";
//    }
// }

// // $Ana = new Pessoa("Ana", 28);
// // $Bruno = new Pessoa("Bruno", 16);
// // $Carla = new Pessoa("Carla", 21);
// // $Diego = new Pessoa("Diego", 14);
// // $Eduarda = new Pessoa("Eduarda", 21);


// // echo $Ana->apresentar();
// // echo $Bruno->apresentar();
// // echo $Carla->apresentar();
// // echo $Diego->apresentar();
// // echo $Eduarda->apresentar();

// // echo $Ana->verificarIdade();
// // echo $Bruno->verificarIdade();
// // echo $Carla->verificarIdade();
// // echo $Diego->verificarIdade();
// // echo $Eduarda->verificarIdade();
// //echo "$Ana->apresentar()";

// $nomes = ["Ana", "Bruno", "Carla", "Diego", "Eduarda"];
// $idades = [28, 16, 21, 14, 21];

// for($i = 0; $i <= 4; $i++){
//   ${$nomes[$i]} = new Pessoa($nomes[$i], $idades[$i]);
// }
// ?>

// <?php
// // exercício 2 
// class Produto{
//   public $nome;
//   public $preco;
//   public $quantidade;

//   public function __construct($nome, $preco, $quantidade){
//      $this->nome = $nome;
//      $this->preco = $preco;
//      $this->quantidade = $quantidade;
//   }

//   public function valorTotal(){
//     return $this->preco * $this->quantidade;
//   }
// }

// $caneta = new Produto("Caneta", 1.50, 1000);
// echo "O valor total da " . $caneta->nome . " é de R$ " . $caneta->valorTotal() . "\n";
// $lapis = new Produto("Lápis", 0.59, 50000);
// echo "O valor total do " . $lapis->nome . " é de R$ " . $lapis->valorTotal() . "\n";
  