<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">

    <title>Register</title>
</head>
<body>
	<?php include 'menu.php' ;?>

    <div class="jumbotron">
  <h1>Welcome :)</h1>
  <p>Help us know more about you..</p>
</div>

    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center"><b>Register Yourself!!</b></h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userdata.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="Name" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
                <label>Email-Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comment">
                </textarea>
    </div>
    <button type="submit" class="btn btn-success"> Submit</button>
</form>
</div>
</section>

<?php include 'footer.php' ;?>

</body>
</html>