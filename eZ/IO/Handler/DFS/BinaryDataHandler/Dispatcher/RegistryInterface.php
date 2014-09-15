<?php
/**
 * This file is part of the DFSIOHandlerBundle
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributd with this source code.
 */
namespace EzSystems\DFSIOBundle\eZ\IO\Handler\DFS\BinaryDataHandler\Dispatcher;

use EzSystems\DFSIOBundle\eZ\IO\Handler\DFS\BinaryDataHandler;

interface RegistryInterface
{
    /**
     * Returns the BinaryDataHandler for $path
     * @param $path
     * @return BinaryDataHandler
     */
    public function getHandler( $path );

    /**
     * Returns all the registered BinaryDataHandlers
     * @return BinaryDataHandler[]
     */
    public function getAllHandlers();
}