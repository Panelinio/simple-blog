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
        <article>
            <header class="title"><h2>-Ale fajny tytuł-</h2></header>
            <p class="author">Żelek</p>
            <div class="content">
                Mój stary to fanatyk wędkarstwa. Pół mieszkania zajebane wędkami, najgorzej. Średnio raz w miesiącu ktoś wdepnie w leżący na ziemi haczyk czy kotwicę i trzeba wyciągać w szpitalu, bo mają zadziory na końcu. W swoim dwudziestodwuletnim życiu już z 10 razy byłem na takim zabiegu. Tydzień temu poszedłem na jakieś losowe badania, to baba z recepcji jak mnie tylko zobaczyła, to kazała buta ściągać xD, bo myślała, że znowu hak w nodze.

            </div>
            <footer class="bottomContent">
                <section class="tags">
                    <ul>
                        <li>super</li>
                        <li>ciekawe</li>
                        <li>tagi</li>
                    </ul>
                    <button type="button" class="commenting">Add your comment</button>
                </section>
            </footer>
        </article>
        <aside class="comments">
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
        </aside>
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
    <?php
        require 'config.php';

        $stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
        while ($row = $stmt->fetch()) {
            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "<hr>";
        }
    ?>
    <footer id="madeby">-Kacper Twardowski | 2024-</footer>
    <script src="script.js"></script>
</body>
</html>