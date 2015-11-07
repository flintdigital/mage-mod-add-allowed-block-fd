Magento Add Allowed Blocks
:warning: Fix for SUPEE 6788 Module that adds Allowed Block Types to DB in an installation script. 

###Overview
Among the many issues with the *Magento SUPEE 6788 security patch* there is an issue with static blocks not displaying in CMS pages and template files. 

This was a sort of an emergency fix that is intended to ship with the patch for a number of our sites, so it could probably use some work. Please feel free to contribute or track any issues you may see using the issue tracker. On 1.9.2.X you can manage permissions in System->Permissions->Blocks

This script will add the following permissions:

* `custom/config/path` to table `permission_variables`
* `cms/block` and `custom/block_type` to table `permission_blocks`

####Additional Resource
* This list may help understand which modules you may have that could be impacted: https://docs.google.com/spreadsheets/d/1LHJL6D6xm3vD349DJsDF88FBI_6PZvx_u3FioC_1-rg/htmlview?sle=true#gid=0
* This script will scan for some of the other/known issues caused by the SUPEE 6788 Patch.

###Installation
Using modgit: 

`modgit add mage-mod-add-allowed-block-fd git@github.com:flintdigital/mage-mod-add-allowed-block-fd.git`

In reality you can probably remove this script after you have installed because once it runs the DB will be updated. 

`modgit rm mage-mod-add-allowed-block-fd`


