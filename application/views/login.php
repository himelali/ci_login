<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/custom-style.css"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="login-page">
    <div class="form">
        <form action="<?php echo site_url("login/check"); ?>" class="login-form" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
            <input type="text" name="username" required placeholder="username"/>
            <input type="password" name="password" required placeholder="password"/>
            <button type="submit">login</button>
            <p class="message"><?php if($error || $notification || $warning || $success || $exception) { echo $error . $notification . $warning . $success . $exception; } ?></p>
        </form>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo site_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo site_url("assets/js/bootstrap.min.js"); ?>"></script>

</body>
</html>
