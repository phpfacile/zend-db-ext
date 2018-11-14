<?php
namespace PHPFacile\Zend\Db\Helper

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Sql\Expression;

class ZendDbHelper
{
    /**
     * Returns the Zend\Db\Sql\Expression to get the current date/time in UTC
     *
     * @param Zend\Db\Adapter\AdapterInterface $adapter Db adapter
     *
     * @return Zend\Db\Sql\Expression
     */
    public static function getUTCTimestampExpression(AdapterInterface $adapter)
    {
        switch ($adapter->driver->getDatabasePlatformName()) {
            case 'Sqlite':
                $nowUTC = new Expression('datetime(\'now\')');
                break;
            case 'Mysql':
                $nowUTC = new Expression('UTC_TIMESTAMP()');
                break;
            default:
                throw new \Exception('Unsupported vendor ['.$adapter->driver->getDatabasePlatformName().']');
        }
        return $nowUTC;
    }
}
