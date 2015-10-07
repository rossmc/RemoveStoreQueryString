# RemoveStoreQueryString
#### Overview
RemoveStoreQueryString is a module for Magento which changes the behaviour of the frontend store switcher by removing the `___store` query string from the URL while still setting the correct `store` cookie.

For example http://www.example.com/?___store=french&___from_store=german would simply become http://www.example.com/.

![Magento Language Switcher](http://rossmchugh.com/wp-content/uploads/2015/10/magento-language-swicther.jpg).

See [this blog post](http://rossmchugh.com/remove-store-query-string-magento-module) for a more detailed explanation of how the code works.

#### Installation
* Download latest version [here](https://github.com/rossmc/RemoveStoreQueryString/archive/master.zip)
* Unzip to Magento root folder.
* Clear cache.
* Logout from admin then login again to access module configuration.

### Configuration

* Go to "System > Configuration > Web > Url Options".
* Enable "Remove Store Query String".
* Clear cache.

![Remove Store Query String Config](http://rossmchugh.com/wp-content/uploads/2015/10/remove-store-query-string-config.jpg)