class Produto{
    private $codigo;
    private $descricao;
    private $quantidade;
    private $valor;

    public function _construct($codigo, $descricao, $quantidade, $valor){
        $this -> codigo = $codigo;
        $this -> descricao = $descricao;
        $this -> quantidade = $quantidade;
        $this -> valor = $valor;
    }

    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }

    public funciton getCodigo($codigo){
        return $this -> codigo = $codigo;
    }
    
    public function setDescricacao($descricacao){
        $this -> descricacao = $descricacao;
    }

    public funciton getDescricacao($descricacao){
        return $this -> descricacao = $descricacao;
    }

    public function setQuantidade($quantidade){
        $this -> quantidade = $quantidade;
    }

    public funciton getQuantidade($quantidade){
        return $this -> quantidade = $quantidade;
    }

    public function setValor($valor){
        $this -> valor = $valor;
    }

    public funciton getValor($valor){
        return $this -> valor = $valor;
    }

    public toString(){
        $txt = "Código: " . $this -> codigo . "<br>";
        $txt += "Descrição: " . $this -> descricao . "<br>";
        $txt += "Quantidade: " . $this -> quantidade . "<br>";
        $txt += "Valor: " . $this -> valor . "<br>";
        return $txt;
    }
}