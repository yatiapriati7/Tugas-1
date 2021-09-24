<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    { 
    echo "<center><p><B>BERIKUT ADALAH DATA DIRI SAYA  </B></p>";
        $index =[
        	"Nama"=>"Yati Apriati",
            "Nim"=>" TI16190018 ",
        	"Alamat"=>" Bunsumpak, Puyung "];
            echo "Nama :".$index["Nama"]."<br>";
            echo "Nim :".$index["Nim"]."<br>";
            echo "Alamat :".$index["Alamat"]."<br></center>";
        return view('Home', $index);
    }

    public function Hobi()
    {
    	echo "<center><p><B>BERIKUT ADALAH HOBI SAYA </B></p>";
        $hobi = [" Memasak "," Menghalu "," Rebahan "," Mencari Keributan"," Gosip "];
        	
            echo $hobi[0]."<br>"."<br>";
            echo $hobi[1]."<br>"."<br>";
            echo $hobi[2]."<br>"."<br>";
            echo $hobi[3]."<br>"."<br>";
            echo $hobi[4]."<br>"."<br></center>";

        return view('Hobi', $hobi);
    }
    public function riwayat_pendidikan()
    {
    	echo "<center><p><B>BERIKUT ADALAH DAFTAR RIWAYAT PENDIDIKAN SAYA</B></p></center>";
    	
    	$pendidikan= ["nama sekolah"=> "SDN BUNSUMPAK",
    					"Tahun lulus"=>  2013,];
    				echo "<center> <p>1. SD <br></p>nama sekolah : ".$pendidikan["nama sekolah"]."<br>"; 
    				echo "Tahun lulus : ".$pendidikan["Tahun lulus"]."<br>"."<br>";
      
    	$pendidikan=["nama sekolah"=>"MTS NW PUYUNG",
    				"Tahun lulus"=>2016,];

    		echo "<center><p>2. MTS <br></p>nama sekolah : ".$pendidikan["nama sekolah"]."<br>"; 
    		echo "Tahun lulus : ".$pendidikan["Tahun lulus"]."<br>"."<br>";


    	//MAN
    		$pendidikan=["nama sekolah"=>"MAN 2 loteng",
    				"jurusan"=>"MIPA",
    				"Tahun lulus"=>2019,];
    		echo "<p>3. MAN <br></p>nama sekolah : ".$pendidikan["nama sekolah"]."<br>"; 
    		echo "Tahun lulus : ".$pendidikan["Tahun lulus"]."<br>";
    		echo "jurusan : ".$pendidikan["jurusan"]."<br>"."<br>";

    	//kuliah
    		$pendidikan=["nama kampus"=>"STMIK LOMBOK",
    				"Prodi"=>"Tehnik Informatika",
    				"Semester"=> 5,
    				];

    		echo "<p>4. KULIAH <br></p>nama kampus : ".$pendidikan["nama kampus"]."<br>"; 
    		echo "Semester : ".$pendidikan["Semester"]."<br>";
    		echo "Prodi : ".$pendidikan["Prodi"]."<br>"."<br>";
 
 
 
        return view('riwayat_pendidikan',$pendidikan);
    }
}
