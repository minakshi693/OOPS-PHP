<?php 
class student
{
    protected $name, $age, $marks;
    public function __construct()
    {
        $n = func_num_args();
        if($n==3){
            $this->name = func_get_arg(0);
            $this->age = intval(func_get_arg(1));
            $this->marks = intval(func_get_arg(2));
        }
}
    public function getDetails()
    {
        echo "name: $this->name\nage: $this->age\, marks: $this->marks\n";
    }
}
class engg extends student
{
    private $branch;
    public function __construct()
    {
        $n = func_num_args();
        if($n == 4){
            parent::__construct(func_get_arg(0),func_get_arg(1),func_get_arg(2));
            $this->branch=(func_get_arg(3));
        }
    }
    public function getDetails()
    {
        parent::getDetails();
        echo "branch: $this->branch\n";
    }
}
$s1 = new engg("xyz",20,340,"CSE");

$s1->getDetails();
?>


