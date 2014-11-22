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
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">iQuery</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="https://philgeps.gov.ph/" target="_blank">PhilGEPS</a></li>
                <li><a href="http://data.gov.ph/" target="_blank">Open Data</a></li>
                <li><a href="http://i.gov.ph/" target="_blank">iGov</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">ERD</h1><br/>
            <p class="lead">
              <div class="panel panel-default adv-panel col-centered">
                <div class="panel-body">
                  <div class="search-row">
                    <div class="col-xs-6 col-sm-3 col-lg-3">
                      <select class="search-select">
                        <option value="volvo">Query 1</option>
                        <option value="saab">Query 2</option>
                        <option value="mercedes">Query 3</option>
                        <option value="audi">Query 4</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-6">
                      <select class="search-select">
                        <option value="volvo">Query 1</option>
                        <option value="saab">Query 2</option>
                        <option value="mercedes">Query 3</option>
                        <option value="audi">Query 4</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-lg-3">
                      <input type="radio" name="operator" value="and">AND 
                      <input type="radio" name="operator" value="or" style="margin-left: 20px;">OR
                    </div>
                  </div>
                  <div class="search-row">
                    <div class="col-xs-6 col-sm-3 col-lg-3">
                      <select class="search-select">
                        <option value="volvo">Query 1</option>
                        <option value="saab">Query 2</option>
                        <option value="mercedes">Query 3</option>
                        <option value="audi">Query 4</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-6">
                      <select class="search-select">
                        <option value="volvo">Query 1</option>
                        <option value="saab">Query 2</option>
                        <option value="mercedes">Query 3</option>
                        <option value="audi">Query 4</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-lg-3">
                      <input type="radio" name="operator" value="and">AND 
                      <input type="radio" name="operator" value="or" style="margin-left: 20px;">OR
                    </div>
                  </div>
                  <div>
                    <div class="col-xs-6 col-sm-3 col-lg-3">
                      <select class="search-select">
                        <option value="volvo">Query 1</option>
                        <option value="saab">Query 2</option>
                        <option value="mercedes">Query 3</option>
                        <option value="audi">Query 4</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-6">
                      <select class="search-select">
                        <option value="volvo">Query 1</option>
                        <option value="saab">Query 2</option>
                        <option value="mercedes">Query 3</option>
                        <option value="audi">Query 4</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-lg-3" style="padding: 5px">
                      <a href="#">Add more</a>
                    </div>
                  </div>
                </div>
              </div>
              <br/>
              <div class="panel panel-default adv-panel col-centered">
                <div class="panel-body">
                  <div class="search-row">
                   <div class="col-xs-6 col-sm-6 col-lg-3" style="padding: 5px;">
                    <strong>Location</strong>
                   </div>
                   <div class="col-xs-6 col-sm-6 col-lg-9">
                    <select class="search-select">
                        <option value="volvo">Location 1</option>
                        <option value="saab">Location 2</option>
                        <option value="mercedes">Location 3</option>
                        <option value="audi">Location 4</option>
                      </select>
                    </div>
                  </div>
                  <div>
                     <div class="col-xs-6 col-sm-6 col-lg-3" style="padding: 5px;">
                      <strong>Type</strong>
                     </div>
                     <div class="col-xs-6 col-sm-6 col-lg-9">
                      <select class="search-select">
                          <option value="volvo">Type 1</option>
                          <option value="saab">Type 2</option>
                          <option value="mercedes">Type 3</option>
                          <option value="audi">Type 4</option>
                        </select>
                     </div>
                  </div>
                </div>
              </div>
              <br/>
              <div class="panel panel-default adv-panel col-centered">
                <div class="panel-body">
                  <div>
                     <div class="col-xs-6 col-sm-6 col-lg-3" style="padding: 5px;">
                      <strong>Date</strong>
                     </div>
                     <div class="col-xs-6 col-sm-6 col-lg-9">
                      <input type="text" placeholder="start" style="padding: 5px; border: solid 1px rgb(223, 223, 223);"/>
                      <span style="margin: 0 10px;"> TO </span>
                      <input type="text" placeholder="end" style="padding: 5px; border: solid 1px rgb(223, 223, 223);"/>
                     </div>
                  </div>
                </div>
              </div>
              <br/>
              <a href="#" class="btn btn-lg btn-default adv-search">Advanced Search</a>
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