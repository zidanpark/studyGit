<?
include "./itf/crawInterface.php";
include "./itf/flyInterface.php";

class tesCtlass {

    private $duckType = "";
    private $flyType;
    private $crawType;

    function __construct($duckType){
        $this->duckType = $duckType;
    }

    public function getAll(){
        return $this;
    }

    public function flyingBehavior(Flying $flyType){
        $this->flyType = $flyType->fly();
    }

    public function crawingBehavior(Crawing $crawType){
        $this->crawType = $crawType->crawing();
    }


    public function productDuck(){
        $duckProduct = array(
            "type"=>$this->duckType,
            "fly"=>$this->flyType,
            "crawing"=>$this->crawType

        );
        return (object)$duckProduct;
    }
}

