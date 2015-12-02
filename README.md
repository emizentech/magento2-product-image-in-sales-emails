# Magento2 :: Product Thumbnail in Sales Emails 

This module will enable product image thumbnail on sales email. 

<h2>Installation Email Images Module</h2>

<h4>1 Upload new module to Magento2 root folder</h4>

run following commands:
<h4>2 Install New Module</h4>
<code>bin/magento module:enable EmizenTech_NewModule</code>

<h4>3 Run Setup</h4>
<code> bin/magento setup:upgrade</code>


<h4>4 DI configuration & cache must be cleared</h4>
<code>	rm -rf var/cache/ var/di/ var/generation/ var/page_cache/</code>
	
<h4>5 Compile ( if you have compilation enabled )</h4>
<code>	bin/magento setup:di:compile </code>
	
<h4>6 Login into admin </h4>
to Enable Module : go to 
Stores -> Configuration -> 
Sales :: Sales Emails :: Sales Email Image Setting
<br />
<b>Enable :: Yes</b>
<br />
<b>Image Resize	:: 135 {Set your preffered size here}</b>
