<?php
/**
 * Created by PhpStorm.
 * User: patri
 * Date: 05.10.2017
 * Time: 20:33
 */

namespace CODEVEMBER\Utility;


class DirObject
{

    protected $foldername;
    protected $name;
    protected $path;
    protected $description;

    function __construct($name, $path)
    {
        $this->setFoldername($name);

        $exploded = explode("--", $this->getFoldername());
        $name = $this->getFoldername();
        if (count($exploded) > 1) {
            $name = str_replace("_", " ", $exploded[1]);
        }

        $this->setName($name);
        $this->setPath($path);
        $this->getDescriptionOfFile();
    }

    private function getDescriptionOfFile()
    {


        if (file_exists($this->getPath() . '/' . $this->getFoldername() . '/description.html') === true) {
            $description = file_get_contents($this->getPath() . '/' . $this->getFoldername() . '/description.html');
            if (strlen($description) == 0) {
                $description = '';
            }

            $this->setDescription($description);
        }
    }

    /**
     * @return mixed
     */
    public function getFoldername()
    {
        return $this->foldername;
    }

    /**
     * @param mixed $foldername
     */
    public function setFoldername($foldername)
    {
        $this->foldername = $foldername;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {

        if (strlen($this->description) > 0) {
            $newDescription = '<p class="card-text">' . $this->description . '</p>';
            return $newDescription;
        } else {
            return $this->description;
        }
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}