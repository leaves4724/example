<?php
class OrderDishes
{
    public $selected = array();
    public $sum = 0;
    public $dish = array(
        array("exit"),
        array("name" => "kung-pao chicken", "price" => 25),
        array("name" => "sweet and sour pork ribs", "price" => 30),
        array("name" => "mapo beancurd", "price" => 28),
        array("name" => "fish-flavored pork", "price" => 26),
    );

    public function showDishes()
    {
        foreach ($this->dish as $k => $v) {
            if ($k == 0) continue;
            print(($k) . "." . $this->dish[$k]["name"] . "\n");
        }
    }

    public function selectDishes()
    {
        echo "Please input the No. or 0 to exit: ";
        $order = trim(fgets(STDIN));
        if ($order == 0) return false;
        $this->selected[] = $order;
        $this->sum += $this->dish[$order]["price"];
        return true;
    }

    public function printSelected()
    {
        foreach ($this->selected as $v) {
            print($this->dish[$v]["name"] . "\n");
        }
        print("sum:" . $this->sum);
    }
    public function execute(){
        while (true) {
            // print dish
            $this->showDishes();
            // select dish
            if (!$this->selectDishes()) break;
        }
        $this->printSelected();
    }
}

(new OrderDishes())->execute();
