<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161432750-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-161432750-1');
    </script> -->

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

        <footer>
            <div>
                <p>Add yourself to the spreadsheet <a href="https://forms.gle/j1Lni9pJ6RKTFENG9">here</a>.</p>
                <p>Amazing spreadsheet by <a
                        href="https://docs.google.com/spreadsheets/u/3/d/1tz2uyhgy3MsBS68MHPzO8H455_879fqfIaRPyUUw3QE/htmlview#gid=0">Ana
                        Owens</a>.</p>
                <p>Design & Development by <a href="https://www.januarythird.co">January Third</a>.</p>
                <p class="questions">Questions? Bugs? <a href="maggie@januarythird.co">Email us!</a></p>
            </div>

            <svg width="31" height="23" xmlns="http://www.w3.org/2000/svg">
                <g fill="#FFF" fill-rule="evenodd">
                    <path
                        d="M4 6L1.649 7.236l.449-2.618L.196 2.764l2.628-.382L4 0l1.176 2.382 2.628.382-1.902 1.854.45 2.618zM15 6l-2.351 1.236.449-2.618-1.902-1.854 2.628-.382L15 0l1.176 2.382 2.628.382-1.902 1.854.45 2.618zM27 6l-2.351 1.236.449-2.618-1.902-1.854 2.628-.382L27 0l1.176 2.382 2.628.382-1.902 1.854.45 2.618zM.28 10.78h28.91v3.92H.28zM.28 18.62h28.91v3.92H.28z" />
                </g>
            </svg>
        </footer>
    </section>

    <section class="content">
        <?php $r = get_random_restaurant(); ?>

        <div>
            <div>
                <p class="location">From <?php echo "$r[0]"; ?> &mdash;</p>
                <h2><?php echo "$r[1]"; ?></h2>

                <div class="apps">
                    <p>VENMO <u><?php echo "$r[2]";?></u></p>
                    <p>PAYPAL <u><?php echo "$r[4]";?></u></p>
                    <p>CASHAPP <u><?php echo "$r[3]";?></u></p>
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
</body>

</html>