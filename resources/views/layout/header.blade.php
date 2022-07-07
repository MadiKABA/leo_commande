<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png');}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png');}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css');}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css');}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css');}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css');}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css');}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css');}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="{{asset('lib/chart-master/Chart.js');}}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>AFRI<span>DEV</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
   
          
    
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/logo_afridev.png');}}" class="img-circle" width="80"></a></p>
          <h5 class="centered"></h5>
          <li class="mt">
            <a class="active" href="home">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa-solid fa-clock-rotate-left"></i>
              <span>Historique</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('mouvement.index')}}">list</a></li>
              <li><a href="formAddEntreprise">add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Produits</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('produits.index')}}">list</a></li>
              <li><a href="formAddEntreprise">add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Ventes</span>
              </a>
            <ul class="sub">
              <li><a href="listEntreprise">list</a></li>
              <li><a href="formAddEntreprise">add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="mouvementsEntreStock}">
              <i class="fa fa-th"></i>
              <span>Entre STOCK</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          