<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>My News</title>
    <style>
        body {
            background-color: #e6f7ff; /* light sky blue */
            color: #003d66;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
 
        header {
            background-color: #0099cc; /* darker sky blue */
            color: white;
            padding: 20px;
            text-align: center;
        }
 
        nav {
            background-color: #33b5e5;
            padding: 15px;
            text-align: center;
        }
 
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
 
        nav a:hover {
            text-decoration: underline;
        }
 
        .article {
            background-color: #ffffff;
            border: 1px solid #b3d9ff;
            margin: 20px auto;
            padding: 15px;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 0 10px #a3cfff;
        }
 
        .article img {
            width: 100%;
            border-radius: 6px;
            margin-top: 10px;
        }
 
        a.read-more {
            color: #006699;
            text-decoration: underline;
            display: inline-block;
            margin-top: 10px;
        }
 
        a.read-more:hover {
            color: #004466;
        }
    </style>
</head>
<body>
<header><h1>My News</h1></header>
<nav>
    <a href="#">Politics</a>
    <a href="#">Sports</a>
    <a href="#">Tech</a>
</nav>
 
<div>
    <?php
    $stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
    while ($row = $stmt->fetch()) {
        echo "<div class='article'>
                <h2>{$row['title']}</h2>
                <img src='{$row['image']}' alt='news image'>
                <p>{$row['description']}</p>
                <a class='read-more' href='article.php?id={$row['id']}'>Read More</a>
              </div>";
    }
    ?>
</div>
</body>
</html>
 
Syntax highlighting powered by GeSHi
Help Guide | License
