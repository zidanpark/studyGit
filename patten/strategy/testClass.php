<?
    class tesCtlass {        

        private $duckType = "";
        private $flyType;

        function __construct($duckType){
            $this->duckType = $duckType;
        }

        public function getAll(){
            return $this;
        }

        public function flyingBehavior(Flying $flyType){
            $this->flyType = $flyType->fly();
        }


        public function productDuck(){
            $duckProduct = array(
                "type"=>$this->duckType,
                "fly"=>$this->flyType
            );  
            return (object)$duckProduct;
        }
    }

    interface Flying {
        function fly();
    }

    class simpleFlying implements Flying {
        function fly(){ 
            $msg = "저는 평범하게 날아요";
            return $msg;
        }
    }

    class noFlying implements Flying {
        function fly(){ 
            $msg = "저는 날지 못합니다.";
            return $msg;
        }
    }    