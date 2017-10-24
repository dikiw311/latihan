<?php 


class sapi {
	public $suara;
	public $berat;
	

	public function set_suara($suara){
		$this->suara = $suara;
	}
	public function get_suara(){
		return $this->suara;
	}
	public function set_berat($berat){
		$this->berat = $berat;
	}
	public function get_berat(){
		return $this->berat;
	}


}

$sapi1 = new sapi ;
$sapi1->set_suara("Mowww...Mowww");
$sapi1->set_berat(85);
echo "Sapi saya bersuara :".$sapi1->get_suara(). '<br>';
echo "Sapi saya mempunyai berat :".$sapi1->get_berat().' Kg'. '<br>';


?>