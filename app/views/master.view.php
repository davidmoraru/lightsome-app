
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700"> 
    <link rel="stylesheet" href="/assets/css/siimple.min.css">
    <link rel="stylesheet" href="/assets/css/theme.css">
    
        
    <link rel="stylesheet" href="/assets/css/main.css">
        
    
    <script type="text/javascript" src="/assets/js/theme.js"></script>
    
    <title><?= getenv('APP_NAME') ?> | Home</title>
</head>
<body>
    <div class="siimple-navbar theme-navbar siimple-navbar--large">
    <a class="siimple-navbar-title" href="/index.html">
        <span class="siimple-brand"><?= getenv('APP_NAME') ?></span>
    </a>
        <a class="siimple-navbar-item siimple--float-right siimple--display-sm-none" href="<?=url('/test')?>">
            Test
        </a>
        
        <a class="siimple-navbar-item siimple--float-right siimple--display-sm-none" href="/test/the">
            The
        </a>
        
        <a class="siimple-navbar-item siimple--float-right siimple--display-sm-none" href="/test/the/router">
            Router
        </a>
</div>



    <div>
        <div class="siimple-jumbotron theme-header siimple-jumbotron--large" align="center">
    <div class="siimple-jumbotron-title">Welcome</div>
    <div class="siimple-jumbotron-subtitle">Get started with <strong>Lightsome</strong> with any of our apps!</div>
</div>



<div class="siimple-content docs-examples siimple-content--large">
        <div class="docs-examples-item">
            <div class="docs-examples-item-description">A simple features page with a navbar, jumbotron, three features columns and a footer. </div>
        </div>
    
</div>



    </div>
    <div class="theme-footer siimple-footer--large">
        <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--4 siimple-grid-col--sm-12">
        <div class="theme-footer-title">
            <span class="siimple-brand">Light</span>
            
            <span class="siimple--text-normal" style="margin-left:-2px;">Some</span>
            
        </div>
        
        <div class="theme-footer-subtitle">
            PHP Framework<strong><?= getenv('APP_VERSION') ?></strong>
        </div> 
        
    </div>
    <div class="siimple-grid-col siimple-grid-col--8 siimple-grid-col--sm-12">
        Designed and built with love by <strong>Josemi Juanes, Pablo Marin and David Gomez</strong>.<br> 
        Code available on <a href="https://github.com/siimple/siimple" class="theme-footer-link" target="_blank">our GitHub repository</a> 
        and released under the <strong>MIT License</strong>. 
    </div>
</div>


        <div class="theme-footer-rule"></div>
        <div class="siimple-grid-row">
            <div class="siimple-grid-col siimple-grid-col--6 siimple-grid-col--sm-12" align="left">
                &copy; <?= date('Y') ?> <strong><?= getenv('APP_NAME') ?></strong>
            </div>
            <div class="siimple-grid-col siimple-grid-col--6 siimple-grid-col--sm-hide" align="right">
                <a href="#" class="theme-footer-link theme-footer-link--inline">Privacy Policy</a>
                <a href="#" class="theme-footer-link theme-footer-link--inline">Cookies Policy</a>
                
            </div>
        </div>
    </div>
</body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title><?= getenv('APP_NAME') ?> | Welcome</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <div class="siimple-navbar siimple-navbar--extra-large siimple-navbar--dark">
        <a class="siimple-navbar-title" href="#">Navbar</a>
        <a class="siimple-navbar-item" href="#">Home</a>
        <a class="siimple-navbar-item" href="#">About</a>
    </div>
    <div class="siimple-jumbotron siimple-jumbotron--extra-large siimple-jumbotron--light">
        <div class="siimple-jumbotron-title">Welcome!</div>
        <div class="siimple-jumbotron-detail">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
        </div>
    </div>
    <div class="siimple-content siimple-content--extra-large">
        <div class="siimple-grid">
            <div class="siimple-grid-row">
                <div class="siimple-grid-col siimple-grid-col--4 siimple-grid-col--sm-12">
                    <div class="siimple-h2">Feature 1</div>
                    <div class="siimple-paragraph siimple--text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </div>
                    <div class="siimple-btn siimple-btn--primary" style="margin-bottom:15px;">More info</div>
                </div>
                <div class="siimple-grid-col siimple-grid-col--4 siimple-grid-col--sm-12">
                    <div class="siimple-h2">Feature 2</div>
                    <div class="siimple-paragraph siimple--text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </div>
                    <div class="siimple-btn siimple-btn--primary" style="margin-bottom:15px;">More info</div>
                </div>
                <div class="siimple-grid-col siimple-grid-col--4 siimple-grid-col--sm-12">
                    <div class="siimple-h2">Feature 3</div>
                    <div class="siimple-paragraph siimple--text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </div>
                    <div class="siimple-btn siimple-btn--primary" style="margin-bottom:15px;">More info</div>
                </div>
            </div>
        </div>
        <div class="siimple-rule"></div>
    </div>
    <div class="siimple-footer siimple-footer--extra-large">
        &copy; .
    </div>
</body>

