<?php 
namespace Robin\Eshoper\Block;
use Magento\Framework\View\Element\Template;
/**
 * 
 */
class HeaderTop extends \Magento\Framework\View\Element\Template
{
	
	protected function _beforeToHtml()
	{
		$config=$this->_scopeConfig;
		$phone=$config->getValue('general/store_information/phone');
		$email=$config->getValue('trans_email/ident_general/email');
		$facebook=$config->getValue('social/social_config/facebook');
		$this->setData('store_phone',$phone);
		$this->setData('store_email',$email);
		$this->setData('store_facebook',$facebook);

	}
}



 ?>