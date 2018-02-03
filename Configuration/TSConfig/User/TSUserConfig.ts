// im Seitenbaum die SeitenIDs anzeigen:
options.pageTree.showPageIdWithTitle = 1

mod.web_list {

	// allein durch anklicken kann ein Datensatz editiert werden
	clickTitleMode = edit

	// ListenZeilen bekommen im BE alternierende Farben
	alternateBgColors = 1
}

// Breite des Seitenbaum-Frames veränderbar machen:
setup.override.navFrameResizable = 1

// Upload-Button in Contentelementen ausblenden
// es soll bevorzugt /fileadmin/... benutzt werden
setup.override.edit_docModuleUpload = 0

tx_news.module.redirectToPageOnStart = 4
tx_news.module.defaultPid.tx_news_domain_model_news = 4
tx_news.module.defaultPid.tx_news_domain_model_link = 4
tx_news.module.defaultPid.tx_news_domain_model_tag = 4

tx_news.predefine.author  = 1

# Default pid for "fe_groups" in Vidi:
tx_vidi.dataType.fe_groups.storagePid = 5
