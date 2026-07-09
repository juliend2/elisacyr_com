<?php

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

