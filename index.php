<?php include "inc/header.php";?>
    
    <div class="para">
      <?php
        class UserData{
            public $user;
            public $userid;

            
            function __construct($userName, $userId){
                $this->user = $userName;
                $this->userid =$userId;
           }
             
            public  function display(){
                 echo "User Name {$this->user} and user Id:{$this->userid}";
             }
        }
        
        class Admit extends UserData{
            public $level;
             public  function displays(){
                 echo "User Name {$this->user} and user Id:{$this->userid} and user level {$this->level}";
             }
        }

        echo "Main class<br>";
         $name = "Md.Rauysul kobir";
         $id = 12345;
         $ur = new UserData($name, $id);
         $ur->display();

         echo "Child class <br>";
         $ab = new Admit($name, $id);
         $ab ->level = "Md.Akram miya";
         $ab->displays()
       
      ?>
      
       
    </div>
<?php include "inc/footer.php"; ?>