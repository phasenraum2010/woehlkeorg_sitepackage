# Module configuration
module {
	tx_t3extblog < plugin.tx_t3extblog
	tx_vidi {
		settings < plugin.tx_vidi.settings
		view < plugin.tx_vidi.view
		view {
			templateRootPaths {
				10 = {$module.tx_vidi.view.templateRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/vidi/Templates/
			}
			partialRootPaths {
				10 = {$module.tx_vidi.view.partialRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/vidi/Partials/
			}
			layoutRootPaths {
				10 = {$module.tx_vidi.view.layoutRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/vidi/Layouts/
			}
		}
	}
	tx_sysnote {
		view {
			layoutRootPath {
				0 = {$module.tx_sysnote.view.layoutRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/sys_note/Layouts/
			}
			templateRootPath {
				0 = {$module.tx_sysnote.view.templateRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/sys_note/Templates/
			}
			partialRootPath {
				0 = {$module.tx_sysnote.view.partialRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/sys_note/Partials/
			}
		}
	}
	tx_media {
		view {
			templateRootPath {
				10 = {$module.tx_media.view.templateRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/media/Templates/
			}
			partialRootPath {
				10 = {$module.tx_media.view.partialRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/media/Partials/
			}
			layoutRootPath {
				10 = {$module.tx_media.view.layoutRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/Private/Extensions/media/Layouts/
			}
		}
	}
}


