<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standart Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "AL alim";
// echo "Halo, nama saya $nama";

// operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "AL";
// $nama_belakang = "Alim";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "AL";
// $nama .= " ";
// $nama .= "Alim";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1");

// logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);