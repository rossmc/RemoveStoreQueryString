# RemoveStoreQueryString
#### Overview
The RemoveStoreQueryString is a module for Magento changes the behaviour of the frontend store switcher in Magento by removing the `___store` query string from the URL while still setting setting the correct `store` cookie.

For example http://www.example.com/?___store=french&___from_store=german would simply become http://www.example.com/.

![Magento Language Switcher](http://rossmchugh.com/wp-content/uploads/2015/10/magento-language-swicther.jpg)

#### Installation
* Download latest version. [here](https://github.com/jreinke/magento-hide-default-store-code/archive/master.zip)
* Unzip in Magento root folder.
* Clear cache.
* Logout from admin then login again to access module configuration.

### Configuration

* Go to "System > Configuration > Web > Url Options".
* Enable "Remove Store Query String".
* Clear cache.

![Remove Store Query String Config](http://rossmchugh.com/wp-content/uploads/2015/10/remove-store-query-string-config.jpg)