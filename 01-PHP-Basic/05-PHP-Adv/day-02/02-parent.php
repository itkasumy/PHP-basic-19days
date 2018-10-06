<?php
    class Father {
        public function pub() { echo __METHOD__, '<hr />'; }
        private function pri() { echo __METHOD__, '<hr />'; }
        protected function pro() { echo __METHOD__, '<hr />'; }
    }

    class Son extends Father {
        public function pub() { echo __METHOD__, '<hr />'; }
        private function pri() { echo __METHOD__, '<hr />'; }
        protected function pro() { echo __METHOD__, '<hr />'; }

        public function showInfo() {
            $this -> pub();
            $this -> pri();
            $this -> pro();

            parent::pub();
            parent::pro();
            parent::pri();
        }
    }

    $s = new Son();
    $s -> showInfo();