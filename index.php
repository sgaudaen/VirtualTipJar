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
  <meta name="viewport" content="initial-scale=1">
  <meta charset="utf-8">
  <title>Virtual Tip Jar</title>
  <meta name="description" content="The HTML5 Herald">
  <link rel="stylesheet" href="site.css">
</head>

<body>
    <?php  
        require 'functions.php';    
    ?>
    <div class="left-block">
        <h1>We can't go to the bar. <span class="underline">But we can still tip our bartenders.</span></h1>
    </div>

    <div class="right-block">
        <div class="inset">
            <?php $r = get_random_restaurant(); ?>
            <div class="entry">
                <h3>From <?php echo "$r[0]"; ?> —</h3>
                <h2><span><?php echo "$r[1]"; ?></span></h2>
                <div class="payment-container">
                    <?php if(!empty($r[2])){ echo "<p><span>VENMO $r[2]</span></p>";} ?>
                    <?php if(!empty($r[3])){ echo "<p><span>CASHAPP $r[3]</span></p>";} ?>
                    <?php if(!empty($r[4])){ echo "<p><span>PAYPAL $r[4]</span></p>";} ?>
                </div>
                <button onClick="window.location.reload();">Find Another</button>
            </div>
        </div>
    </div>

    <footer>
            <p>Data from <a href="https://docs.google.com/spreadsheets/u/3/d/1tz2uyhgy3MsBS68MHPzO8H455_879fqfIaRPyUUw3QE/htmlview#gid=0">this spreadsheet</a> by Amy Owens and Katie Gentsch. </br>
            Add yourself to the spreadsheet <a href="https://forms.gle/j1Lni9pJ6RKTFENG9">here.</a></br> 
            Design by <a href="https://januarythird.co">January Third</a>. (Very much WIP, but hey, it works!)</br>
            Development by Steven Gaudaen and Alex Barbato.
            Make your own version — source code <a href="https://github.com/sgaudaen/VirtualTipJar">here.</a></br>
            <span class="red-span">Questions? Bugs? <a href="mailto:maggie@januarythird.co">Email us.</a> And don't forget to tip generously.</span>
            </p>
    </footer>
</body>

</html>