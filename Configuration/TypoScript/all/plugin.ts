#-------------------------------------------------------------------------------
#	Plugin Setup
#-------------------------------------------------------------------------------

plugin.tx_news {

	rss.channel {
		title = Thomas Wöhlke
		description =
		link = https://woehlke.org/
		language = de-de
		copyright = Thomas Wöhlke
		category = news
		generator = TYPO3 EXT:news
	}

	opengraph {
		site_name = Thomas Wöhlke

		twitter {
			card = summary
			site = https://woehlke.org/
			creator = @port80guru
		}
	}
}

