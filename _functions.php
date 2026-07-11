<?php

require_once __DIR__.'/vendor/autoload.php';

use Michelf\MarkdownExtra;

/**
 * Parse a Markdown file with optional YAML-style front matter.
 *
 * @param string $path Path to the .md file.
 * @return array{body: string, headers: array<string, string>, excerpt?: string}
 *   - body:    the full Markdown content converted to HTML
 *   - headers: front matter as an associative array (empty if none)
 *   - excerpt: HTML of the content before the first `* * *` break — only
 *              present when such a break exists in the body
 */
function parse_markdown_file($path) {
  $contents = file_get_contents($path);

  if ($contents === false) {
    throw new RuntimeException("Cannot read markdown file: $path");
  }

  // Normalize line endings so the front matter regex is predictable.
  $contents = str_replace(["\r\n", "\r"], "\n", $contents);

  $headers = [];
  $body = $contents;

  // Front matter must be the very first thing in the file, delimited by ---.
  if (preg_match('/^---\n(.*?)\n---\n?(.*)$/s', $contents, $matches)) {
    $headers = parse_front_matter($matches[1]);
    $body = $matches[2];
  }

  // A `* * *` thematic break (a line of asterisks separated by spaces) splits
  // the excerpt from the rest. The pattern requires at least three asterisks
  // on the line, so a list bullet like `* 1 : ...` never matches.
  $excerpt = null;
  $parts = preg_split('/^[ \t]*\*(?:[ \t]*\*){2,}[ \t]*$/m', $body, 2);
  if (count($parts) === 2) {
    $excerpt = $parts[0];
    // Rejoin without the break line so the article body reads seamlessly.
    $body = $parts[0]."\n".$parts[1];
  }

  $result = [
    'body' => MarkdownExtra::defaultTransform($body),
    'headers' => $headers,
  ];

  if ($excerpt !== null) {
    $result['excerpt'] = MarkdownExtra::defaultTransform($excerpt);
  }

  return $result;
}

/**
 * Parse simple `key: value` front matter into an associative array.
 *
 * @param string $raw The text between the --- delimiters.
 * @return array<string, string|bool>
 */
function parse_front_matter($raw) {
  $headers = [];

  foreach (explode("\n", $raw) as $line) {
    $line = trim($line);

    if ($line === '' || strpos($line, ':') === false) {
      continue;
    }

    list($key, $value) = explode(':', $line, 2);
    $value = trim($value);

    // Cast bare true/false into real booleans (e.g. `draft: true`).
    $lower = strtolower($value);
    if ($lower === 'true' || $lower === 'false') {
      $value = $lower === 'true';
    }

    $headers[trim($key)] = $value;
  }

  return $headers;
}


/**
 * @param string $slug The current slug in the navigation
 * @return string 'active' if (global) $current_page is $slug
 */
function active($slug) {
  global $current_page;

  if (!isset($current_page)) {
    return '';
  }

  if ($current_page == $slug) {
    return 'active';
  }

  return '';
}

