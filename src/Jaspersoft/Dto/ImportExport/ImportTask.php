<?php
namespace Jaspersoft\Dto\ImportExport;

/**
 * Class ImportTask
 * Define an import task to be executed
 *
 * @package Jaspersoft\Dto\ImportExport
 */
class ImportTask
{
    /**
     * @var boolean
     */
    public $update;
    /**
     * @var boolean
     */
    public $skipUserUpdate;
    /**
     * @var boolean
     */
    public $includeAccessEvents;
    /**
     * @var boolean
     */
    public $includeAuditEvents;
    /**
     * @var boolean
     */
    public $includeMonitoringEvents;
    /**
     * @var boolean
     */
    public $includeServerSettings;
    /**
     * @var string
     */
    public $brokenDependencies;

    public function queryData()
    {
        $data = array();
        foreach (get_object_vars($this) as $k => $v) {
            if (!empty($v) && gettype($v) == "boolean" && $v == true) {
                $data[$k] = 'true';
            } elseif (!empty($v)) {
                $data[$k] = $v;
            }
        }
        return $data;
    }

}