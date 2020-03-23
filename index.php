<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161432750-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-161432750-1');
    </script>

  <meta charset="utf-8">
  <title>Virtual Tip Jar</title>
  <meta name="description" content="The HTML5 Herald">
  <link rel="stylesheet" href="site.css">
</head>

<body>
    <?php  
        require 'functions.php';    
    ?>

    <h1>We can't go to the bar. But we can still tip our bartenders.</h1>

    <?php $r = get_random_restaurant(); ?>

    <div class="entry">
        <h2><span><?php echo "$r[1], $r[0]"; ?></span></h2>
        <p><span><?php echo "VENMO -- $r[2]";?></span></p>
        <p><span><?php echo "CASHAPP -- $r[3]";?></span></p>
        <p><span><?php echo "PAYPAL -- $r[4]";?></span></p>
    </div>

    <button onClick="window.location.reload();">Give Me Another</button>
    
<footer><p>Hat tip to the local heroes who made this virtual tip jar spreadsheet. I think it was Ana Owens and Katie Gentsch.
<a href="mailto:maggie@januarythird.co">Write me</a> with questions, comments, additions.</p></footer>
</body>

</html>