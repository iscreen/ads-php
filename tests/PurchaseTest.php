<?php
namespace Ads;
class PurchaseTest extends TestCase
{
  public function testCreate()
  {
    self::authorizeFromEnv();

    // $p = Purchase::create(array(
    //   'transaction_id' => 12,
    //   'product_ids'    => array('151480', '152070')
    // ));
  }

  public function testRefund()
  {
    self::authorizeFromEnv();

    $p = Purchase::create(array(
      'transaction_id' => 12,
      'product_ids'    => array('151480', '152070')
    ));


    // Purchase::refund(array(
    //   'transaction_id' => $p->id();
    // ));
  }

}