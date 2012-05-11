<?php
/**
* Arush Mixpanel block
*
* @codepool   Local
* @category   Arush
* @package    Arush_Mixpanel
* @module     Mixpanel
*/
class Arush_Mixpanel_Block_Track extends Mage_Core_Block_Template
{
    public function getMixpanelOn()
      {
  		  return (boolean)Mage::getStoreConfig('mixpanel/track/mixpanel_on');
      }

    public function getMixpanelCode()
      {        
          return (string)Mage::getStoreConfig('mixpanel/track/mixpanel_code');
      }

    public function getMixpanelName()
      {        
          return (boolean)Mage::getStoreConfig('mixpanel/track/mixpanel_name');
      }

}
