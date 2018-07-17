<?php
/**
 * Created by PhpStorm.
 * User: Gim
 * Date: 7/22/2017
 * Time: 8:39 AM
 */

namespace CKSource\CKFinder\Backend\Adapter;

/**
 * The RenameDirectoryInterface interface.
 *
 * An interface implemented by adapters that do not support renaming folders, and emulate this operation.
 */
interface EmulateRenameDirectoryInterface
{
    /**
     * Changes the directory name.
     *
     * @param string $path
     * @param string $newPath
     *
     * @return bool
     */
    public function renameDirectory($path, $newPath);
}
