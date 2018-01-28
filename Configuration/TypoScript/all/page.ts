page {

	includeCSS {

		cssFileGoogleFontJosefinSans = https://fonts.googleapis.com/css?family=Josefin+Sans

		cssFileGoogleFontRaleway = https://fonts.googleapis.com/css?family=Raleway

		bootstrapFour = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Bootstrap/4.0.0/scss/bootstrap.scss
		bootstrapFour.forceOnTop = 1
		bootstrapFour.if.isFalse = {$bootstrap.extconf.customScss}

		customBootstrap = uploads/tx_t3sbootstrap/bootstrap.scss
		customBootstrap.forceOnTop = 1
		customBootstrap.if.isTrue = {$bootstrap.extconf.customScss}

		t3sfontawesome4 = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Fontawesome/4.0.7/css/font-awesome.min.css
		t3sfontawesome4.if.value = {$bootstrap.config.fontawesomeversion}
		t3sfontawesome4.if.equals = 4

		t3sfontawesome5 = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Fontawesome/5.0.6/on-server/css/fontawesome-all.css
		t3sfontawesome5.if.value = {$bootstrap.config.fontawesomeversion}
		t3sfontawesome5.if.equals = 5

		t3sfontawesome4link = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Fontawesome/fontAwesomeLink4.css
		t3sfontawesome4link.if.value = {$bootstrap.config.fontawesomeversion}
		t3sfontawesome4link.if.equals = 4
		t3sfontawesome5link = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Fontawesome/fontAwesomeLink5.css
		t3sfontawesome5link.if.value = {$bootstrap.config.fontawesomeversion}
		t3sfontawesome5link.if.equals = 5

		cssFileMyOwn = EXT:woehlkeorg_sitepackage/Resources/Public/Styles/my.css
	}
	includeJSLibs {
		fontawesome = https://use.fontawesome.com/releases/v5.0.6/js/all.js
		fontawesome.external = 1
		fontawesomeShims =  https://use.fontawesome.com/releases/v5.0.6/js/v4-shims.js
		fontawesomeShims.external = 1
		jsTwitterWidget = https://platform.twitter.com/widgets.js
		jsTwitterWidget.external = 1
	}
	includeJSFooterlibs {
		jquery = https://code.jquery.com/jquery-3.2.1.slim.min.js
		jquery.external = 1
		t3sbjquery = https://code.jquery.com/jquery-3.2.1.slim.min.js
		t3sbjquery.forceOnTop = 1
		t3sbpopper = https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js
		t3sbpopper.external = 1
		t3sbootstrap = https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js
		t3sbootstrap.external = 1
	}
	includeJSFooter {
		t3sbjquery = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Jquery/jquery-3.2.1.slim.min.js
		jquery = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Jquery/jquery-3.2.1.slim.min.js
		t3sbpopper = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Popper/1.12.9/umd/popper.min.js
		t3sbootstrap = EXT:woehlkeorg_sitepackage/Resources/Public/Contrib/Bootstrap/4.0.0/dist/js/bootstrap.min.js
		jsFileMyOwn = EXT:woehlkeorg_sitepackage/Resources/Public/JavaScripts/my.js
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
|  TYPO3 Integration and Development             |
|                                                |
|  2018 | Thomas Woehlke | woehlke.org           |
|                                                |
--------------------------------------------------
		)
		index_enable = 1
		# Wenn gesetzt, werden externe Medien, auf die auf Seiten verlinkt wird, ebenfalls indiziert.
		index_externals = 1
		index_metatags = 1
	}
}



