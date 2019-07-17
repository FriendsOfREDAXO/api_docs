<?php

$apiDocs = [
	'api' => [
		'title' => rex_i18n::msg('api_docs_api'),
		'links' => [
			[
				'title' => 'REDAXO 5 API',
				'description' => 'Die komplette R5 API',
				'href' => 'http://www.redaxo.org/docs/master/'
			],
		]
	],
	'handbook' => [
		'title' => rex_i18n::msg('api_docs_handbook'),
		'links' => [
			[
				'title' => 'REDAXO 5 Handbuch',
				'description' => 'Das REDAXO 5 Handbuch',
				'href' => 'https://redaxo.org/doku/master'
			],
		]
	],
	'extension_points' => [
		'title' => rex_i18n::msg('api_docs_extension_points'),
		'links' => [
			[
				'title' => 'Extension Points aus Entwickler-Handbuch',
				'description' => 'Extension Points sind unten auf der Seite aufgeführt',
				'href' => 'https://redaxo.org/doku/master/extension-points'
			],
			[
				'title' => 'Cheatsheet AddOn',
				'description' => 'Extrahiert und listet on-the-fly alle Extension Points aus Core und AddOns',
				'href' => 'https://github.com/tbaddade/redaxo_cheatsheet'
			],
			[
				'title' => 'Änderungen in REDAXO 5',
				'description' => 'Siehe Abschnitt Extension Points',
				'href' => 'https://redaxo.org/doku/master/aenderungen-v4-v5'
			],
		]
	],
	'rexvars' => [
		'title' => rex_i18n::msg('api_docs_rexvars'),
		'links' => [
			[
				'title' => 'REDAXO Variablen aus Dokumentation',
				'description' => 'Enthält zahlreiche Beispiele',
				'href' => 'https://redaxo.org/doku/master/redaxo-variablen'
			],
			[
				'title' => 'Cheatsheet AddOn',
				'description' => 'Extrahiert und listet on-the-fly alle REDAXO Variablen',
				'href' => 'https://github.com/tbaddade/redaxo_cheatsheet'
			],
			[
				'title' => 'Änderungen in REDAXO 5',
				'description' => 'Siehe Abschnitt REX_VAR und $REX weiter oben',
				'href' => 'https://redaxo.org/doku/master/aenderungen-v4-v5'
			],
		]
	],
	'r5_changes' => [
		'title' => rex_i18n::msg('api_docs_r5_changes'),
		'links' => [
			[
				'title' => 'Änderungen in REDAXO 5',
				'description' => 'Alle Änderungen von R4 zu R5 im Überblick',
				'href' => 'https://redaxo.org/doku/master/aenderungen-v4-v5'
			],
		]
	],
	'code_snippets' => [
		'title' => rex_i18n::msg('api_docs_code_snippets'),
		'links' => [
			[
				'title' => 'Tips und Tricks',
				'description' => 'Code Snippet Sammlung von Friends Of REDAXO',
				'href' => 'https://github.com/FriendsOfREDAXO/tricks'
			],
			[
				'title' => 'Weitere Tips und Tricks',
				'description' => 'Offene Issues aus der Code Snippet Sammlung von Friends Of REDAXO',
				'href' => 'https://github.com/FriendsOfREDAXO/tricks/issues'
			],
			[
				'title' => 'Passwort vergessen',
				'description' => 'Thema Passwort vergessen aus der neuen Dokumentation',
				'href' => 'https://github.com/redaxo/docs/blob/master/passwort-vergessen.md'
			],
			[
				'title' => 'Aktionen',
				'description' => 'Thema Aktionen aus der neuen Dokumentation',
				'href' => 'https://redaxo.org/doku/master/modul-aktionen'
			],
			[
				'title' => 'Fragmente',
				'description' => 'Thema Fragmente aus der neuen Dokumentation',
				'href' => 'https://redaxo.org/doku/master/fragmente'
			],
			[
				'title' => 'Paginierung',
				'description' => 'Thema Paginierung aus der neuen Dokumentation',
				'href' => 'https://redaxo.org/doku/master/paginierung'
			],
		]
	],
	'faq' => [
		'title' => rex_i18n::msg('api_docs_faq'),
		'links' => [
			[
				'title' => 'FAQ by Alex Plus',
				'description' => 'Aktuell nur als Issues auf GitHub',
				'href' => 'https://github.com/redaxo/docs/issues?utf8=%E2%9C%93&q=Q%26A%20is%3Aissue%20author%3Aalexplusde'
			],
		]
	],
	'github' => [
		'title' => rex_i18n::msg('api_docs_github'),
		'links' => [
			[
				'title' => 'REDAXO Core',
				'description' => 'GitHub Repository des Cores',
				'href' => 'https://github.com/redaxo/redaxo/'
			],
			[
				'title' => 'AddOns von REDAXO',
				'description' => 'GitHub Repository mit AddOns wie Media Manager, Meta Info und Backup',
				'href' => 'https://github.com/redaxo/redaxo/tree/master/redaxo/src/addons'
			],
			[
				'title' => 'AddOns von Yakamara',
				'description' => 'GitHub Repository mit AddOns wie yForm, yCom und yRewrite',
				'href' => ' https://github.com/yakamara/'
			],
			[
				'title' => 'AddOns von Friends Of REDAXO',
				'description' => 'GitHub Repository mit AddOns wie Developer, MForm, Search It',
				'href' => 'https://github.com/FriendsOfREDAXO'
			],
			[
				'title' => 'AddOns von tbaddade',
				'description' => 'GitHub Repository mit AddOns Url, Sprog und Cheatsheet',
				'href' => 'https://github.com/tbaddade/'
			],
			[
				'title' => 'AddOns von RexDude',
				'description' => 'GitHub Repository mit AddOns wie CKEditor, Globale Einstellungen und Navigation Factory',
				'href' => 'https://github.com/RexDude/'
			],
		]
	],
	'cheatsheet' => [
		'title' => rex_i18n::msg('api_docs_cheatsheet'),
		'links' => [
			[
				'title' => 'Altes Cheatsheet für REDAXO 4 von tbaddade',
				'description' => 'Siehe REDAXO API und Änderungen in REDAXO 5 für Umschreibungen',
				'href' => 'http://blumbeet.com/files/cheatsheet_redaxo_42.pdf'
			],
			[
				'title' => 'Altes Cheatsheet für REDAXO 4 von jdlx',
				'description' => 'Siehe REDAXO API und Änderungen in REDAXO 5 für Umschreibungen',
				'href' => 'http://rexdev.de/cheatsheets/rex450.html'
			],
		]
	],
];
