<?
    class Cacheir{
        
        private $message;
        public $user = "Cacheir"; 
        private $orderBehavior;
        function __construct(){
            $this->message = "무엇을 도와 드릴까요?";
            $this->orderBehavior = new OrderBehavior();
            $this->index();

        }

        function index(){
            $this->getMessage();
            $this->orderBehavior->customOrderBehavior();
        }
        
        function getMenu(){
            $this->message = "현재 가능한 메뉴는 아메리카노 입니다.";
            $this->getMessage();
        }

        function getMessage(){
            echo $this->user . ": " .$this->message."<br>";
        }
    
    }