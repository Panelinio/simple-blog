<!DOCTYPE html>
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
    <?php
        require 'config.php';
        $sql = "
        SELECT 
            a.id as article_id, 
            a.title, 
            a.content, 
            a.author, 
            a.created_at as article_created_at,
            t.id as tag_id,
            t.name as tag_name,
            c.id as comment_id,
            c.com_author,
            c.comment
        FROM articles a LEFT JOIN tags t ON a.id = t.article_id LEFT JOIN comments c ON a.id = c.article_id ORDER BY a.created_at DESC, t.id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $articles = [];
        foreach ($results as $row) 
        {
            $article_id = $row['article_id'];
            if (!isset($articles[$article_id])) 
            {
                $articles[$article_id] = [
                    'title' => $row['title'],
                    'content' => $row['content'],
                    'author' => $row['author'],
                    'created_at' => $row['article_created_at'],
                    'tags' => [],
                    'comments' => []
                ];
            }

            if ($row['tag_id']) 
            {
                $articles[$article_id]['tags'][$row['tag_id']] = $row['tag_name'];
            }

            if ($row['comment_id']) 
            {
                $articles[$article_id]['comments'][$row['comment_id']] = [
                    'com_author' => $row['com_author'],
                    'comment' => $row['comment'],
                ];
            }
        }

        foreach ($articles as $article) 
        {
            echo '<article class="main"><article class="sub"><p class="date" aria-label="Date of creation of the article">'.htmlspecialchars(date('d.m.Y', strtotime($article['created_at']))).'</p>';
            echo '<header class="title" aria-label="Title of the article"><h2>-'.htmlspecialchars($article['title']).'-</h2></header>';
            echo '<p class="author" aria-label="Author of the article">'.htmlspecialchars($article['author']).'</p>';
            echo '<div class="content" aria-label="Content">'.nl2br(htmlspecialchars($article['content'])).'</div>';
            echo '<footer class="bottomContent"><section class="tags" aria-label="Tags"><ul>';
            foreach ($article['tags'] as $tag) 
            {
                echo '<li>'.htmlspecialchars($tag).'</li>';
            }
            echo '</ul><button type="button" class="commenting" aria-label="Comment">Add your comment</button>';
            echo '</section></footer></article><aside class="comments"><p class="author" aria-label="Comments">Comments</p><ul>';
            foreach ($article['comments'] as $comment) 
            {
                echo '<li><p class="author" aria-label="Comment author">'.htmlspecialchars($comment['com_author']).'</p>';
                echo '<p class="comment" aria-label="His comment">'.htmlspecialchars($comment['comment']).'</p></li>';
            }
            echo '</ul></aside></article>';
        }
    ?>
    <!--Template - you can delete that-->
    <article class="main">
        <article class="sub">
            <p class="date" aria-label="Date of creation of the article">dd.mm.YYYY</p>
            <header class="title" aria-label="Title of the article"><h2>-Your title-</h2></header>
            <p class="author" aria-label="Author of the article">Your name/nickname</p>
            <div class="content" aria-label="Content"><p>Here goes your text. You can tell us about your yesterday's trip to local cinema or you can describe your favourite book :D</p><p>Feel free to share your thoughts!</p></div>
            <footer class="bottomContent">
                <section class="tags" aria-label="Tags">
                    <ul>
                        <li>excellent</li>
                        <li>interesting</li>
                        <li>tags</li>
                    </ul>
                    <button type="button" class="commenting" aria-label="Comment">Add your comment</button>
                </section>
            </footer>
        </article>
        <aside class="comments" aria-label="Comments">
            <p class="author">Comments</p>
            <ul>
                <li>
                    <p class="author" aria-label="Comment author">Author</p>
                    <p class="comment" aria-label="His comment">His very very very long comment. He has so much to tell you. Maybe he is your fan? Well, you need to ask him :D</p>
                </li>
                <li>
                    <p class="author" aria-label="Comment author">Jelly</p>
                    <p class="comment" aria-label="His comment">Hi there</p>
                </li>
                <li>
                    <p class="author" aria-label="Comment author">Your_fan4</p>
                    <p class="comment" aria-label="His comment">I love you!</p>
                </li>
                <li>
                    <p class="author" aria-label="Comment author">Coffe_Guy</p>
                    <p class="comment" aria-label="His comment">I like coffe</p>
                </li>    
            </ul>
        </aside>
    </article>
    <!--Template - you can delete that-->
    </main>
    <article id="addComBack">
        <section id="addCom">
            <span class="close" id="close" aria-label="Close button">&times;</span>
            <p aria-label="Add your comment">Your comment</p>
            <form id="comment-form">
                <textarea id="comment" name="comment" required aria-label="Your comment" maxlength ="255"></textarea>
                <input type="text" id="username" name="username" placeholder="Your name/nickname" required aria-label="Your name or nickname" maxlength ="9">
                <button type="submit" aria-label="Submit">Submit</button>
            </form>
        </section>
    </article>
    <footer id="madeby" aria-label="Website author">-Kacper Twardowski | 2024-</footer>
    <script src="script.js"></script>
</body>
</html>