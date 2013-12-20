<?php
namespace Dashboard\Model\Dao;

use Zend\Json\Json;

/**
 * Class GearmanDao
 *
 * @package Dashboard\Model\Dao
 */
class GearmanDao extends AbstractDao {
    /**
     * Fetch jobs with workers attached
     *
     * @param array $params Params
     * @return array
     */
    public function fetchJobsWithWorkersForQueueWidget(array $params = array()) {
        return $this->request($this->getEndpointUrl(__FUNCTION__), $params);
    }
}