<?php
namespace HuyPhi\ImageCheckerTest;

use HuyPhi\ImageChecker\ImageChecker;
/**
 * Created by PhpStorm.
 * User: huyptit
 * Date: 13/06/2018
 * Time: 23:21
 */
use PHPUnit\Framework\TestCase;
class ImageCheckerTest extends TestCase
{
    public function testDetectImage(){
        $image = new ImageChecker('http://www.pngall.com/wp-content/uploads/2016/07/Facebook-Download-PNG.png');
        $this->assertSame('PNG',$image->detectImage());
    }
    public function testCheckImage(){
        $image = new ImageChecker('http://www.pngall.com/wp-content/uploads/2016/07/Facebook-Download-PNG.png');
        $this->assertSame(false,$image->is_GIF());
        $this->assertSame(false,$image->is_JPG());
        $this->assertSame(true,$image->is_PNG());
        $this->assertSame(false,$image->is_BMP());
        $this->assertSame(false,$image->is_SWF());

    }

}