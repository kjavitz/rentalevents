<?php
/* 
 * @category  Event Manager Module
 * @package   ITwebexperts_Events

 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      N/A 
 */
class ITwebexperts_Events_Model_Resource_Ordertodates_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Define collection model
     */
    protected function _construct()
    {
        $this->_init('itwebexperts_events/ordertodates');
    }

    public function addSelectFilter($select)
    {
        $this->getSelect()->where($select);
        return $this;
    }

}
