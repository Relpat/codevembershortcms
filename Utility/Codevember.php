<?php
/**
 * Created by PhpStorm.
 * User: Patrick Hippler
 * Date: 05.10.2017
 * Time: 19:38
 */

namespace CODEVEMBER\Utility;

require_once("DirObject.php");


use \CODEVEMBER\Utility\DirObject as DirObject;

class Codevember
{
    /**
     * @param $folderArray
     * @param $path
     * @return array
     */
    private function getNamesOfDir($folderArray, $path)
    {
        $foldersName = array();
        foreach ($folderArray as $dir) {

            $dirname = str_replace(
                $path . "/",
                "",
                $dir
            );
            array_push($foldersName, $dirname);
        }

        return $foldersName;
    }


    /**
     * creates a single HTML-li-element
     *
     * @param \CODEVEMBER\Utility\DirObject $object
     * @param string $className
     * @return string
     */
    public function createListelement(\CODEVEMBER\Utility\DirObject $object)
    {
        $liArray = '';
        $liArray .=
            '<div class="card mt-5 mb-5">
                <h3 class="card-title mt-4">'.$object->getName().'</h3>
                
                <div class="iframe embed-responsive embed-responsive-21by9 mx-auto col-10 col-md-6 ">
                  <iframe class="embed-responsive-item" src="'.$object->getFoldername().'"></iframe>
                </div>
                <hr>
                <div class="card-body py-3">
                                ' . $object->getDescription() . '
                                
                <hr>
                                <a href="/' . $object->getFoldername() . '" target="_blank" class="btn btn-primary">Go to Page</a>
                </div>
            </div>';

        return $liArray;
    }


    /**
     *  creates a full list of HTML-li-elements
     *
     * @param $array
     * @param $className
     * @return string
     */
    public function createListelementsFromArray($array, $className)
    {

        $arrayString = "";
        foreach ($array as $object) {
            $arrayString .= $this->createListelement($object, $className);
        }

        return $arrayString;
    }


    /**
     * returns a full object-Array of all folders in given directory
     *
     * @param $path
     * @return array
     */
    public function createDirObjectArray($path)
    {

        $foldersArray = array_filter(glob($path . '/*'), function ($dir) {
            return is_dir($dir);
        });
        $foldersArray = $this->getNamesOfDir($foldersArray, $path);


        // create the dir-array
        $dirArray = array();
        foreach ($foldersArray as $dir) {

            $dirname = str_replace(
                $path . "/",
                "",
                $dir
            );

            $dirObject = new DirObject($dirname, $path);
            array_push($dirArray, $dirObject);
        }

        return $dirArray;
    }

}