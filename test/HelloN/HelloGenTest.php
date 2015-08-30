<?php
namespace Tests\HelloN;

use HelloN\HelloGen;
use PHPUnit_Framework_TestCase;

class HelloGenTest extends PHPUnit_Framework_TestCase
{
  public function messageProvider()
  {
    return array(
      [0,'Hello World, Composer!'],
      [1,'Ifmmp Xpsme, Dpnqptfs!'],
      [2,'Jgnnq Yqtnf, Eqorqugt!'],
      [3,'Khoor Zruog, Frpsrvhu!'],
      [4,'Lipps Asvph, Gsqtswiv!'],
      [5,'Mjqqt Btwqi, Htrutxjw!'],
      [6,'Nkrru Cuxrj, Iusvuykx!'],
      [7,'Olssv Dvysk, Jvtwvzly!'],
      [8,'Pmttw Ewztl, Kwuxwamz!'],
      [9,'Qnuux Fxaum, Lxvyxbna!'],
      [10,'Rovvy Gybvn, Mywzycob!'],
      [11,'Spwwz Hzcwo, Nzxazdpc!'],
      [12,'Tqxxa Iadxp, Oaybaeqd!'],
      [13,'Uryyb Jbeyq, Pbzcbfre!'],
      [14,'Vszzc Kcfzr, Qcadcgsf!'],
      [15,'Wtaad Ldgas, Rdbedhtg!'],
      [16,'Xubbe Mehbt, Secfeiuh!'],
      [17,'Yvccf Nficu, Tfdgfjvi!'],
      [18,'Zwddg Ogjdv, Ugehgkwj!'],
      [19,'Axeeh Phkew, Vhfihlxk!'],
      [20,'Byffi Qilfx, Wigjimyl!'],
      [21,'Czggj Rjmgy, Xjhkjnzm!'],
      [22,'Dahhk Sknhz, Ykilkoan!'],
      [23,'Ebiil Tloia, Zljmlpbo!'],
      [24,'Fcjjm Umpjb, Amknmqcp!'],
      [25,'Gdkkn Vnqkc, Bnlonrdq!'],
    );
  }

  /**
   * @dataProvider messageProvider
   */
  public function testRot($n, $expected)
  {
    $output = HelloGen::rotate($n);
    $this->assertEquals($output, $expected, sprintf('ROT%d Failed!', $n));
  }
}
