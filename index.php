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
    <nav>Share your simple thoughts :D</nav>
    <main>
        <aside id="reactions">
            <ul>
                <li>Like</li>
                <li>Haha</li>
                <li>Wow</li>
                <li>Sad</li>
                <li>Angry</li>
            </ul>
        </aside>
        <article>
            <header id="title"><h2>-Ale fajny tytuł-</h2></header>
            <p class="author">Żelek</p>
            <div id="content">
                Mój stary to fanatyk wędkarstwa. Pół mieszkania zajebane wędkami, najgorzej. Średnio raz w miesiącu ktoś wdepnie w leżący na ziemi haczyk czy kotwicę i trzeba wyciągać w szpitalu, bo mają zadziory na końcu. W swoim dwudziestodwuletnim życiu już z 10 razy byłem na takim zabiegu. Tydzień temu poszedłem na jakieś losowe badania, to baba z recepcji jak mnie tylko zobaczyła, to kazała buta ściągać xD, bo myślała, że znowu hak w nodze.

                Druga połowa mieszkania zajebana „Wędkarzem Polskim”, „Światem Wędkarza”, „Super Karpiem” xD itp. Co tydzień ojciec robi objazd po wszystkich kioskach w mieście, żeby skompletować wszystkie wędkarskie tygodniki. Byłem na tyle głupi, że nauczyłem go into internety, bo myślałem, że trochę pieniędzy zaoszczędzimy na tych gazetkach, ale teraz nie dosyć, że je kupuje, to jeszcze siedzi na jakichś forach dla wędkarzy i kręci gównoburze z innymi wędkarzami o najlepsze zanęty itp. Potrafi drzeć mordę do monitora albo wypierdolić klawiaturę za okno. Kiedyś ojciec mnie wkurwił, to założyłem tam konto i go trollowałem, pisząc w jego tematach jakieś losowe głupoty, typu „karasie jedzo guwno”. Matka nie nadążała z gotowaniem bigosu na uspokojenie. Aha, ma już na forum rangę SUM, za najebanie 10 tysięcy postów.
            </div>
            <footer>
                <section id="tags">
                    <ul>
                        <li>super</li>
                        <li>ciekawe</li>
                        <li>tagi</li>
                    </ul>
                    <button type="button" class="commenting">Add your comment</button>
                </section>
            </footer>
        </article>
        <aside id="comments">
            Comments
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
    <footer id="madeby">-Kacper Twardowski | 2024-</footer>
    <script src="script.js"></script>
</body>
</html>
<body>
    <header>Simple blog</header>
    <nav>Share your simple thoughts :D</nav>
    <main>
        <artcicle>
            <header id="title">Ale fajny tytuł</header>
            <div id="content">
                Niesamowicie ciekawy contencik
            </div>
            <footer>
                <section id="tags">
                    Tags
                </section>
            </footer>
            <section id="comments">
                Comments
                <ol>

                </ol>
                <form>

                </form>
            </section>
        </artcicle>
    </main>
    <footer id="author">-Kacper Twardowski | 2024-</footer>
</body>
</html>