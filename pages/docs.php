<?php

$content = '';
$content .= '<div>';
$content .= '<ul class="nav nav-tabs" role="tablist">';

$first = true;

foreach ($apiDocs as $section => $value) {
	if ($first) {
		$class = 'active';
		$first = false;
	} else {
		$class = '';
	}

	$content .= '<li role="presentation" class="' . $class . '"><a href="#' . $section . '" aria-controls="' . $section . '" role="tab" data-toggle="tab">' . rex_i18n::msg('api_docs_' . $section) . '</a></li>';
}

$content .= '</ul>';
$content .= '<div class="tab-content">';

$first = true;

foreach ($apiDocs as $section => $value) {
	if ($first) {
		$class = 'active';
		$first = false;
	} else {
		$class = '';
	}

	$content .= '<div role="tabpanel" class="tab-pane ' . $class . '" id="' . $section . '">' . rex_api_docs::getLinks($apiDocs[$section]) . '</div>';
}

$content .= '</div>';
$content .= '</div>';

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::msg('api_docs_docs'), false);
$fragment->setVar('body', $content, false);

echo $fragment->parse('core/page/section.php');
