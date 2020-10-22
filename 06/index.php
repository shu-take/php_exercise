<?php

class Car
{
    private $name;
    private $number;
    private $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function infomation()
    {
        $this->infomation = '車の車種:' . $this->getName() . '、車体番号:' . $this->getNumber() . '、カラー:' . $this->getColor() . 'です。';
        return $this->infomation;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

class Taxi extends Car
{
    private $passenger = 0;

    public function infomation()
    {
        return parent::infomation() . '乗車人数は' . $this->passenger . '人です';
    }

    public function error($num)
    {
        if ($num > 0 && is_int($num)) {
            return true;
        }
    }

    public function pickup($num)
    {
        if ($this->error($num)) {
            $this->passenger += $num;
        }
        else {
            echo '降車人数に誤りがあります';
        }
        
    }

    public function lower($num)
    {
        if ($this->error($num)) {
            if (($this->passenger - $num) >= 0) {
                $this->passenger -= $num;
                echo $num . '人降車しました';
            }
            else {
                echo '降車人数に誤りがあります';
            }
        }
        else {
            echo '降車人数に誤りがあります';
        }
        
    }

}


// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);