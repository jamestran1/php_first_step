<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Globe Bank <?php if(isset($page_title)){ echo '- ' . h($page_title);} ?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css') ?>" />
</head>
<body>
    <header>
        <a href="<?php echo url_for("/index.php"); ?>">
            <img src="<?php echo url_for("/images/gbi_logo.png"); ?>" width="298" height="71" alt=""/>
        </a>
    </header>
