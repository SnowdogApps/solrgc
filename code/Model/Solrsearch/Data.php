<?php
class Snowdog_Solrgc_Model_Solrsearch_Data extends SolrBridge_Solrsearch_Model_Data {

  /**
   *  set customer_group_ids in index doc_data
   */
  public function prepareFinalProductData($_product, &$docData) {
    parent::prepareFinalProductData($_product, $docData);
    // add customer_group_ids field data
    $docData['customer_group_ids'] = explode(',', $_product->getData('groupscatalog2_groups'));
  }

} // end class
