page {
	includeCSS {
		cssFileGoogleFontJosefinSans = https://fonts.googleapis.com/css?family=Josefin+Sans
		cssFileGoogleFontRaleway = https://fonts.googleapis.com/css?family=Raleway
		bootstrapFour = https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css
		#bootstrapFour.forceOnTop = 1
		cssFileMyOwn = EXT:woehlkeorg_sitepackage/Resources/Public/css/my.css
	}
	includeJSFooterlibs {
		jsTwitterWidget = https://platform.twitter.com/widgets.js
		jsTwitterWidget.external = 1
		#jquery = https://code.jquery.com/jquery-2.2.4.min.js
		#jquery.external = 1
		t3sbjquery = https://code.jquery.com/jquery-3.2.1.slim.min.js
		t3sbjquery.forceOnTop = 1
		t3sbpopper = https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js
		t3sbootstrap = https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js
	}
	includeJSFooter {
		#jquery = EXT:indexed_search_autocomplete/Resources/Public/JavaScript/Jquery-3.2.1.min.js
		#jsMyJquery = EXT:indexed_search_autocomplete/Resources/Public/JavaScript/Jquery-3.2.1.min.js
		jsFileMyOwn = EXT:woehlkeorg_sitepackage/Resources/Public/js/my.js
	}
	10 {
		layoutRootPaths {
			310 = {$plugin.tx_woehlkeorg_sitepackage.view.layoutRootPath}
			300 = EXT:woehlkeorg_sitepackage/Resources/Private/site/Layouts/
		}
		partialRootPaths {
			310 = {$plugin.tx_woehlkeorg_sitepackage.view.partialRootPath}
			300 = EXT:woehlkeorg_sitepackage/Resources/Private/site/Partials/
		}
		templateRootPaths {
			310 = {$plugin.tx_woehlkeorg_sitepackage.view.templateRootPath}
			305 = EXT:woehlkeorg_sitepackage/Resources/Private/site/Templates/
		}
		settings {
			navbar {
				image {
					# Eigenes (default) Brand Image:
					defaultPath = fileadmin/layout/favicon/apple-icon-60x60.png
					width = 30
					height = 30
				}
			}
		}
	}
	headerData {
		1000 = TEXT
		1000.value (
<link rel="apple-touch-icon" sizes="57x57" href="/fileadmin/layout/favicon/apple-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="/fileadmin/layout/favicon/apple-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/fileadmin/layout/favicon/apple-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/fileadmin/layout/favicon/apple-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/fileadmin/layout/favicon/apple-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/fileadmin/layout/favicon/apple-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/fileadmin/layout/favicon/apple-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/fileadmin/layout/favicon/apple-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="/fileadmin/layout/favicon/apple-icon-180x180.png" />
<link rel="icon" type="image/png" sizes="192x192"  href="/fileadmin/layout/favicon/android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/fileadmin/layout/favicon/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="96x96" href="/fileadmin/layout/favicon/favicon-96x96.png" />
<link rel="icon" type="image/png" sizes="16x16" href="/fileadmin/layout/favicon/favicon-16x16.png" />
<link rel="manifest" href="/fileadmin/layout/favicon/manifest.json" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="/fileadmin/layout/favicon/ms-icon-144x144.png" />
<meta name="theme-color" content="#ffffff" />
		)
	}
	config {
		headerComment (
--------------------------------------------------
|                                                |
|  TYPO3 Website - Development by                |
|                                                |
|  Thomas Woehlke | 2017 | woehlke.org           |
|                                                |
--------------------------------------------------
		)
		index_enable = 1
		# Wenn gesetzt, werden externe Medien, auf die auf Seiten verlinkt wird, ebenfalls indiziert.
		index_externals = 1
		index_metatags = 1
	}
}



