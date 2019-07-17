<?php

if (rex::isBackend()) {
	require(rex_path::addon('api_docs', 'links.php'));

	// set docs as property for later usage
	rex::setProperty('api_docs', $apiDocs);

	// include backend stuff
	if (rex_be_controller::getCurrentPagePart(2) == 'docs') {
		rex_view::addCssFile($this->getAssetsUrl('css/backend.css'));

		rex_extension::register('PAGE_BODY_ATTR', function (rex_extension_point $ep) {
			$subject = $ep->getSubject();
			$subject['class'][] = 'api-docs-addon';

			$ep->setSubject($subject);
		});
	}
}
