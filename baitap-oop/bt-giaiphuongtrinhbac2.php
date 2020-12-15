<?php
class QuadraticEquation{
    private $a;
    private $b;
    private $c;
   public function __construct($a,$b,$c){
       $this->a =$a;
       $this->b =$b;
       $this->c =$c;
   }
   public function getA(){
       return $this->a;
}
public function getB(){
       return $this->b;
}
public function getC(){
       return $this->c;
}
public function setA($a){
       $this->a = $a;
}
public function setB($b){
       $this->b = $b;
}
public function setC($c){
       $this->c = $c;
}
 function getDiscriminant()
    {
        $delta = pow($this->b, 2) - 4 * $this->a * $this->c;
        return $delta;
    }

function getRoot1()
{
    $x1 = (-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
    return $x1;
}

function getRoot2()
{
    $x2 = (-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
    return $x2;
}
}
?>
<html>
<style>

    .inline {
        display: inline-block;
        margin: 3em;
    }

    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>


<fieldset class="inline">
    <legend>
        <h1>Giải phương trình bậc 2: </h1>
    </legend>
    <form method="POST">
        <input type="number" step="any" name="a" placeholder="Nhập a"><br>
        <input type="number" step="any" name="b" placeholder="Nhập b"><br>
        <input type="number" step="any" name="c" placeholder="Nhập c"><br><br>
        <input type="submit" id="submit" value="Submit">
    </form>

    <?php

    if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])) {

        $solveEqua = new QuadraticEquation($_POST['a'], $_POST['b'], $_POST['c']);

        if ($solveEqua->getDiscriminant() > 0) {

            echo "PT có nghiệm x1 = " . $solveEqua->getRoot1() . "<br>";
            echo "PT có nghiệm x2 = " . $solveEqua->getRoot2();

        } elseif ($solveEqua->getDiscriminant() == 0) {
            echo "PT có nghiệmx1 = x2 = " . $solveEqua->getRoot1();
        } else {
            echo "PT vô nghiệm.";
        }

    }

    ?>
</fieldset>
</html>
