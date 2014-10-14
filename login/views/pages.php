<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard | SublimeViewer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Dashboard SublimeView</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hey, <?php echo $_SESSION['user_name']; ?></a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="index.php?logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Overview</a></li>
            <li><a href="screens.php">Screens</a></li>
            <li class="active"><a href="pages.php">Pages</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header">Pages | <a href="new_page.php">New page</a></h2> 
          </form>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php
                    $host="localhost"; // Host name
                    $username="root"; // Mysql username
                    $password="db_login"; // Mysql password
                    $db_name="login"; // Database name
                    $tbl_name="pages"; // Table name
                    // Connect to server and select database.
                    mysql_connect("$host", "$username", "$password")or die("cannot connect");
                    mysql_select_db("$db_name")or die("cannot select DB");
                    $sql="SELECT * FROM $tbl_name";
                    $result=mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                    echo $row['id'];
                    echo "<BR/>";
                    }
                    mysql_close();
                    ?></td>
                    <td><?php mysql_connect("$host", "$username", "$password")or die("cannot connect");
                    mysql_select_db("$db_name")or die("cannot select DB");
                    $sql="SELECT * FROM $tbl_name";
                    $result=mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                    echo $row['name'];
                    echo "<BR/>";
                    }
                    mysql_close();
                    ?></td>
					<td><?php mysql_connect("$host", "$username", "$password")or die("cannot connect");
                    mysql_select_db("$db_name")or die("cannot select DB");
                    $sql="SELECT * FROM $tbl_name";
                    $result=mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                    echo $row['link'];
                    echo "<BR/>";
                    }
		
                    mysql_close();

                    ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <form action="classes/delete_page.php" method="post">
Delete page: <input type="text" name="id">
<input type="submit">
</form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


