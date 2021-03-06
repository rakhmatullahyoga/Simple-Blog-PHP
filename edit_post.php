<!DOCTYPE html>
<?php include 'connection.php';?>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Deskripsi Blog">
<meta name="author" content="Judul Blog">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="omfgitsasalmon">
<meta name="twitter:title" content="Coretan Yoga">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Coretan Yoga">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Coretan Yoga">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Coretan Yoga">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php
    $id = $_GET['var'];
    $query = mysqli_query($con,"SELECT Tanggal, Judul, Konten FROM postingan WHERE ID=$id");
    while ($hasil = mysqli_fetch_array($query)) {
        $tanggal = $hasil['Tanggal'];
        $judul = $hasil['Judul'];
        $konten = $hasil['Konten'];
    }
?>

<title>Simple Blog | Edit Post</title>

</head>

<body class="default">
<div class="wrapper">

<nav class="nav" id="#top">
    <a style="border:none;" id="logo" href="index.html"><h1>Simple<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.html">+ Edit Post</a></li>
    </ul>
</nav>

<article class="art simple post">
        
    <h2 class="art-title" style="margin-bottom:40px">-</h2>

    <div class="art-body">
        <div class="art-body-inner">
            <h2>Edit Post</h2>

            <div id="contact-area">
                <form name="Post" method="post" action="update.php?var=<?php echo $id?>">
                    <label for="Judul">Judul:</label>
                    <input type="text" name="Judul" id="Judul" value="<?php echo $judul; ?>" aria-required="true" required="">
                    <label for="Tanggal">Tanggal:</label>
                    <input type="date" name="Tanggal" value="<?php echo $tanggal; ?>" class="ss-q-date" dir="auto" id="Tanggal" aria-required="true" required="">
                    <label for="Konten">Konten:</label><br>
                    <textarea name="Konten" rows="20" cols="20" id="Konten" aria-required="true" required=""><?php echo htmlspecialchars($konten); ?></textarea>
                    <input type="submit" name="submit" value="Simpan" class="submit-button" onclick="return IsValidDate()">
                </form>
            </div>
        </div>
    </div>

</article>

<footer class="footer">
    <div class="back-to-top"><a href="#top">Back to top</a></div>
    <!-- <div class="footer-nav"><p></p></div> -->
    <div class="psi">&Psi;</div>
    <aside class="offsite-links">
        Tugas 1 IF3110 /
        <a class="twitter-link" href="http://twitter.com/rakhmatullah25" target="_blank">Rakhmatullah Yoga Sutrisna</a>
        
    </aside>
</footer>

</div>

<script type="text/javascript" src="assets/js/function.js"></script>
<script type="text/javascript" src="assets/js/fittext.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/respond.min.js"></script>
<script type="text/javascript">
  var ga_ua = '{{! TODO: ADD GOOGLE ANALYTICS UA HERE }}';

  (function(g,h,o,s,t,z){g.GoogleAnalyticsObject=s;g[s]||(g[s]=
      function(){(g[s].q=g[s].q||[]).push(arguments)});g[s].s=+new Date;
      t=h.createElement(o);z=h.getElementsByTagName(o)[0];
      t.src='//www.google-analytics.com/analytics.js';
      z.parentNode.insertBefore(t,z)}(window,document,'script','ga'));
      ga('create',ga_ua);ga('send','pageview');
</script>

</body>
</html>