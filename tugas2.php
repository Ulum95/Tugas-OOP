<?php

interface Hewan
{
  public function berjalan();
  public function makan();
  public function bersuara();
  public function berkendara();
}
class Monyet implements Hewan
{
  public function berjalan()
  {
    return "Monyet dapat berjalan, ";
  }
  public function makan()
  {
    return "makan, ";
  }
  public function bersuara()
  {
    return "dan bersuara, ";
  }
  public function berkendara()
  {
    return "Monyet apabila dilatih akan bisa berkendara seperti naik sepeda.";
  }
}
$Monyet1 = new Monyet;
echo $Monyet1->berjalan();
echo $Monyet1->makan();
echo $Monyet1->bersuara();
echo $Monyet1->berkendara();
