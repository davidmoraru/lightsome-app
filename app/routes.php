<?php

// Use / for the main/index page.
get('/', function(){
    echo "Front page";
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
if (!Nanite::$routeProccessed) {
    // 404 page here
}