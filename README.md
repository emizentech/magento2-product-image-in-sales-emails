# Product Thumbnail in Sales Emails

This module will enable product image thumbnail on sales email. 

<h2>Installation Email Images Module</h2>

#1 Upload new module to Magento2 root folder

run following commands:
#2 Install New Module
<code>bin/magento module:enable EmizenTech_NewModule</code>

#3 Run Setup
<code> bin/magento setup:upgrade</code>


#4 DI configuration & cache must be cleared
<code>	rm -rf var/cache/ var/di/ var/generation/ var/page_cache/</code>
	
#5 Compile ( if you have compilation enabled
<code>	bin/magento setup:di:compile </code>
	
#6 Login into admin 
to Enable Module : go to 
Stores -> Configuration -> 
Sales :: Sales Emails :: Sales Email Image Setting
<b>Enable :: Yes</b>
<b>Image Resize	:: 135 {Set your preffered size here}</b>
