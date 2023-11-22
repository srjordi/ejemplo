<?php
class calcular 
{
    public function cuadradoA($l)
    {
        $result = $l * $l;
        echo"el area del cuadrado es: ".$result;
    }


}
class calcular1 
{


    public function rectanguloA($base,$altura)
    {
        $result1 = $base * $altura;
        echo"el area del rectangulo es: ".$result1;
    }
}

class calcular2
{


    public function trianguloA($base1,$altura1)
    {
        $result2 = ($base1 * $altura1)/2;
        echo"el area del triangulo es: ".$result2;
    }
}

//$l=5;
//$obj=new calcular();
//$obj ->cuadradoA($l);

?>