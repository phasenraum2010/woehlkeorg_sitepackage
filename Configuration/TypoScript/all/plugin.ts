#-------------------------------------------------------------------------------
#	Plugin Setup
#-------------------------------------------------------------------------------

plugin.tx_news {
	settings {
		list {
			# media configuration
			media {
				image {
					maxWidth = 100
					maxHeight = 100
				}
				dummyImage = typo3conf/ext/woehlkeorg_sitepackage/Resources/Public/img/port80guru-mask-td-thief-small-square.png
			}
		}
	}

	# Opengraph implementation
	opengraph {
		site_name = {$plugin.tx_news.opengraph.site_name}
		type = article
		admins = Thomas Wöhlke
		email = thomas.woehlke@gmail.com
		phone_number =
		fax_number =
		latitude = 52.5279109
		longitude = 13.3306969
		street-address = Emdener Str. 56
		locality = Berlin
		region = DE-BE
		postal-code = 10551
		country-name = Deutschland

		twitter {
			card = {$plugin.tx_news.opengraph.twitter.card}
			site = {$plugin.tx_news.opengraph.twitter.site}
			creator = {$plugin.tx_news.opengraph.twitter.creator}
		}
	}
}
