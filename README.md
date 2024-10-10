# Locale Redirect Middleware for Shopware6

This Shopware6 plugin redirects visitors based on their browser's locale settings. If a visitor's browser language is not German, they will be redirected to the English version of the shop.

## Installation

1. **Clone the repository into your Shopware plugins directory:**

   ```sh
   git clone https://github.com/jannisbrandt/Multilingual-detection-Redirection-Shopware-6
   

2. Navigate to your Shopware installation directory:

cd /path/to/your/shopware/installation

3. Refresh the plugin list:

bin/console plugin:refresh

4. Install and activate the plugin

   bin/console plugin:install --activate SmartLocaleRedirect
