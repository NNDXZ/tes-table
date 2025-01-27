<?php
  $id_petugas   = $_SESSION['id_petugas'];
  $nama_petugas = $_SESSION['nama_petugas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Judul Browser -->
  <title>Lelang Online | <?= $judul ?></title>
  <!-- Icon Browser -->
  <link rel="shorcut icon" type="text/css" href="img/logo-02-min.jpg">

  <!-- CSS -->
  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/sb-admin-2.min.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css" >
  <link rel="stylesheet" href="css/component-chosen.css" />

  <style>
    tr>th{
      text-align: center !important;
      background: rgb(100, 149, 237);
      color: black;
    }
    tr>td{
      vertical-align: middle !important;
      color: black;
      background-color: white;
    }
    hr.hr{
      border: 0; 
      height: 1px; 
      background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
      background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
      background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
      background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
      width: 50%;
      margin-top: -5px;
    }
    .lebar{
      display: block;
      width: 150px;
      height: 32px;
      line-height: 32px;
      text-align: left !important;
      font-size: 14px;
      padding: 0px 0px 0px 10px;
    }
    span.fa-trash:hover{cursor: pointer;}
    i.fa-trash:hover{cursor: pointer;}
    .nav-item:hover{background-color: rgb(100, 149, 237);}
  </style>
</head>
<body id="page-top">
	<div id="wrapper">
   