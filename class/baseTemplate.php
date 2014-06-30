<?php
/**
 * Created at BlueGlue by theo on [ 30/06/2014 : 2:41 PM ].
 */

namespace DB_to_Fixtures\template;


abstract class baseTemplate implements templateInterface
{
    protected $outDirectory;

    public function setOutputDirectory($dir)
    {
        $this->outDirectory = $dir;
    }

    public function getOutDirectory()
    {
        if (is_null($this->outDirectory) || empty($this->outDirectory)) {
            $this->outDirectory = __DIR__ . '/../outfiles/'; // default
        }

        return $this->outDirectory;
    }
} 