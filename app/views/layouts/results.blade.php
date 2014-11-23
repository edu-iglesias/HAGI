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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix results">
            <div class="inner">
              <h3 class="masthead-brand">iQuery</h3>
              <div class="col-xs-12 col-md-7 results-search">
              <select id="search-dropdown" style="width: 74%">



                <option value="volvo"></option>
                <option value="saab">Query 2</option>
                <option value="mercedes">Query 3</option>
                <option value="audi">Query 4</option>
              </select>
            
              <button type="button" class="search">Search</button>
              </div>
              <ul class="nav masthead-nav">
                <li class="active"><a href="https://philgeps.gov.ph/" target="_blank">PhilGEPS</a></li>
                <li><a href="http://data.gov.ph/" target="_blank">Open Data</a></li>
                <li><a href="http://i.gov.ph/" target="_blank">iGov</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <!--<h1 class="cover-heading">ERD</h1><br/>-->
            <p class="lead">
              <div class="col-xs-12 col-md-6 results">
                <div>
                  <h2>Lorem ipsum dolor sit amet</h2>
                  <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <hr />
                <div>
                  <h2>Lorem ipsum dolor sit amet</h2>
                  <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div><br/>
              <div class="col-xs-12 col-md-6 results">
                <div class="panel panel-default adv-panel col-centered">
                  
                      @yield('chart')
                  
                </div>
              </div>
            </p>
          </div><br/>

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