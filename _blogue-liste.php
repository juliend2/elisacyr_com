<?php
// Lists all published (non-draft) articles as .blogue-post teasers.
// Expects to be included inside a `.blogue > .inner` container.
$articles = glob(__DIR__.'/articles/*.md');
$i = 0;
foreach ($articles as $path):
  $article = parse_markdown_file($path);
  if (!empty($article['headers']['draft'])) {
    continue; // draft articles are hidden from listings
  }
  $slug = basename($path, '.md');
  $teaser = $article['excerpt'] ?? $article['body'];
  $side = $i % 2 === 0 ? 'left' : 'right';
  $i++;
?>
        <div class="<?= $side ?> blogue-post">
          <h2 class="bigger-text"><a href="/blogue/<?= rawurlencode($slug) ?>"><?= htmlspecialchars($article['headers']['title'] ?? $slug) ?></a>
          </h2>
          <?= $teaser ?>
          <p class="cta-container smaller">
            <a href="/blogue/<?= rawurlencode($slug) ?>" class="cta hvr-sweep-to-top">Lire la suite
              <svg xmlns="http://www.w3.org/2000/svg" width="25.14" height="25.14"><path d="m9 3.57 6.71 6.7H0v4.59h15.71l-6.7 6.7 3.56 3.58 12.57-12.57L12.57 0z"/></svg> </a>
          </p>
        </div>
<?php endforeach ?>
