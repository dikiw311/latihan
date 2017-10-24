<?php 
echo '<b>'."Persegi Panjang".'</b>'." (Panjang(5cm) & Lebar(4cm))".'<br>';
class persegipanjang{
	public $p,$l;

	function set_luas($panjang,$lebar){
		$this->p = $panjang;
		$this->l = $lebar;
	}
	function get_luas(){
		return $this->p * $this->l;
	}
	function get_keliling(){
		return 2 *($this->p + $this->l);
	}
}

	$persegipanjang1 = new persegipanjang;
    $persegipanjang1->set_luas(5,4);
    echo "Luas Persegi Panjang = ".$persegipanjang1->get_luas().'<br>';
    echo "Keliling Persegi Panjang = ".$persegipanjang1->get_keliling().'<br>';
    echo "============================================================".'<br>';

echo '<b>'."Persegi".'</b>'." (Sisi(6cm))".'<br>';
class persegi{
	public $s1,$s2;

	function set_luas($sisi1,$sisi2){
		$this->s1 = $sisi1;
		$this->s2 = $sisi2;
	}
	function get_luas(){
		return $this->s1 * $this->s2;
	}
	function get_keliling(){
		return $this->s1 * 4;
	}
}
	$persegi1 = new persegi;
    $persegi1->set_luas(6,6);
    echo "Luas Persegi = ".$persegi1->get_luas().'<br>';
    echo "Keliling Persegi = ".$persegi1->get_keliling().'<br>';
    echo "============================================================".'<br>';

    echo '<b>'."Segitiga".'</b>'." (Alas(10cm) & Tinggi(8cm))".'<br>';
class segitiga{
	public $a,$t;

	function set_luas($alas,$tinggi){
		$this->a = $alas;
		$this->t = $tinggi;
	}
	function get_luas(){
		return $this->a * $this->t / 2;
	}
	function get_keliling(){
		return $this->a * 3;
	}
}
	$segitiga1 = new segitiga;
    $segitiga1->set_luas(10,8);
    echo "Luas Segitiga = ".$segitiga1->get_luas().'<br>';
    echo "Keliling Segitiga = ".$segitiga1->get_keliling().'<br>';
    echo "============================================================".'<br>';
?>