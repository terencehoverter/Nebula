# Recommended Filters
These are filters that are recommended for excluding internal traffic and spambots from Google Analytics reports.

## Exclude My IP
Exclude the IP addresses of admins and developers.
Filter Type: Predefined
Exclude, traffic from the IP addresses
[Find your IP address here](https://www.google.com/#q=my+ip)

## Valid Hostnames
Only allow traffic to valid hostnames. [Generate a valid hostname filter pattern here](https://gearside.com/nebula/utilities/domain-regex-generator/?utm_campaign=documentation&utm_medium=readme&utm_source=ga+filters#customhostnames)
Filter Type: Custom
Include, Hostname
Ex: `\.*gearside.com|\.*gearsidecreative.com|\.*googleusercontent\.com`

## Spambot Language
Exclude spambots that modify their language attributes.
Filter Type: Custom
Exclude, Language Settings
`.{15,}|\s[^\s]*\s|\.|,|\!|\/`

# Other Filters
These are filters that may be useful in certain cases, but aren't applicable to all websites.

## Insignificant Browser Sizes
Exclude traffic whose browser size is less than 100px in either dimension.
Filter Type: Custom
Exclude, Browser Size
`^(\d{1,2})x(\d{1,2})$`

## Lowercase URIs
Converting URIs to lowercase prevents a page's data from being split if a user enters a URL with capital letters.
*Note: This is now handled by Google Autotrack in Nebula.*
Filter Type: Custom
Lowercase, Filter Field: Request URI
