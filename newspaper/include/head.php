<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
<meta content="Bootstrap News Template - Free HTML Templates" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">
<?php

$hquery = "select * from settings";
$hres = mysqli_query($con, $hquery);
$hhome = mysqli_fetch_assoc($hres);


?>
<title><?php echo $hhome['title']; ?></title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/slick/slick.css" rel="stylesheet">
<link href="lib/slick/slick-theme.css" rel="stylesheet">
<link href="css/pagination.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">