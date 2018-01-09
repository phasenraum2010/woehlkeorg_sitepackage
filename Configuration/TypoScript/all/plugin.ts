plugin {
	tx_woehlkeorg_sitepackage {
		view {
			templateRootPaths {
				10 = EXT:woehlkeorg_sitepackage/Resources/Private/site/Templates/
				20 = {$plugin.tx_woehlkeorg_sitepackage.view.templateRootPath}
			}
			content.templateRootPaths {
				10 = EXT:woehlkeorg_sitepackage/Resources/Private/site/Templates/Content/
				20 = {$plugin.tx_woehlkeorg_sitepackage.view.content.templateRootPath}
			}
			partialRootPaths {
				10 = EXT:woehlkeorg_sitepackage/Resources/Private/site/Partials/
				20 = {$plugin.tx_woehlkeorg_sitepackage.view.partialRootPath}
			}
			layoutRootPaths {
				10 = EXT:woehlkeorg_sitepackage/Resources/Private/site/Layouts/
				20 = {$plugin.tx_woehlkeorg_sitepackage.view.layoutRootPath}
			}
		}
		settings {
		}
	}
	tx_t3extblog {
		view {
			# "Email/" is appended to the final template path when rendering emails
			templateRootPaths {
				0 = {$plugin.tx_t3extblog.view.templateRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/t3extblog/Templates/
				2 = fileadmin/templates/ext/t3extblog/Templates/
			}
			partialRootPaths {
				0 = {$plugin.tx_t3extblog.view.partialRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/t3extblog/Layouts/
			}
			layoutRootPaths {
				0 = {$plugin.tx_t3extblog.view.layoutRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/t3extblog/Partials/
			}
		}
		settings {
			blogsystem {
				posts {
					paginate {
						itemsPerPage = 99
						insertAbove = 1
						insertBelow = 1
						maximumNumberOfLinks = 50
					}
					metadata {
						enable = 1
						twitterCards {
							enable = 1
						}
					}
				}
				comments {
					allowed = 1
					allowedUntil = +6 months
					approvedByDefault = 0
					subscribeForComments = 0
				}
			}
		}
	}
	tx_mindshapecookiehint {
		view {
			templateRootPath {
				0 = {$plugin.tx_mindshapecookiehint.view.templateRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/mindshape_cookie_hint/Templates/
			}
			partialRootPath {
				0 = {$plugin.tx_mindshapecookiehint.view.partialRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/mindshape_cookie_hint/Partials/
			}
			layoutRootPath {
				0 = {$plugin.tx_mindshapecookiehint.view.layoutRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/mindshape_cookie_hint/Layouts/
			}
		}
	}
	plugin.tx_indexedsearch {
		view {
			templateRootPaths {
				5 =
			}
			partialRootPaths {
				5 = EXT:t3sbootstrap/Resources/Private/Extensions/IndexedSearch/Partials/
			}
		}
	}
	tx_indexedsearch {
		view {
			templateRootPaths {
				0 = EXT:indexed_search/Resources/Private/Templates/
				10 = {$plugin.tx_indexedsearch.view.templateRootPath}
				20 = EXT:t3sbootstrap/Resources/Private/Extensions/IndexedSearch/Templates/
				30 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/IndexedSearch/Templates/
			}
			partialRootPaths {
				0 = EXT:indexed_search/Resources/Private/Partials/
				10 = {$plugin.tx_indexedsearch.view.partialRootPath}
				20 = EXT:t3sbootstrap/Resources/Private/Extensions/IndexedSearch/Partials/
				30 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/IndexedSearch/Partials/
			}
			layoutRootPaths {
				0 = EXT:indexed_search/Resources/Private/Layouts/
				10 = {$plugin.tx_indexedsearch.view.layoutRootPath}
			}
		}
	}
	tx_maps2 {
		view {
			templateRootPath {
				0 = {$plugin.tx_maps2.view.templateRootPath}
				5 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/maps2/Templates/
			}
			partialRootPath {
				0 = {$plugin.tx_maps2.view.partialRootPath}
				5 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/maps2/Partials/
			}
			layoutRootPath {
				0 = {$plugin.tx_maps2.view.layoutRootPath}
				5 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/maps2/Layouts/
			}
		}
	}
	tx_news {
		view {
			templateRootPaths {
				2 = EXT:t3sbootstrap/Resources/Private/Extensions/News/Templates/
				5 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/News/Templates/
			}
			partialRootPaths {
				2 = EXT:t3sbootstrap/Resources/Private/Extensions/News/Partials/
				5 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/News/Partials/
			}
			layoutRootPaths {
				2 = EXT:t3sbootstrap/Resources/Private/Extensions/News/Layouts/
				5 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/News/Layouts/
			}
		}
		settings {
			detail.media {
				image.baguetteBox.enabled = 1
			}
		}
	}
}
