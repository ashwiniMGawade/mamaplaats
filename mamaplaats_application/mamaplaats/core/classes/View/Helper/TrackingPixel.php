<?php

trait View_Helper_TrackingPixel {

	public function get_tracking_pixel($source = null)
	{
		$campagnes = array();
		switch ($source) {
			case 'testmoeders':
				$campagnes = array(2889);
				break;
			case 'win':
				$campagnes = array(7308, 8064);
				break;
			default:
				return false;
				break;
		}

		$tracking_pixels = array();
		$tracking_pixels['has_url'] = TRUE;
		if( ! empty($campagnes))
		{
			foreach($campagnes as $campagne)
			{
				$tracking_pixels['urls'][]['src'] = $this->generate_tracking_pixel($source, $campagne);
			}
		}

		return $tracking_pixels;
	}

	public function generate_tracking_pixel($source = null, $campagne = null)
	{
		//--------------------------------------------------------------------------
		// CHANGE THE VALUES BELOW
		//--------------------------------------------------------------------------
		// * Leave as "0.00" if not applicable.
		$orderValue = '0.00';
		// * Sale or lead campagne
		// true = sale campagne
		// false = lead campagne
		$isSale = true;
		// * Here you must specify a unique identifier for the transaction.
		// For a sale, this is typically the order number.
		// If you don't have an system ordernummer please use this
		// function below: uniqid('A4Y');
		// Example: $orderNumber = uniqid('A4Y');
		$orderNumber = "";
		// Provide the customer name or ID (or something else) for order validating
		$customerInfo = "";
		// * OPTIONAL: Provide a description for the order or combine all products
		// to one list
		$orderDescription = "";
		// when you are using product segments that have different commissions
		// Add the segment ID/code
		$orderSegment = "";
		// If you do not use the built-in session functionality in PHP, modify
		// the following expressions to work with your session handling routines.
		$_a4ytrid = "";
		if (!empty($_SESSION["A4Ytrid"])) {
			$_a4ytrid = $_SESSION["A4Ytrid"];
		}
		//--------------------------------------------------------------------------
		// PLEASE DO NOT CHANGE THE CODE BELOW
		//--------------------------------------------------------------------------

		$_a4yorderNumber = urlencode($orderNumber);
		$_a4yorderValue = urlencode($orderValue);
		$_a4ycustomerInfo = urlencode($customerInfo);
		$_a4yorderDescription = urlencode($orderDescription);
		$_a4yorderSegment = urlencode($orderSegment);
		if (empty($_a4ytrid) && !empty($_COOKIE["A4Ytrid"][$campagne])) {
			$_a4ytrid = $_COOKIE["A4Ytrid"][$campagne];
		}
		if (empty($isSale)) {
			$_a4yorderValue = "1.00";
		}
		$_a4yprotocol = ((strtolower(substr($_SERVER['SERVER_PROTOCOL'],0,5))=='https' || (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
		$trackingUrl = $_a4yprotocol . "leads.affiliate4you.nl"
			. "?campagne=" . $campagne
			. "&ordernummer=" . $_a4yorderNumber
			. "&orderbedrag=" . $_a4yorderValue
			. "&a4ytrid=" . $_a4ytrid
			. "&klantnaam=" . $_a4ycustomerInfo
			. "&omschr=" . $_a4yorderDescription
			. "&segment=" . $_a4yorderSegment;

		return $trackingUrl;
	}
}