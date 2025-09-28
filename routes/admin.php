<?php

$files = array_diff(scandir(__DIR__ . '/admin', SCANDIR_SORT_ASCENDING), ['.', '..']);
foreach ($files as $file_name) {
    require_once sprintf('admin/%s', $file_name);
}
