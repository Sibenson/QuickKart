<?php 
class Vehiles
{
     function __construct($fname,$lname){
        $this->fname = $fname;
        $this->lname = $lname;
     }
     function xyz{
        echo $this->name;
}
    function anyname(){
        echo 'My name is'$this->fname " " $this->lname;
    }
}
$abc = new Vehiles('ram','hari');
$abc->anyname();
?>
