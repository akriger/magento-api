<?php

/**
 * Class Lading_Api_MenuController
 */
class Lading_Api_MenuController extends Mage_Core_Controller_Front_Action {
    public function __construct(
      \Zend_Controller_Request_Abstract $request,
      \Zend_Controller_Response_Abstract $response,
      array $invokeArgs = array()
    ) {
        parent::__construct($request, $response, $invokeArgs);
        Mage::helper('mobileapi')->auth();
    }

    /**
     * TODO:add method comment
     */
	public function suggestAction() {
		// echo 'HelloWorld!';
		// $categoryid = $this->getRequest ()->getParam ( 'categoryid' );
		// $page = ($this->getRequest ()->getParam ( 'page' )) ? ($this->getRequest ()->getParam ( 'page' )) : 1;
		// $limit = ($this->getRequest ()->getParam ( 'limit' )) ? ($this->getRequest ()->getParam ( 'limit' )) : 5;
		// echo 'enter your key';
		// if (! $this->getRequest ()->getParam ( 'q', false )) {
		// $this->getResponse ()->setRedirect ( Mage::getSingleton ( 'core/url' )->getBaseUrl () );
		// }
		// var_dump ( $this->getResponse ()->setBody ( $this->getLayout ()->createBlock ( 'catalogsearch/autocomplete' )->toHtml () ) );
	}

    /**
     * TODO: add method comment
     */
	public function getProductInfoAction() {
		// $productid=$this->getRequest ()->getParam ( 'productid' );
		$productid = '385'; // test sentence
		$product = Mage::getModel ( 'catalog/product' )->load ( $productid );
		//$product = Mage::getModel ( 'catalog/product' )->getCollection ()->getFirstItem ();//test sentence
		foreach ( $product->getAttributes () as $att ) {
			$group_id = $att->getData ( 'attribute_group_id' );
			$group = Mage::getModel ( 'eav/entity_attribute_group' )->load ( $group_id );
			var_dump ( $group );
		}
		$attrSetName = 'my_custom_attribute';
		$attributeSetId = Mage::getModel ( 'eav/entity_attribute_set' )->load ( $attrSetName, 'attribute_set_name' )->getAttributeSetId ();
		// get a drop down lists options for a mulit-select attribute
		$attribute = Mage::getModel ( 'eav/config' )->getAttribute ( 'catalog_product', 'attribute_id' );
		foreach ( $attribute->getSource ()->getAllOptions ( true, true ) as $option ) {
			$attributeArray [$option ['value']] = $option ['label'];
		}
		var_dump ( $$attributeArray );
		// 获取产品属性集
		$sets = Mage::getResourceModel ( 'eav/entity_attribute_set_collection' )->setEntityTypeFilter ( Mage::getModel ( 'catalog/product' )->getResource ()->getTypeId () )->load ()->toOptionHash ();
	}

    /**
     * 获取商品自定义属性
     */
	public function getCustomerOptionAction(){
		$productid=$this->getRequest ()->getParam ( 'product_id' );
		$product = Mage::getModel("catalog/product")->load($productid);
		$i = 1;
		echo "<pre>";
		foreach ($product->getOptions() as $o) {
			echo "<strong>Custom Option:" . $i . "</strong><br/>";
			echo "Custom Option TYPE: " . $o->getType() . "<br/>";
			echo "Custom Option TITLE: " . $o->getTitle() . "<br/>";
			echo "Custom Option Values: <br/>";
			// Getting Values if it has option values, case of select,dropdown,radio,multiselect
			$values = $o->getValues();
			foreach ($values as $v) {
				print_r($v->getData());
			}
			$i++;
			echo "----------------------------------<br/>";
		}
	}
} 