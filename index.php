<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple blog</title>
    <link rel="stylesheet" href=style.css>
</head><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple blog</title>
    <link rel="stylesheet" href=style.css>
</head>
<body>
    <header id="blog"><h1>Simple blog</h1></header>
    <nav>Sharing simple thoughts :D </nav>
    <main>
    <!--<?php
        require 'config.php';

        $stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
        while ($row = $stmt->fetch()) {
            echo '<article class="main"><article class="sub"><header class="title"><h2>-' . htmlspecialchars($row['title']) . '-</h2></header>';
            echo '<p class="author"></p>';
            echo '<div class="content">' . nl2br(htmlspecialchars($row['content'])) . "</div>";
            echo '<footer class="bottomContent"><section class="tags"><ul><li></li></ul><button type="button" class="commenting">Add your comment</button></section></footer>';
            echo '</article>';
            echo '<aside class="comments">
            <p class="author">Comments</p>
            <ul>
                <li><p class="author">Żelek</p>
                    <p class="comment">Elo żelo</p>
                </li>
                <li><p class="author">Żelek</p>
                    <p class="comment">Elo żelo</p>
                </li>
                <li><p class="author">Żelek</p>
                    <p class="comment">Elo żelo</p>
                </li>    
            </ul>
        </aside>';
            echo '</article>';
        }
    ?>-->
    <article class="main">
        <article class="sub">
            <header class="title"><h2>-Your title-</h2></header>
            <p class="author">Your name/nickname</p>
            <div class="content"><p>Here goes your text. You can tell us about your yesterday's trip to local cinema, or you can describe your favourite book :D</p><p>Feel free to share your thoughts!</p></div>
            <footer class="bottomContent">
                <section class="tags">
                    <ul>
                        <li>excellent</li>
                        <li>interesting</li>
                        <li>tags</li>
                    </ul>
                    <button type="button" class="commenting">Add your comment</button>
                </section>
            </footer>
        </article>
        <aside class="comments">
            <p class="author">Comments</p>
            <ul>
                <li><p class="author">AuthorOfComment</p>
                    <p class="comment">His comment</p>
                </li>
                <li><p class="author">Jelly</p>
                    <p class="comment">Hi there</p>
                </li>
                <li><p class="author">Your_fan48</p>
                    <p class="comment">I love you!</p>
                </li>    
            </ul>
        </aside>
    </article>
    </main>
    <article id="addComBack">
        <section id="addCom">
            <span class="close" id="close">&times;</span>
            <p>Your comment</p>
            <form id="comment-form">
                <textarea id="comment" name="comment" required></textarea>
                <input type="text" id="username" name="username" placeholder="Your name/nickname" required>
                <button type="submit">Submit</button>
            </form>
        </section>
    </article>
    
    <footer id="madeby">-Kacper Twardowski | 2024-</footer>
    <script src="script.js"></script>
</body>
</html>