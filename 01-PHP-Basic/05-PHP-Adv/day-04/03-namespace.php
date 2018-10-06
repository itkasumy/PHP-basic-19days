<?php

namespace seven\eleven;
echo __NAMESPACE__, '<br />';
function showInfo() {
	echo __FUNCTION__, '<br />';
}
define("PI", 3.14);

showInfo();

namespace two;
echo __NAMESPACE__, '<br />';
function showInfo() {
	echo __FUNCTION__, '<br />';
}
echo PI;

// showInfo();

// namespace two;
// function fn() {}

// namespace one;
// class Cls{}
// namespace two;
// class Cls{}
