<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/style-3005.css" />
    <link rel="stylesheet/less" type="text/css" href="<?php echo $url_path ?>/less/3005.less" />
    <link rel="stylesheet" href="css/style-3005.css">
</head>
<body>
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 left-section">
                <img src="images/phone-image.png" alt="Phone Image" class="img-fluid">
            </div>
    
            <div class="col-md-6 right-section">
                <h1>Affordable, Professional Phone Repairs Done Right Every Time.</h1>
                <p>
                    Aliquam pellentesque quam aenean bibendum mollis per. Duis non rhoncus vulputate 
                    maximus enim ornare. Diam eu id rutrum lobortis netus neque integer venenatis 
                    letius libero a.
                </p>
                <div class="features row">
                    <div class="col-6 feature">
                        <span class="icon"><i class="fas fa-check-circle"></i></span>
                        <span>Affordable Pricing</span>
                    </div>
                    <div class="col-6 feature">
                        <span class="icon"><i class="fas fa-check-circle"></i></span>
                        <span>High-Quality Parts</span>
                    </div>
                    <div class="col-6 feature">
                        <span class="icon"><i class="fas fa-check-circle"></i></span>
                        <span>Convenient Service</span>
                    </div>
                    <div class="col-6 feature">
                        <span class="icon"><i class="fas fa-check-circle"></i></span>
                        <span>Expert Technicians</span>
                    </div>
                    <div class="col-6 feature">
                        <span class="icon"><i class="fas fa-check-circle"></i></span>
                        <span>Free Diagnostics</span>
                    </div>
                    <div class="col-6 feature">
                        <span class="icon"><i class="fas fa-check-circle"></i></span>
                        <span>Same-Day Service</span>
                    </div>
                </div>
                <button class="learn-more">Learn More</button>
            </div>
        </div>
    </div>
</body>
</html>
