<?php
class Verify{
	//实现验证码的方法
	public static function code($width=200,$height=80){
		//新建一张真彩色图像
        $im = imagecreatetruecolor($width,$height);
        //给图片添加背景颜色
        //创建一种颜色
        $bgcolor = imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        //填充背景颜色
        imagefill($im,0,0,$bgcolor);
        //简单的模糊处理,加入线条
        for($i=0;$i<10;$i++){
            $linecolor = imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
            imageline($im,mt_rand(0,200),mt_rand(0,80),mt_rand(0,200),mt_rand(0,80));
        }
        $baseStr = "0123456789abcdefghijklmnopgrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $shuffle = str_shuffle($baseStr);
        $yzm = substr($shuffle,0,4);
        $_SESSION['yzm'] = $yzm;
        for($i=0;$i<4;$i++){
            $ttfcolor = imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
            imagettftext($im,50,mt_rand(-20,20),50*$i,65,$ttfcolor,CORE_PATH.'hua2.ttf',substr($yzm,$i,1));
        }


        //清空输出缓冲区
        ob_clean();
        //设定图片类型
        header('content-type:image/png');
        //输出图像
        imagepng($im);
        //销毁图像
        imagedestroy($im);
	}
}
?>