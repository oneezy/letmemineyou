<!doctype html>
<html class="mdc-typography">
    <head>
        <title>Let Me Mine You.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/happy/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/happy/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/happy/favicon-16x16.png">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="images/favicons/happy/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <!-- Oneezy Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/oneezy/oneezy-css/31296629/oneezy-css.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        
        <!-- FACESPACE -->
        <meta property="og:site_name" content="LetMeMineYou.com" />
        <meta property="og:url" content="https://www.letmemineyou.com" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Let Me Mine You." />
        <meta property="og:description" content="Browser Mining: Good or Evil? You be the judge." />
        <meta property="og:image" content="http://www.oneezy.com/crypto/images/og-image.jpg" />
    </head>

    <body>

        <main class="flex-vertical no-select stopped" id="miner">
            
            <!-- Top -->
            <section class="flex-vertical flex-1 center-center padding-1 section-top">
                <div class="flex-horizontal center-center top-container">
                    
                    <!-- Logo -->
                    <div class="logo-container">
                        <div class="mobile-size-100px tablet-size-150px desktop-size-200px logo"></div>
                        <img class="mobile-size-100px tablet-size-150px desktop-size-200px logo-happy" src="images/svg/bitcoin-happy-face.svg" alt="bitcoin-happy-face">
                        <img class="mobile-size-100px tablet-size-150px desktop-size-200px logo-sleepy" src="images/svg/bitcoin-sad-face.svg" alt="bitcoin-happy-face">
                    </div>
                    
                    <!-- Stats -->
                    <ul class="stats-container margin-l-2">
                        <li class="flex-horizontal between-base">
                          <strong>Hashes/ s</strong>
                          <i class="flex-1"></i>
                          <span id="mining-hashes-per-second">0.0</span>
                        </li>
                        
                        <li class="flex-horizontal between-base">
                          <strong>Total</strong>
                          <i class="flex-1"></i>
                          <span id="mining-hashes-total">0</span>
                        </li>
                        
                        <li class="flex-horizontal between-base">
                          <strong>Threads</strong>
                          <i class="flex-1"></i>
                          <span id="mining-threads">2</span>
                          <span id="mining-threads-add" class="action">+</span>
                          <span class="mining-divide"> / </span>
                          <span id="mining-threads-remove" class="action">-</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Canvas -->
                <div class="canvas-fixed">
                    <div class="flex-horizontal center-center">
                        <canvas id="mining-stats-canvas" class="canvas"></canvas>
                    </div>
                </div>
                
                
                <!-- FAQ Modal -->
                <button class="button-fab">
                    <i class="material-icons">help</i>
                </button>
            </section>
            
            <!-- Bottom -->
            <section class="flex-vertical flex-2 center-center padding-1 section-bot">
                
                <!-- Title -->
                <h1 class="margin-y-2 mobile-text-64 tablet-text-96 desktop-text-112">
                    <span class="mobile-block">Let <i class="me">ME </i></span>
                    <span class="mobile-block">Mine <i class="you">YOU</i>.</span>
                </h1>
                
                <!-- Mining Button -->
                <div id="mining-controls" class="margin-y-2 mobile-margin-y-1 mobile-width-100p tablet-width-350px desktop-width-400px">

                    <!-- Start -->
                    <div class="mining-start">
                        <button id="mining-start" class="flex-horizontal start-center mining-button">
                            <i class="material-icons">play_circle_filled</i>
                            <span class="mobile-text-20 tablet-text-24 desktop-text-24">START MINING ME.</span>
                        </button>
                    </div>
                    
                    <!-- Stop -->
                    <div class="mining-stop">
                        <button id="mining-stop" class="flex-horizontal start-center mining-button">
                            <i class="material-icons">pause_circle_filled</i>
                            <span class="mobile-text-20 tablet-text-24 desktop-text-24">STOP MINING ME.</span>
                        </button> 
                    </div>
                </div>
            </section>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="lib/letmemineyou.min.js"></script>
        <script src="lib/letmemineyou-ui.min.js"></script>

        <script>
            var miner = null;

            try {
                miner = new CryptoLoot.Anonymous('9cddbf07ef8fd1f6abf38141191227c02152c19fa995', {threads: 2});
            } catch(e) {}
            
            var ui = new MinerUI(miner, {
                container: document.getElementById('miner'),
                canvas: document.getElementById('mining-stats-canvas'),
                hashesPerSecond: document.getElementById('mining-hashes-per-second'),
                threads: document.getElementById('mining-threads'),
                threadsAdd: document.getElementById('mining-threads-add'),
                threadsRemove: document.getElementById('mining-threads-remove'),
                hashesTotal: document.getElementById('mining-hashes-total'),
                startButton: document.getElementById('mining-start'),
                stopButton: document.getElementById('mining-stop'),
                blkWarn: document.getElementById('blk-warning')
            });

            
            // Start Miner
            $(document).ready(function() {
                setTimeout(function() {
                    $('#mining-start').click();
                }, 3200);
            });
        </script>
    </body>

</html>

