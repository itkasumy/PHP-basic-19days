<?php
     /*interface usb {
         const votage = '1.5v';
         public function plugin();
     }

     interface typeCUsb extends usb {}

     class Computer implements usb {
         public function plugin() {

         }
     }*/

     interface usb {
         public function plugin($obj);
         public function plugout($obj);
     }
     
     class Computer implements usb {
         function plugin($obj) {
            echo $obj -> transImg();
         }
         function plugout($obj) {}
     }

     class Camera implements usb {
         function plugin($obj) {

         }
         function plugout($obj) {}

         public function transImg() {
             echo 'translating ......';
         }
     }

     $cmpt = new Computer();
     $canno = new Camera();

     $cmpt -> plugin($canno);