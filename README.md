Arush's Bambaclot Mixpanel module!
=========================

As with all my stuff, it can probably be better, so send me a pull request.

> I'm on twitter: @ldn\_tech\_exec
  
Features:

- Drops code into Magento in the right places. Great.
- Arranges your custom js scripts into one file for maintainability
- Loads custom scripts at the bottom of the page so it doesn't block your page load… this may turn out bad though, cos clicks might be unrecognised before custom scripts are loaded. Time shall tell.
- Doesn't load anything when module is turned off, no need to block module output from System > Config > Advanced (Yuck!)

- Here's the moneymaker: Your scripts are actually in a phtml file so you have access to any Magento data to drop into the js. This is awesome for custom tags, e.g. 
 
`mixpanel.identify(<?php echo Mage::getSingleton('customer/session')->getCustomer()-getId(); ?>);`





Background
=========

Mixpanel have released a new js library with the ability to record some pretty awesome stuff about each visitor, e.g. Magento ID, name, email address to identify each customer, a callback option to send the recorded data to your CRM, for example when someone configures options on a high priced item, you want to know about that when you speak to them on the phone. There are some pretty intense things you can do.


Your Turn
================

Like I said this stuff is really extensible, so I'd love to see what you come up with, so go ahead and contribute.

 