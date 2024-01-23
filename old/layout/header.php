<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php if(!empty($title)) { echo $title; } else { echo "Web Programming - PHP"; } ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
<style>
  a:link, a:visited, .nav-link,.navbar-brand {
    color: white;
}
table  a:link, table a:visited {
    color: blue;
}
.answer {
  background-color: beige;
  border-style: groove;
  padding: 5px;
}
ul.sidebar{
  list-style: none;
  margin-left:0px;
  padding-left:0px;
}

ul.sidebar > li {
  padding: 10px;
  background: #312058c7;
  margin-bottom: 10px; 
}

h2 {
  font-size: 16px;
  font-style: italic;
  font-variant: small-caps;
  border-bottom:1px solid #CCC;
  border-top:1px solid #CCC;
}
      input:invalid {
        border: 2px dashed red;
      }

      input:invalid:required {
        background-image: linear-gradient(to right, pink, lightgreen);
      }

      input:valid {
        border: 2px solid black;
      }


    </style>
  <script src="../layout/js/site.js"> </script>
</head>
<body>
  <div class="container" >
    <div class="row" style="margin-top:5px;">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../layout/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../layout/ex1.php">Exercise 1</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="../layout/variable.php">Exercise 3</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgb(209 225 133 / 43%);">
    <h4>List of Tasks</h4>
      <ul class="sidebar"> 
        <li><a href="../layout/sinput.php">Simple Input </a></li>
        <li><a href="../layout/browser.php">Detect Browser </a></li>
        <li><a href="../layout/js2.php">Form Validations </a></li>
  </ul>
  <h4>Simple CRUD APP</h4>
      <ul class="sidebar"> 
      <li >
          <a  href="../crud/form.php">Create</a>
        </li>
        <li >
          <a  href="../crud/retrieve.php">Retrieve</a>
        </li>
  </ul>

  <h4>Simple CRUD APP - InClass</h4>
      <ul class="sidebar"> 
      <li >
          <a  href="../crud1/create.php">Create</a>
        </li>
        <li >
          <a  href="../crud1/read.php">Retrieve</a>
        </li>
  </ul>
    </div>
    <div class="col-sm-9" >