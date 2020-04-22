<html>
    <body><?php
class Oop{
    private $name;
    public void setName($name){
        $this->name=$name;
    }
    public getName(){
        return $this->name;
    }
    
    $obj=new Oop();
    $obj->setName('Yogesh');
    echo $obj->getName();
}
        ?></body></html>