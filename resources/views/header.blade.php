@extends('index')
@section('header')
<div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
    <div class="logo">
      <a href="dashboard.html" class="simple-text logo-normal">
        Quiz Patente
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.html">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="create-account.html">
            <i class="material-icons">person</i>
            <p>Create school</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="material-icons">content_paste</i>
            <p>School Accounts</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="features.html">
            <i class="material-icons">notifications</i>
            <p>Features</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="packages.html">
            <i class="material-icons">bubble_chart</i>
            <p>packages</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create-licenses.html">
            <i class="material-icons">language</i>
            <p>licenses</p>
          </a>
        </li>
      </ul>
    </div>
  </div>  
  @endsection