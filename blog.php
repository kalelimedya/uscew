<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets/style/index.css">

<style>
*,
*::after,
*::before {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
}

a {
    text-decoration: none;
}

ol, ul, li {
    list-style: none;
}

blockquote, q {
	quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

html {
    font-size: 62.5%;
}

html:focus-within {
    scroll-behavior: smooth;
}
  
body {
    min-height: 100vh;
    text-rendering: optimizeSpeed;
    line-height: 1.5;
}

img, picture {
    max-width: 100%;
}

article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}

@media (prefers-reduced-motion: reduce) {
    html:focus-within {
        scroll-behavior: auto;
    }
    
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

.container .main-content .sidebar {
    text-align: left;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: flex-start;
    align-content: center;
}

.container .main-content .sidebar .popular-posts-side {
    margin: 0rem 3rem;
    width: 100%;
}

.container .main-content .sidebar .popular-posts-side h2,
.container .main-content .sidebar .archives-side h2,
.container .main-content .sidebar .social-side h2,
.container .main-content .sidebar .advertisement-side h2 {
    font-size: 1.6rem;
    color: #9e9e9e;
    font-weight: 600;
    padding-bottom: 1rem;
    padding-top: 2rem;
}

.container .main-content .sidebar .popular-posts-side .popular-posts .popular-post {
    position: relative;
    background-color: var(--white);
    margin-bottom: 2rem;
    box-shadow: var(--box-shadow);
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: row;
    align-content: center;
    padding: 1rem;
    gap: 1rem;
    transition: 0.3s;
}

.container .main-content .sidebar .popular-posts-side .popular-posts .popular-post:hover {
    margin-left: 1rem;
    margin-right: -1rem;
    transition: 0.3s;
}

.container .main-content .sidebar .popular-posts-side .popular-posts .popular-post .popular-post-image {
    width: 6rem;
    height: 6rem;
}

.container .main-content .sidebar .popular-posts-side .popular-posts .popular-post .popular-post-image img {
    min-width: 6rem;
    min-height: 6rem;
    object-fit: cover;
}

.container .main-content .sidebar .popular-posts-side .popular-posts .popular-post .popular-post-content .popular-post-title {
    font-size: 1.6rem;
    color: var(--black);
    font-weight: 400;
}

.container .main-content .sidebar .popular-posts-side .popular-posts .popular-post .popular-post-desc {
    font-size: 13px;
    color: #a9a9a9;
}

@media only screen and (max-width: 500px) {
    .container .main-content .sidebar .popular-posts-side {
        margin: 0 auto;
    }

    .container .main-content .sidebar {
        flex-direction: column !important;
    }
}

.container .main-content .sidebar .archives-side {
    margin: 0rem 3rem;
    width: 100%;
}

.container .main-content .sidebar .archives-side .archive-box {
    background: var(--white);
    margin: 1rem 0rem;
    padding: 1rem 2rem;
    box-shadow: var(--box-shadow);
    border-radius: 0.3rem;
    border: 0px;
    position: relative;
    transition: 0.3s;
    height: 4.5rem;
}

.container .main-content .sidebar .archives-side .archive-box a {
    font-size: 1.6rem;
    color: var(--black);
    position: absolute;
    transform: translate(0rem, 0rem);
    transition: 0.3s;
    right: unset;
    width: fit-content;
}

.container .main-content .sidebar .archives-side .archive-box:hover a {
    color: var(--gold);
    position: absolute;
    transform: translate(50%, 0rem);
    right: 50%;
    transition: 0.3s;
}

@media only screen and (max-width: 600px) {
    .container .main-content .sidebar {
        flex-direction: column;
        width: 100%;
    }

    .container .main-content .sidebar .popular-posts-side {
        width: 100%;
    }

    .container .main-content .sidebar .archives-side {
        width: 100%;
    }
}

.container .main-content .sidebar .social-side {
    margin: 0rem 3rem;
    width: 100%;
}

.container .main-content .sidebar .social-side div {
    display: flex;
    padding: 2rem;
    box-shadow: var(--box-shadow);
    background: var(--white);
    border-radius: 0.3rem;
    gap: 1rem;
    justify-content: space-evenly;
}

.container .main-content .sidebar .social-side div a {
    max-width: 5rem;
    transition: 0.3s;
}

.container .main-content .sidebar .social-side div a img {
    border-radius: 0rem;
    filter: blur(0rem);
    transition: 0.3s;
}

.container .main-content .sidebar .social-side div a:hover img {
    border-radius: 1rem;
    filter: blur(0.1rem);
    transition: 0.3s;
}

.container .main-content .sidebar .advertisement-side {
    margin: 0rem 3rem;
    width: 100%;
}

.container .main-content .sidebar .advertisement-side .my-advertisement-box {
    border: 0.4rem double orange;
    width: 100%;
    height: 25rem;
    margin: 0 auto;
    text-align: center;
    vertical-align: middle;
    color: orange;
    font-size: 1.6rem;
    position: relative;
    transition: 0.3s;
    cursor: pointer;
}

.container .main-content .sidebar .advertisement-side .my-advertisement-box:hover p {
    font-size: 2.3rem;
    transition: 0.3s;
}

.container .main-content .sidebar .advertisement-side .my-advertisement-box p {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: fit-content;
    transition: 0.3s;
}

@media only screen and (max-width: 992px) {
    .container .main-content .sidebar {
        flex-direction: row;
    }

    .container .main-content .sidebar .popular-posts-side {
        flex: 1;
    }

    .container .main-content .sidebar .archives-side {
        flex: 1;
    }
}

.container .main-content {
    display: flex;
    align-items: flex-start;
    flex-direction: row;
    text-align: center;
    margin: 3rem 10rem;
    gap: 5rem;
}

@media only screen and (max-width: 1124px) {
    .container .main-content {
        margin: 3rem;
    }
}

.container .main-content .blog {
    flex: 3;
}

.container .main-content .sidebar {
    flex: 1;
}

.container .main-content .blog .post {
    display: flex;
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    margin-bottom: 5rem;
    position: relative;
    min-height: 30rem;
}

.container .main-content .blog .post .post-image {
    min-height: 100%;
    transition: 0.3s;
    overflow: hidden;
}

.container .main-content .blog .post:hover .post-image img {
    transform: scale(1.5);
    transition: 0.3s;
}

.container .main-content .blog .post .post-image img {
    height: 100%;
    transition: 0.3s;
    object-fit: cover;
}

.container .main-content .blog .post .post-content {
    padding: 2rem 3rem 2.5rem 3rem;
    text-align: left;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: space-evenly;
}

.container .main-content .blog .post .post-content .post-title {
    color: #212121;
    font-size: 3rem;
    font-weight: 900;
    cursor: pointer;
}

.container .main-content .blog .post .post-content .post-info {
    text-align: left;
    padding: 1rem 0rem;
    color: #afafaf;
    font-size: 1.5rem;
}

.container .main-content .blog .post .post-read-more {
    height: 4.5rem;
    position: absolute;
    padding: 0rem 1.5rem;
    background-color: var(--gold);
    color: var(--white);
    font-weight: 900;
    font-size: 2.8rem;
    border-radius: 50%;
    right: 2rem;
    box-shadow: 1px 1px 5px rgb(0 0 0 / 19%);
    bottom: -2rem;
    transition: 0.3s;
    cursor: pointer;
}

.container .main-content .blog .post .post-read-more:hover {
    background-color: var(--white);
    color: var(--gold);
    box-shadow: 0rem 0rem 0.5rem 0.1rem var(--gold);
    transition: 0.3s;
}

.container .main-content .blog .post .post-summary {
    line-height: 150%;
    color: #949494;
    font-size: 1.5rem;
}

@media only screen and (max-width: 992px) {
    .container .main-content {
        flex-direction: column;
    }
}

@media only screen and (max-width: 500px) {
    .container .main-content {
        margin: 3rem 1rem;
    }

    .container .main-content .blog .post {
        flex-direction: column;
    }
}

.container .main-content .blog .post .pagination-blog {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    gap: 2rem;
}

.container .main-content .blog .pagination-blog div {
    padding: 1rem 1.7rem;
    transition: 0.3s;
    font-weight: 600;
    font-size: 1.4rem;
    color: #fab526;
    margin: 0rem 0.5rem;
    text-decoration: none;
    display: inline-block;
    background: var(--white);
    border-radius: 0.3rem;
    box-shadow: var(--box-shadow);
    cursor: pointer;
}


.container .main-content .blog .pagination-blog div:hover {
    background-color: var(--gold);
    color: var(--white);
}

.container .main-content .blog .pagination-blog div.active{
    opacity: 0.5;
}


</style>



        <div class="main-content">

            <div class="blog" id="Blog">

                <article class="posts">

                    <div class="post">
                        <div class="post-image">
                            <img src="assets/images/posts/post-1.png" alt="How to Ace Your Life Image" loading="lazy">
                        </div>
                        <div class="post-content">
                            <a class="post-title">How to Ace Your Life</a>
                            <p class="post-info">Posted on January 31, 2020 by superbthemes</p>
                            <p class="post-summary">
                                Etiam placerat velit vitae duiblandit sollicitudin.
                                Vestibulum tincidunt sed dolor sit amet volutpat.
                                Nullam egestas sem at mollis sodales.
                                Nunc eget lacinia eros, ut tincidunt nunc.
                                Quisque volutpat, enim id volutpat interdum,
                                purus odio euismod neque, sit amet faucibus…
                            </p>
                        </div>
                        <div class="post-read-more">
                            <span>+</span>
                        </div>
                    </div>

                    <div class="post">
                        <div class="post-image">
                            <img src="assets/images/posts/post-2.png" alt="The Joys Of Being A Morning Person Image" loading="lazy">
                        </div>
                        <div class="post-content">
                            <a class="post-title">The Joys Of Being A Morning Person</a>
                            <p class="post-info">Posted on January 24, 2020 by superbthemes</p>
                            <p class="post-summary">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                                Vestibulum tincidunt sed dolor sit amet volutpat.
                                Nullam egestas sem at mollis sodales.
                                Nunc eget lacinia eros, ut tincidunt nunc.
                                Quisque volutpat, enim id volutpat interdum,
                                purus odio euismod neque, sit amet faucibus…
                            </p>
                        </div>
                        <div class="post-read-more">
                            <span>+</span>
                        </div>
                    </div>

                    <div class="post">
                        <div class="post-image">
                            <img src="assets/images/posts/post-3.png" alt="Travelling with Strangers Image" loading="lazy">
                        </div>
                        <div class="post-content">
                            <a class="post-title">Travelling with Strangers</a>
                            <p class="post-info">Posted on January 22, 2020 by superbthemes</p>
                            <p class="post-summary">
                                Etiam placerat velit vitae duiblandit sollicitudin.
                                Vestibulum tincidunt sed dolor sit amet volutpat.
                                Nullam egestas sem at mollis sodales.
                                Nunc eget lacinia eros, ut tincidunt nunc.
                                Quisque volutpat, enim id volutpat interdum,
                                purus odio euismod neque, sit amet faucibus…
                            </p>
                        </div>
                        <div class="post-read-more">
                            <span>+</span>
                        </div>
                    </div>

                    <div class="post">
                        <div class="post-image">
                            <img src="assets/images/posts/post-4.png" alt="What I’ve learned from road trips Image" loading="lazy">
                        </div>
                        <div class="post-content">
                            <a class="post-title">What I’ve learned from road trips</a>
                            <p class="post-info">Posted on January 22, 2020 by superbthemes</p>
                            <p class="post-summary">
                                Etiam placerat velit vitae duiblandit sollicitudin.
                                Vestibulum tincidunt sed dolor sit amet volutpat.
                                Nullam egestas sem at mollis sodales.
                                Nunc eget lacinia eros, ut tincidunt nunc.
                                Quisque volutpat, enim id volutpat interdum,
                                purus odio euismod neque, sit amet faucibus…
                            </p>
                        </div>
                        <div class="post-read-more">
                            <span>+</span>
                        </div>
                    </div>

                    <div class="post">
                        <div class="post-image">
                            <img src="assets/images/posts/post-5.png" alt="Why Long Walks Will Change Your Life Image" loading="lazy">
                        </div>
                        <div class="post-content">
                            <a class="post-title">Why Long Walks Will Change Your Life</a>
                            <p class="post-info">Posted on December 16, 2019 by superbthemes</p>
                            <p class="post-summary">
                                Etiam placerat velit vitae duiblandit sollicitudin.
                                Vestibulum tincidunt sed dolor sit amet volutpat.
                                Nullam egestas sem at mollis sodales.
                                Nunc eget lacinia eros, ut tincidunt nunc.
                                Quisque volutpat, enim id volutpat interdum,
                                purus odio euismod neque, sit amet faucibus…
                            </p>
                        </div>
                        <div class="post-read-more">
                            <span>+</span>
                        </div>
                    </div>
                    
                </article>

                <div class="pagination-blog">
                    <div class="active">1</div>
                    <div>2</div>
                    <div>NEXT</div>
                </div>

            </div>

            <div class="sidebar">

                <div class="popular-posts-side">
                    <h2>POPULAR POSTS</h2>
                    <div class="popular-posts">
                        <div class="popular-post">
                            <div class="popular-post-image">
                                <img src="assets/images/posts/post-1.png" alt="How to Ace Your Life Image" loading="lazy">
                            </div>
                            <div class="popular-post-content">
                                <a href="#" class="popular-post-title">How to Ace Your Life</a>
                                <p class="popular-post-desc">
                                    Etiam placerat velit vitae dui blandit sollicitudin.
                                </p>
                            </div>
                        </div>
                        <div class="popular-post">
                            <div class="popular-post-image">
                                <img src="assets/images/posts/post-2.png" alt="The Joys Of Being A Morning Person Image" loading="lazy">
                            </div>
                            <div class="popular-post-content">
                                <a href="#" class="popular-post-title">The Joys Of Being A …</a>
                                <p class="popular-post-desc">
                                    Etiam placerat velit vitae dui blandit sollicitudin.
                                </p>
                            </div>
                        </div>
                        <div class="popular-post">
                            <div class="popular-post-image">
                                <img src="assets/images/posts/post-3.png" alt="Travelling with Strangers Image" loading="lazy">
                            </div>
                            <div class="popular-post-content">
                                <a href="#" class="popular-post-title">Travelling with Stra…</a>
                                <p class="popular-post-desc">
                                    Etiam placerat velit vitae dui blandit sollicitudin.
                                </p>
                            </div>
                        </div>
                        <div class="popular-post">
                            <div class="popular-post-image">
                                <img src="assets/images/posts/post-4.png" alt="What I’ve learned from road trips Image" loading="lazy">
                            </div>
                            <div class="popular-post-content">
                                <a href="#" class="popular-post-title">What I’ve learned fr…</a>
                                <p class="popular-post-desc">
                                    Etiam placerat velit vitae dui blandit sollicitudin.
                                </p>
                            </div>
                        </div>
                        <div class="popular-post">
                            <div class="popular-post-image">
                                <img src="assets/images/posts/post-4.png" alt="Why Long Walks Will Change Your Life Image" loading="lazy">
                            </div>
                            <div class="popular-post-content">
                                <a href="#" class="popular-post-title">Why Long Walks Will …</a>
                                <p class="popular-post-desc">
                                    Etiam placerat velit vitae dui blandit sollicitudin.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="archives-side">
                    <h2>ARCHIVES</h2>
                    <div class="archive-box"><a href="#">January 2020</a></div>
                    <div class="archive-box"><a href="#">December 2019</a></div>
                    <div class="archive-box"><a href="#">September 2019</a></div>
                    <div class="archive-box"><a href="#">June 2019</a></div>
                </div>

                <div class="social-side">
                    <h2>LETS GET SOCIAL!</h2>
                    <div>
                        <a href="#"><img src="assets/images/social/twitter.png" alt="Twitter Logo" loading="lazy"></a>
                        <a href="#"><img src="assets/images/social/facebook.png" alt="Facebook Logo" loading="lazy"></a>
                        <a href="#"><img src="assets/images/social/pinterest.png" alt="Pinterest Logo" loading="lazy"></a>
                        <a href="#"><img src="assets/images/social/linkedin.png" alt="Linkedin Logo" loading="lazy"></a>
                    </div>
                </div>

                <div class="advertisement-side">
                    <h2>ADVERTISEMENT</h2>
                    <div class="my-advertisement-box">
                        <p>Banner Ad 300x300</p>
                    </div>
                </div>

            </div>

        </div>

































<?php include 'footer.php'; ?>