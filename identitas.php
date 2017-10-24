<?php
class identitas{

public $nama;
public $tempat_lahir;
public $kelas;
public $status;

	public function __construct($nama, $tempat_lahir, $kelas, $status)
	{
		$this->nama = $nama;
		$this->tempat_lahir = $tempat_lahir;
		$this->kelas = $kelas;
		$this->status = $status;
	}

	public function get_nama()
	{
		return $this->nama;
	}

	public function get_tl()
	{
		return $this->tempat_lahir;
	}

	public function get_kelas()
	{
		return $this->kelas;
	}

	public function get_status()
	{
		return $this->status;
	}
}
?>
