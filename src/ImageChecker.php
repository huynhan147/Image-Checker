<?php
/**
 * Created by PhpStorm.
 * User: huyptit
 * Date: 13/06/2018
 * Time: 23:20
 */
namespace  HuyPhi\ImageChecker;




class ImageChecker
{
    public $path;
    public $ver;
    public function __construct($path)
    {
        $this->path = $path;
        $this->getHeader();

    }
    public function getHeader()
    {
        if(!$fp = fopen($this->path,'rb')) return 0;
        if(!$data = fread ($fp, 20)) return 0;
        $header_format = 'A6version';
        $header = unpack ($header_format, $data);
        $this->ver = $header['version'];
    }
    public function DetectImage(){
        if($this->is_GIF()) return 'GIF';
        if($this->is_JPG()) return 'JPG';
        if($this->is_PNG()) return 'PNG';
        if($this->is_BMP()) return 'BMP';
        if($this->is_SWF()) return 'SWF';
        return 'Not Supported';
    }

    public function is_GIF(){
        return !(strpos($this->ver,"GIF")===false);
    }

    public function is_JPG(){
        return !(strpos($this->ver,"\xFF\xD8\xFF")===false);
    }

    public function is_PNG(){
        return !(strpos($this->ver,"\x89\x50\x4e")===false);
    }

    public function is_BMP(){
        return !(strpos($this->ver,"BM")===false);
    }

    public function is_SWF(){
    return !(strpos($this->ver,"FWS")===false);
}

}