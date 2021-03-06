<?php

class NostoProduct implements NostoProductInterface
{
	public function getUrl()
	{
		return 'http://my.shop.com/products/test_product.html';
	}
	public function getProductId()
	{
		return 1;
	}
	public function getName()
	{
		return 'Test Product';
	}
	public function getImageUrl()
	{
		return 'http://my.shop.com/images/test_product.jpg';
	}
	public function getPrice()
	{
		return 99.99;
	}
	public function getListPrice()
	{
		return 110.99;
	}
	public function getCurrencyCode()
	{
		return 'USD';
	}
	public function getAvailability()
	{
		return 'InStock';
	}
	public function getTags()
	{
		return array('tag1', 'tag2');
	}
	public function getCategories()
	{
		return array('/a/b', '/a/b/c');
	}
    public function getShortDescription()
    {
        return 'Lorem ipsum dolor sit amet';
    }
	public function getDescription()
	{
		return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris imperdiet ligula eu facilisis dignissim.';
	}
	public function getBrand()
	{
		return 'Super Brand';
	}
	public function getDatePublished()
	{
		return '2013-01-05';
	}
}
