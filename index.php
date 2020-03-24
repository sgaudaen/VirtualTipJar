<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161432750-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
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

    <section class="main-copy">
        <h1>We can't go to the bar. <u>But we can still tip.</u></h1>

        <div class="no-mobile">
            <?php include("footer.html"); ?>
        </div>
    </section>

    <section class="content">
        <?php $r = get_random_restaurant(); ?>

        <div>
            <div>
                <p class="location">From <?php echo "$r[0]"; ?> &mdash;</p>
                <h2><?php echo "$r[1]"; ?></h2>

                <div class="apps">
                    <?php if ($r[2]) echo "<p>VENMO <u>$r[2]</u></p>"; ?>
                    <?php if ($r[4]) echo "<p>PAYPAL <u>$r[4]</u></p>"; ?>
                    <?php if ($r[3]) echo "<p>CASHAPP <u>$r[3]</u></p>"; ?>
                </div>
            </div>


            <button onClick="window.location.reload();">Find Another <svg width="21" height="16"
                    xmlns="http://www.w3.org/2000/svg">
                    <g stroke="#F9F9F9" stroke-width="1.26" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <path d="M13.53 1.63l6.3 6.3M13.53 14.23l6.3-6.3M1.505 7.648l17.075.132" />
                    </g>
                </svg></button>
        </div>
    </section>

    <div class="mobile-only">
        <?php include("footer.html"); ?>
    </div>
</body>

</html>