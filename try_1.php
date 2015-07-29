<?php

class try_1
{
	private $pdo;
	
	public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
	
	public function test_fn($num1,$num2){
		$tot=$num1+$num2;
		echo "The total ".$tot;
		return $tot;
	}	
}

?>