API Docs AddOn für REDAXO 5
===========================

Umfangreiche Linksammlung zu REDAXO 5 Entwickler Resourcen

Hinzufügen eigener Links
------------------------

In der `boot.php` des eigenen AddOns den `API_DOCS` Extension Point registrieren.

```php
if (rex::isBackend()) {
	rex_extension::register('API_DOCS', function(rex_extension_point $ep) {
		$subject = $ep->getSubject();

		if (isset($subject['api']['links'])) {
			$subject['api']['links'][] = [
				'title' => rex_i18n::msg('xcore_api_docs_title'),
				'description' => rex_i18n::msg('xcore_api_docs_description'),
				'href' => rex_url::backendPage('xcore/rexx_api'),
				'open_in_new_window' => false
			];
		}

		$ep->setSubject($subject);
	});
}
```

Hinweise
--------

* Getestet mit REDAXO 5.3
* AddOn-Ordner lautet: `api_docs`

Changelog
---------

siehe `CHANGELOG.md` des AddOns

Lizenz
------

MIT-Lizenz, siehe `LICENSE.md` des AddOns

