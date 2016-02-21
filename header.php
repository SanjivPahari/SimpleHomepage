<!DOCTYPE HTML>

<html>

<head>
<title><?PHP echo $pagetitle;?> - <?PHP echo $sitelinkhigh; ?> | <?PHP echo $personname; ?></title>
<meta name="description" content="Welcome to <?PHP echo $personname."'s"; ?> official website. Here you can know about me, my activities, read my blogs & contact me.">
<meta name="keywords" content="<?PHP echo $personname; ?>, <?PHP echo $sitelinkhigh; ?>, <?PHP echo $sitelink; ?>">
<meta name="author" content="<?PHP echo $personname; ?>">
<link rel="shortcut icon" href="/files/images/icon.png" type="image/png">
<link rel="stylesheet" href="/files/css/bootstrap.css" media="screen">
<script src="/files/js/jquery.min.js"></script>
</head>

<body style="background-image:url('/files/images/background.png');">
 <div class="container">
 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

  <a href="<?PHP echo $sitelink; ?>"><img  src="/files/images/icon.png" alt="Logo" width="50" height="50"></a>
    <strong class="text-success"> <?PHP echo $sitelinkhigh; ?></strong> | <?PHP echo $personname; ?>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

      <ul class="nav navbar-nav navbar-right">
	  
        <li><a href="https://facebook.com/<?PHP echo $fbid; ?>" target="_blank">
		<img  src="/files/images/facebookicon.png" alt="FB" width="20" height="20"> Facebook</a></li>
		        <li><a href="mailto:<?PHP echo $email; ?>" target="_blank">
				<img  src="/files/images/emailicon.png" alt="Email" width="20" height="20"> Email</a></li>
		<li><a href="/blog" target="_blank">
		<img  src="/files/images/blogicon.png" alt="Blog" width="20" height="20"> Blog</a></li>
      </ul>
    </div>
  </div>
</nav>


<?PHP
if($message!=='') { ?>
<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">X</button>
  <?PHP echo $message; ?>
</div>
<?PHP } ?>

<marquee scrollamount="20"><h1 class="text-danger" align="center">Welcome to <?PHP echo $pagetitle; ?> of my site.</h1></marquee>


