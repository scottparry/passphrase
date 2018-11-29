<!doctype html>
<html lang="en-US" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
<head>
    <title>PassPhrase | Open Source Passphrase Generator</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <meta name="robots" content="noodp, noydir" />
    <meta name="description" content="The word passphrase is used to convey the idea that a password, which is a single word, is far too short to protect you and that using a longer phrase is much better." />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="PassPhrase | Open Source Passphrase Generator" />
    <meta property="og:description" content="The word passphrase is used to convey the idea that a password, which is a single word, is far too short to protect you and that using a longer phrase is much better." />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="PassPhrase" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="PassPhrase | Open Source Passphrase Generator" />
    <meta name="twitter:description" content="The word passphrase is used to convey the idea that a password, which is a single word, is far too short to protect you and that using a longer phrase is much better." />

    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%7CPoppins%3A400%2C500%2C600" media="screen" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" media="screen" />
    <link rel="stylesheet" href="assets/css/minified.css.php" media="screen" />

    <link rel="icon" href="favicon.png" type="image/x-icon" />
</head>

<body id="index">

    <!-- wrapper -->
    <div id="wrapper">

        <!-- header -->
        <header id="main">
            <div class="boxed">

                <!-- nav -->
                <nav id="primary">
                    <div id="site-logo">
                        <h1><a href="#"><i class="fas fa-shield-alt"></i> PassPhrase</a></h1>
                    </div>

                    <ul>
                        <li><a href="//github.com/scottparry/passphrase"><i class="fab fa-github"></i> View Source</a></li>
                    </ul>
                </nav>
                <!-- /nav -->

                <!-- intro -->
                <div id="intro" class="textcenter">
                    <h2>Secure Passphrase Generator</h2>
                    <p>Generate strong, secure passphrases with our<br>random passphrase generator!</p>
                </div>
                <!--/intro -->

                <!-- generator -->
                <form id="generator" action="" method="post">
                    <?php
                        $words = file( "wordlist.txt" );
                        $rand_keys = array_rand( $words, 5 );
                        $generated_passphrase = $words[$rand_keys[0]] . ' ' . $words[$rand_keys[1]] . ' ' . $words[$rand_keys[2]] . ' ' . $words[$rand_keys[3]] . ' ' . $words[$rand_keys[4]];
                    ?>
                    <div class="one-full">
                        <label for="generatedpassphrase">Generated Passphrase</label>
                        <input type="text" id="generatedpassphrase" value="<?php echo $generated_passphrase; ?>" name="generatedpassphrase" autocorrect="off" autocapitalize="none" autocomplete="off" readonly />
                        <i class="fas fa-shield-alt"></i>
                        <a href="#" id="copy-generated" title="Copy to Clipboard"><i class="fas fa-clipboard"></i></a>

                        <span id="copied-to-clipboard">Passphrase Copied!</span>
                    </div>

                    <button type="submit" id="generate">Generate Passphrase</button>
                </form>
                <!-- /generator -->

            </div>
        </header>
        <!-- /header -->

        <!-- main content -->
        <article id="page" itemscope="" itemtype="http://schema.org/WebPage">
            <div class="boxed">
                <div id="how" itemprop="mainContentOfPage">

                    <div class="one-third">
                        <h5>What.</h5>
                        <p>The word "passphrase" is used to convey the idea that a password, which is a single word, is far too short to protect you and that using a longer phrase is much better.</p>
                    </div>

                    <div class="one-third">
                        <h5>Why.</h5>
                        <p>Using passphrases made of randomly-chosen words can be both easy to remember and hard for someone else to guess, which is what we want out of a passphrase.</p>
                    </div>

                    <div class="one-third">
                        <h5>How.</h5>
                        <p>Using the <a href="//www.eff.org/" title="Electronic Frontier Foundation" target="_blank">EFF</a> long wordlist, we simply use PHPs <code>array_rand()</code> function to select 5 random words from the wordlist to generate a secure, random passphrase.</p>
                    </div>

                </div>
            </div>
        </article>
        <!-- /main content -->

    </div>
    <!-- /wrapper -->

    <!-- footer -->
    <footer id="main">
        <div id="copyright" class="boxed">
            <p>
	            Released under the <a href="//github.com/scottparry/passphrase/blob/master/LICENSE" target="_blank">GPL v3 license</a>.

                Copyright &copy; 2018 <a href="#"><i class="fas fa-shield-alt"></i> PassPhrase</a>.
                <br>
                Icons by <a href="//fontawesome.com/" target="_blank">FontAwesome</a>.
            </p>
        </div>
    </footer>
    <!-- /footer -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/application.js"></script>
</body>
</html>