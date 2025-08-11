<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($_SESSION['template'] === 'one'): ?>
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="./css/template_one/style.css">
        <link rel="stylesheet" type="text/css" href="./css/template_one/home.css">
        <link rel="stylesheet" type="text/css" href="./css/template_one/about.css">
        <link rel="stylesheet" type="text/css" href="./css/template_one/contact.css">
        <link rel="stylesheet" type="text/css" href="./css/template_one/login.css">
        <?php else: ?>
        <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="./css/template_two/style.css">
        <link rel="stylesheet" type="text/css" href="./css/template_two/about.css">
        <link rel="stylesheet" type="text/css" href="./css/template_two/contact.css">
        <link rel="stylesheet" type="text/css" href="./css/template_two/login.css">
    <?php endif; ?>        
    <script src="https://kit.fontawesome.com/3e9984b045.js" crossorigin="anonymous"></script>
    <title>CyberByte</title>
</head> 
<body>