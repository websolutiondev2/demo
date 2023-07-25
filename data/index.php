<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

      <!-- Including jQuery is required. -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="scripts.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" type="text/css" href="tyle.css">
    <title>Document</title>
    <script>
        document.getElementById("display").innerHTML = 
        "The full URL of this page is:<br>" + window.location.href;
        </script>
</head>
<body>
    <div class="container">
        <form class="form-inline" method="post" action="php-database-search.php">
          <input type="text" name="name" class="form-control" placeholder="Search roll no..">
          <button type="submit" name="save" class="btn btn-primary">Search</button>
        </form>

        <!-- Search box. -->
   <!-- <input type="text" id="search" placeholder="Search" />
   <br>
   <b>Ex: </b><i>David, Ricky, Ronaldo, Messi, Watson, Robot</i>
   <br /> -->
   <!-- Suggestions will be displayed in below div. -->
   <!-- <div id="display"></div> -->

    </div>

    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class= "container">
                <?php

                    include "dis.php";
                

                ?>
        <br>
               
        <button type="button" id="export"  name="export" value="export to excel"  class="btn btn-info">Export to Excel</button>
        </div>

        </form>
        
    </div>
</body>
</html>