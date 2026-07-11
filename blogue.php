<?php

$current_page = 'blogue';

include __DIR__. '/_functions.php';
include __DIR__. '/_head.php';

// Sanitize the slug: strip any directory components to prevent path traversal.
$slug = isset($_GET['article']) ? basename($_GET['article']) : '';
$article_path = __DIR__."/articles/$slug.md";

if ($slug === '' || !is_file($article_path)) {
  http_response_code(404);
  $article = ['headers' => ['title' => 'Article introuvable'], 'body' => '<p>Cet article n’existe pas.</p>'];
} else {
  $article = parse_markdown_file($article_path);
}
?>
    <section class="section article-titre">
      <div class="inner padding-y">
        <h1><?= htmlspecialchars($article['headers']['title'] ?? '') ?></h1>
      </div>
    </section>

		<section class="section article">
      <div class="inner">
        <div class="left">
          <?php if (isset($article['headers']['author'])): ?>
          <p class="article-meta">Par <?= htmlspecialchars($article['headers']['author'] ?? '') ?>, le <?= htmlspecialchars($article['headers']['date'] ?? '') ?>. </p>
          <?php endif ?>
          <?= $article['body'] ?>
        </div>
        <div class="right ">
          <figure class="elisa-figure">
            <img class="elisa" alt="Elisa Cyr" src="./images/elisa.png">
            <figcaption class="centered">
              <h3>Élisa Cyr</h3>
              <h4 class="weight-normal gray">Assistante virtuelle</h4>
            </figcaption>
          </figure>
          <p class="cta-container smaller centered">
            <a href="/contact" class="cta hvr-sweep-to-top">Premier RV gratuit
              <svg xmlns="http://www.w3.org/2000/svg" width="25.14" height="25.14"><path d="m9 3.57 6.71 6.7H0v4.59h15.71l-6.7 6.7 3.56 3.58 12.57-12.57L12.57 0z"/></svg> </a>
          </p>
        </div>
      </div><!-- /inner -->
		</section>

    <section class="section blog-cta">
      <div class="inner">
      </div>
    </section>

<?php
include __DIR__. '/_foot.php';

