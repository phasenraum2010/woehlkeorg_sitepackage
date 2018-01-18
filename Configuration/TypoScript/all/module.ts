#-------------------------------------------------------------------------------
#    Module configuration
#-------------------------------------------------------------------------------

module {
	tx_t3extblog < plugin.tx_t3extblog
	tx_vidi {
		settings < plugin.tx_vidi.settings
		view < plugin.tx_vidi.view
		view {
			templateRootPaths {
				10 = {$module.tx_vidi.view.templateRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/ext/vidi/Templates/
			}
			partialRootPaths {
				10 = {$module.tx_vidi.view.partialRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/ext/vidi/Partials/
			}
			layoutRootPaths {
				10 = {$module.tx_vidi.view.layoutRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/ext/vidi/Layouts/
			}
		}
	}
	tx_sysnote < plugin.tx_sysnote
	tx_sysnote {
		settings < plugin.tx_sysnote.settings
		view < plugin.tx_sysnote.view
		view {
			layoutRootPath {
				0 = {$module.tx_sysnote.view.layoutRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/ext/sys_note/Layouts/
			}
			templateRootPath {
				0 = {$module.tx_sysnote.view.templateRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/ext/sys_note/Templates/
			}
			partialRootPath {
				0 = {$module.tx_sysnote.view.partialRootPath}
				1 = EXT:woehlkeorg_sitepackage/Resources/ext/sys_note/Partials/
			}
		}
	}
	tx_media < plugin.tx_media
	tx_media {
		settings < plugin.tx_media.settings
		view < plugin.tx_media.view
		view {
			templateRootPath {
				10 = {$module.tx_media.view.templateRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/ext/media/Templates/
			}
			partialRootPath {
				10 = {$module.tx_media.view.partialRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/ext/media/Partials/
			}
			layoutRootPath {
				10 = {$module.tx_media.view.layoutRootPath}
				20 = EXT:woehlkeorg_sitepackage/Resources/ext/media/Layouts/
			}
		}
	}
}
