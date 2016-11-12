<!DOCTYPE html>
<html>
<head>
	<title>Workshop || Pritom</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Data Collection</h2><br>
  <?php
    if(!empty($_GET['meg'])){
    	echo $_GET['meg'];
    }
//    $_GET['meg'] ? echo "$_GET['meg']" : '';
  ?>


  <form class="form-horizontal" action="data.php" method="POST">


   <div class="form-group">

     <label class="control-label col-md-2" for="name">Name:</label>
     <div class="col-md-6">

      <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" required><br>
     </div>
    </div>


   <div class="form-group">

     <label class="control-label col-md-2" for="name">Email:</label>
     <div class="col-md-6">

      <input type="email" name="email" class="form-control" placeholder="You@example.com"><br>
     </div>
    </div>


   <div class="form-group">

     <label class="control-label col-md-2" for="name">Dept:</label>
     <div class="col-md-6">

      <input type="text" name="dept" class="form-control" placeholder="e.g. CSE, IPE"><br>
     </div>
    </div>


   <div class="form-group">

     <label class="control-label col-md-2" for="name">Reg:</label>
     <div class="col-md-6">

      <input type="text" name="reg" class="form-control" placeholder="20XX3310XX"><br>
     </div>
    </div>


   <div class="form-group">

     <div class="col-sm-offset-2 col-md-6">
       <button type="submit" class="btn btn-primary">Submit</button>
     </div>
    </div>

<!--
   <div class="form-group">

     <label class="control-label col-md-2" for="value"></label>
     <div class="col-md-6">

      <input type="submit" value="Submit">
     </div>
    </div>
-->






<!--
    email:<br>
    <input type="text" name="firstname"><br>
    dept:<br>
    <input type="text" name="firstname"><br>
    Reg:<br>
    <input type="text" name="firstname" required><br>
    <input type="submit"> -->

  </form>

</div>


</body>
</html>