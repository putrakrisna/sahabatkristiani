<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

$verifyToken = md5('unique_salt' . $_POST['timestamp']);


 if (!empty($_FILES) && $_POST['token'] == $verifyToken) {

        class Image {
            
            var $uploaddir;
            var $quality = 80;
            var $ext;
            var $dst_r;
            var $img_r;
            var $img_w;
            var $img_h;
            var $output;
            var $data;
            var $datathumb;
            
            function setFile($src = null) {
                $this->ext = strtoupper(pathinfo($src, PATHINFO_EXTENSION));
                if(is_file($src) && ($this->ext == "JPG" OR $this->ext == "JPEG")) {
                    $this->img_r = ImageCreateFromJPEG($src);
                } elseif(is_file($src) && $this->ext == "PNG") {
                    $this->img_r = ImageCreateFromPNG($src);      
                } elseif(is_file($src) && $this->ext == "GIF") {
                    $this->img_r = ImageCreateFromGIF($src);
                }
                $this->img_w = imagesx($this->img_r);
                $this->img_h = imagesy($this->img_r);
            }
            
            function resize($w = null) {
                if(empty($w)) $w = $this->img_w;
                $h =  $this->img_h / ($this->img_w / $w);
                $this->dst_r = ImageCreateTrueColor($w, $h);
                imagecopyresampled($this->dst_r, $this->img_r, 0, 0, 0, 0, $w, $h, $this->img_w, $this->img_h);
                $this->img_r = $this->dst_r;
                $this->img_h = $h;
                $this->img_w = $w;
            }
            
            function createFile($output_filename = null) {
                if($this->ext == "JPG" OR $this->ext == "JPEG") {
                    imageJPEG($this->dst_r, $this->uploaddir.$output_filename.'.'.$this->ext, $this->quality);
                } elseif($this->ext == "PNG") {
                    imagePNG($this->dst_r, $this->uploaddir.$output_filename.'.'.$this->ext);
                } elseif($this->ext == "GIF") {
                    imageGIF($this->dst_r, $this->uploaddir.$output_filename.'.'.$this->ext);
                }
                $this->output = $this->uploaddir.$output_filename.'.'.$this->ext;
            }
            
            function setUploadDir($dirname) {
                $this->uploaddir = $dirname;
            }
            
            function flush() {
        $tempFile = $_FILES['Filedata']['tmp_name'];
        $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
        $targetFile =  str_replace('//','/',$targetPath) . $_FILES['Filedata']['name'];
                
                imagedestroy($this->dst_r);
                unlink($targetFile);
                //imagedestroy($this->img_r);
                
            }
            
        }
        
        $tempFile = $_FILES['Filedata']['tmp_name'];
        $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
        $targetFile =  str_replace('//','/',$targetPath) . $_FILES['Filedata']['name'];
        
        move_uploaded_file ($tempFile, $targetFile);
        
        $image = new Image();
        $image->setFile($targetFile);
        $image->setUploadDir($targetPath);
        $image->resize();
        $image->createFile($_POST['user_id']."_ori");
        $image->resize(300);
        $image->createFile($_POST['user_id']."_medium");
        $image->resize(75);
        $image->createFile($_POST['user_id']."_small");
        $image->flush();
    }
?>