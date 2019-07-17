<?php

// extension point
$apiDocs = rex_extension::registerPoint(new rex_extension_point('API_DOCS', rex::getProperty('api_docs')));

echo rex_view::title($this->i18n('title')); 

$subpage = rex_be_controller::getCurrentPagePart(2);

include rex_be_controller::getCurrentPageObject()->getSubPath();


