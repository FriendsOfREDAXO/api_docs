<?php

class rex_api_docs {
	public static function getLinks($links = []) {
		$content = '';

		foreach ($links['links'] as $link) {
			if ($link['description'] != '') {
				$description = $link['description'] . '<br />';
			}

			$targetAttr = 'target="_blank"';
			$icon = '<i class="fa fa-external-link"></i>';

			if (isset($link['open_in_new_window'])) {
				if ($link['open_in_new_window']) {
					$targetAttr = 'target="_blank"';
					$icon = '<i class="fa fa-external-link"></i>';
				} else {
					$targetAttr = '';
					$icon = '';
				}
			}

			if (strpos($link['href'], 'http') === false) {
				$shownLink = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $link['href'];
			} else {
				$shownLink = $link['href'];
			}

			$content .= '
				<h2 class="api-docs">' . $link['title'] . '</h2>
				<p>
					' . $description . '
					<a ' . $targetAttr . ' href="' . $link['href'] . '">' . $shownLink . ' ' . $icon . '</a>
				</p>
			';
		}

		return $content;
	}
}
