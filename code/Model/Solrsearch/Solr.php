<?php
class Snowdog_Solrgc_Model_Solrsearch_Solr extends SolrBridge_Solrsearch_Model_Solr {

  /**
   *  add customer_group_ids field to filter
   */
  public function getStandardFilterQuery() {
    $filterQuery        = parent::getStandardFilterQuery();
    $session            = Mage::getSingleton('customer/session');
    $customerGroupId    = $session->getCustomerGroupId();

    if ($customerGroupId) {
      $filterQuery['customer_group_ids'] = array($customerGroupId);
    }

    return $filterQuery;
  }

} // end class
