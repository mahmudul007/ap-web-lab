<?php

class student
{
    public $name;
    public $id;
    public $dob;
    public $courses=[];
    function showinfo()
    {
echo "name: $this->name";
echo "id: $this->id";
echo "dob: $this->dob";
    }

    function addcourse($coursename){
       $this->courses[] = $coursename;
    }
    function showallcourse()
    {
        echo "Name:$this->name <br>";
        echo "Id:$this->id <br>";
        echo "dob: $this->dob <br>";
        foreach($this->courses as $c){
            echo "$c <br>";
        }

    }
}
$student1= new student();
$student1->name=("rahim");
$student1->id=(123);
$student1->dob=(12-3-2222);
$student1->addcourse("pl2");
$student1->addcourse("p3");
$student1->showallcourse();


?>