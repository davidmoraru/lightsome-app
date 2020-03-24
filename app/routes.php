<?php
use Light\Some as Lightsome;
use Light\View;
// Use / for the main/index page.
get('/', function() {
    return View::render('default');
});

// All routes start with /
get('/about', function(){
    echo "About page";
});

// Regex enabled, groups get passed to the function.
get('/projects/([a-zA-Z0-9\-_]+)', function($project){
    echo "Project page for {$project}";
});

// Handle a POST request
post('/contact', function(){
    // Handle submitted contact form.
});

// Checking if a route has been matched
if (!Lightsome::$routeProccessed) {
    return View::render('404', ['response' => errorpage(404)]);
}