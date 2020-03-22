<html lang="en">
<head>
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
    <p>When you grab a drink out of the fridge, hit this button and tip the bartender.</p>

    <?php $r = get_random_restaurant(); ?>

    <div class="entry">
        <h2><?php echo "$r[1], $r[0]"; ?></h2>
        <p><?php echo "VENMO -- $r[2] | CASHAPP -- $r[3] | PAYPAL -- $r[4]";?></p>
        <button onClick="window.location.reload();">Refresh Page</button>
    </div>

<footer><p>Hat tip to the local heroes who made this virtual tip jar spreadsheet. I think it was Ana Owens and Katie Gentsch.
Write me with questions, comments, additions. <a href="mailto:maggie@januarythird.co">maggie@januarythird.co</a></p></footer>
</body>

</html>