<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team HAGI">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="dash/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dash/css/cover.css" rel="stylesheet">
    <link href="dash/css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <!--<h3 class="masthead-brand">Cover</h3>-->
              <ul class="nav masthead-nav">
                <li class="active"><a href="https://philgeps.gov.ph/" target="_blank">PhilGEPS</a></li>
                <li><a href="http://data.gov.ph/" target="_blank">Open Data</a></li>
                <li><a href="http://i.gov.ph/" target="_blank">iGov</a></li>
                <li><a href="elearning" target="_blank">eLearning</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <!--<h1 class="cover-heading">iQuery</h1>--><img src="logo.png" width="400" /><br/>
            <p class="lead">
              <select id="search-dropdown">
                <option value="volvo">Approved Budget</option>
                <option value="saab">Query 2</option>
                <option value="mercedes">Query 3</option>
                <option value="audi">Query 4</option>
              </select>
              <a type="button" href="/approved_budget" class="search btn">Search</a>
              </p>
            <p class="lead">
              <a href="/query" class="btn btn-lg btn-default adv-search">Advanced Search</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>HAGI &copy; 2014. All rights reserved.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dash/js/bootstrap.min.js"></script>
    <script src="dash/js/docs.min.js"></script>
  </body>
</html>