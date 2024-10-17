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
    <title>Repair Article</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/style-3020.css" />
    <link rel="stylesheet/less" type="text/css" href="<?php echo $url_path ?>/less/3020.less" />
    <link rel="stylesheet" href="css/style-3020.css">
</head>
<body>

    <!-- Banner Section with full-width background -->
    <div class="container-fluid text-white py-4 banner-container"> <!-- Dùng container-fluid để tràn full width -->
        <div class="container">
            <div class="d-flex justify-content-start align-items-center">
                <span class="badge bg-gradient-to-right from-yellow-to-green custom-badge px-3 py-2 me-2">FAST SERVICE</span>
            </div>
            <h1 class="mt-3 mb-3">Why Quick Repairs Matter: How MobiCare Keeps You Connected</h1>
            <hr>
            <div class="d-flex justify-content-start align-items-center meta-info mt-3">
                <span class="me-3"><i class="fas fa-calendar-alt text-success"></i> October 8, 2024</span>
                <span class="chat-icon">
                    <i class='fas fa-comment-alt text-success'></i> No Comments
                </span>                        
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container">
        <div class="row mt-4">
            <!-- Left Column: Article Image -->
            <div class="col-md-8 mb-4">
                <img src="images/phone-repair.jpg" alt="Phone Repair Image" class="img-fluid rounded">
            </div>

            <!-- Right Column: Sidebar Categories -->
            <div class="col-md-4">
                <div class="bg-white p-4 rounded shadow-sm sidebar">
                    <h3 class="mb-4">Popular Categories</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fa-solid fa-tag text-success me-2"></i> Phone Issues
                        </li>
                        <li class="mb-3">
                            <i class="fa-solid fa-tag text-success me-2"></i> Repair Advice
                        </li>
                        <li class="mb-3">
                            <i class="fa-solid fa-tag text-success me-2"></i> Screen Protection
                        </li>
                        <li class="mb-3">
                            <i class="fa-solid fa-tag text-success me-2"></i> Camera Repair
                        </li>
                        <li class="mb-3">
                            <i class="fa-solid fa-tag text-success me-2"></i> Maintenance Tips
                        </li>
                    </ul>
                </div>                
            </div>
        </div>
    </div>

    <!-- Bootstrap and JS Scripts -->
    <script src="<?php echo $url_path ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>
