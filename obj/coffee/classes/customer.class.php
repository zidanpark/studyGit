<?
    class Customer {

        private $user;
        private $message;
        private $menu;
        private $cacheirBehavior;

        function __construct(){
            $this->user = "고객";
            $this->cacheirBehavior = new CacheirBehavior();
        }

        function customOrder(){
            $menu = $this->getInstanceMenu();
            if(!isset($menu)){
                $this->message = "어떤 메뉴가 있나요?";
                $this->getMessage();
                $this->cacheirBehavior->cacheirOrderBehavior();
                
            }
            
            
        }
        
        function getInstanceMenu(){
            return $this->menu;
        }

        function getMessage(){
            echo $this->user . ": " .$this->message."<br>";
        }
    }
