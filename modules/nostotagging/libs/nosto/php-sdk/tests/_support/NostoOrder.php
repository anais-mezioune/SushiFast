<?php

class NostoOrder implements NostoOrderInterface
{
	public function getOrderNumber()
	{
		return 1;
	}
	public function getCreatedDate()
	{
		return '2014-12-12';
	}
	public function getPaymentProvider()
	{
		return 'test-gateway [1.0.0]';
	}
	public function getBuyerInfo()
	{
		return new NostoOrderBuyer();
	}
	public function getPurchasedItems()
	{
		return array(new NostoOrderPurchasedItem());
	}
}
