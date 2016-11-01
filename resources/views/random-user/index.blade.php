@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('content')
  Hi from upgraded Random User View!!


<hr>

<table>
<?php

use \faker\Faker\Factory;

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties

for ($i=0; $i < 10; $i++) {
  echo '<tr>';
  echo '<td> <img src="'.$faker->imageUrl($width = 30, $height = 40).'" alt="Avatar"></td>';
  echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
  echo '<td> <b>'.$faker->name.'</b></td>';
  echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
  echo '<td>'. $faker->date($format = 'Y-m-d', $max = '2000-01-01') .'</td>';
  echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
  echo '<td>'.$faker->address.'</td>';
  echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
  echo '<td>'.$faker->text($maxNbChars = 200).'</td>';
  echo '</tr>';
  echo '<tr><td>&nbsp;</td></tr>';
}
?>
</table>

<hr>

<?php
$random = new Random();
 echo $random->getRandomString(8);
 ?>

@stop
