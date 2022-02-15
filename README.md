# This script generates an RSS feed for new print books (that aren't government documents) added to Primo in the last 30 days

# there are two files newbooks.rss which generates the RSS feed, and l.php which allows special characters in Primo URL to be encoded for inclusion in XML - there's probably a better option for this, but l.php could also be used to count feed usage 

# in action at https://libapps.sdsu.edu/rss/newbooks.rss?query=Political%20Science

# This uses the Ex Libris Primo Search API available at https://developers.exlibrisgroup.com/primo/apis/search/
# Access to the API requires an API Key - https://developers.exlibrisgroup.com/primo/apis/#defining
# This requires the following be added to your .htdocs file to process .rss files with php
# AddHandler application/x-httpd-ea-php73 .php .xml .rss
