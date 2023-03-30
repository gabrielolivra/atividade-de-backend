<?php
abstract class Cinema{
        protected $ingressos = 20;
        public $filme = array( 1=> "A Esposa De Tchaikovsky", 2=>"A invenção do outro", 3=> "Pânico 6");
        public $sala = array(1=>"Sala 1A", 2=>"Sala 1B", 3=> "Sala 1C");
        public $cliente = array(1=> 30, 2=>46, 3=>29);
        abstract protected function Filmes();
        abstract protected function Salas();
        abstract protected function Ingressos();
        abstract protected function Clientes();
}
class OrientCinemas extends Cinema{
public function Filmes(){
    echo "Os filmes disponiveis são:". $this->filme[1] ." | ".  $this->filme[2] ." | ".  $this->filme[3] ."\n\n" ;
}
    public function Salas(){
        
        echo "Na ".$this->sala[1]. " está passando o filme ".$this->filme[1]. " \n";
        echo "Na ".$this->sala[2]. " está passando o filme ".$this->filme[2]. " \n";
        echo "Na ".$this->sala[3]. " está passando o filme ".$this->filme[3]. " \n \n";
    }
    
    public function Ingressos(){
        
        echo"O valor dos ingressos é de " . $this->ingressos . "reais nos ".count($this->filme)." filmes"." \n \n";
    }
    
    public function Clientes(){
        echo "Na ".$this->sala[1]. " há ".$this->cliente[1]." pessoas e está passando o filme ".$this->filme[1]. " \n";
        echo "Na ".$this->sala[2]. " há ".$this->cliente[2]." pessoas e está passando o filme ".$this->filme[2]." \n";
        echo "Na ".$this->sala[3]. " há ".$this->cliente[3]." pessoas e está passando o filme ".$this->filme[3]. " \n";
    }
    
}
$cinema1 = new OrientCinemas();
$cinema1->Filmes();
$cinema1 ->Salas();
$cinema1 ->Ingressos();
$cinema1 ->Clientes();

