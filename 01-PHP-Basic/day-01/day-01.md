# <center>PHP Day-01</cener>

## Apache

#### 打开和关闭 Apache 的三种方式：

1. 在任务栏图标点击开启或关闭 apache 服务
2. 计算机 -> 右键 -> 管理 -> 服务和应用程序 -> 服务 -> 右键 -> 启动/关闭
3. win + R -> net stop/start apache2.2

#### 修改 apache 网站主目录

找到 apache 的主配置文件:  `..\wamp\Apache2\conf` 下的 `httpd.conf` 

#### 指定网站所在目录

搜索 `DocumentRoot` 配置自己要配置到的文件夹路径

> 目录上不能有汉字空格，必须重启 apache 服务器

#### apache 配置网站的默认首页

搜索 `DirectoryIndex` 配置语法: DirectoryIndex file name1 name2 name3 ...

#### 权限配置

当修改了网站根目录的位置，必须重新指定该目录的权限
搜索 `<Directory></Directory>`   
添加给 `DocumentRoot` 配置的文件夹路径 

```
	<Directory "path of DocumentRoot">
		# 决定启用哪些服务器的特性(功能)
		# Options 有三个取值
		# All 开启目录的所有权限
		# NONE 禁止访问目录的任何内容
		# Indexes 如果首页不存在，则显示目录列表
		Options All | NONE | Indexes
		# 指定 Deny 和 Allow 的执行顺序
		Order Deny, Allow
		# 禁止哪些人访问：All 禁止所有 | NONE任何人都能访问 | 禁止指定IP地址 | 禁止网段（第四位不写）
		Deny from All
		# 允许哪些人访问：All允许所有 | NONE不允许访问 | 允许指定IP地址 | 允许网段（第四位不写）
		Allow from All
	</Directory>
```
```	
默认配置：
	<Directory />
	    Options FollowSymLinks
	    AllowOverride None
	    Order deny,allow
	    Deny from all
	</Directory>
```

#### apache 配置文件的语法检查命令

`cmd` 模式下输入 `httpd.exe -t`

#### 配置 apache 使之能处理 php 脚本

1. 查看一下 apache 已经加载了哪些插件
	> CMD 模式下：输入 `httpd.exe -M` 命令
 
2. LoadModule
	描述：在 apache 的主配置文件 httpd.conf 中，使用 LoadModule 命令，来加载 PHP5 的模块。
	语法：LoadModule 模块名称 模块插件文件路径
	举例：LoadModule php5_module "G:\softwareforwin10\Program Files (x86)\wamp\PHP5\php5apache2_2.dll"

3. AddType
	描述：什么时候调用 PHP 模块？ .php 文件才调用 php 模块来处理
	说明：将 .php 扩展名，与 PHP 文件的类型绑定在一起
	语法：AddType application/x-httpd-php .hph

4. PHPIniDir
	描述：在 Apache 中要引入 PHP 的配置文件 php.ini 文件的路径目录
	说明：Apache 启动时，自动加载 Apache 的配置文件，还要加载 PHP 的配置文件
	语法：PHPiniDir "G:\softwareforwin10\Program Files (x86)\wamp\PHP5"




## PHP

#### 安装

解压即安装，需配置环境变量

#### 测试

> php.exe -f file name with path

```php
<?php 
	echo "hello php";

	for($i = 1; $i <= 10; $i++) {
		echo "$i ";
	}
 ?>
```

#### PHP5的配置设置(php.ini)
1. 生成配置文件
	当前 PHP5 目录中并没有真正的 php.ini 配置文件，但有两个相似的配置文件。将当前相似的 php.ini 配置文件复制一份，并修改为 php.ini。

2. 系统时间与当前时间相差 8 小时，如何解决?
	去修改 php 的配置文件 php.ini
	搜索 `date.timezone` 修改为 `date.timezone = PRC`




## 虚拟主机

描述：一个 IP 可以对应多个虚拟主机。

```php
#所有的 IP 地址的 80 端口都可以访问不同域名的虚拟主机
NameVirtualHost *:80
#指定 IP 的 80 端口，可以访问不同的虚拟主机,该 IP 一定是自己的网卡的 IP
NameVirtualHost 192.168.3.100:80
#所有的域名只有我自己可以访问
NameVirtualHost 127.0.0.1:80
```

#### 虚拟主机的配置步骤

1. 指定 3 个不同的域名 
> 文件路径：`C:\Windows\System32\drivers\etc\hosts`

2. Apache 的主配置 
> 文件路径：`G:\softwareforwin10\Program Files (x86)\wamp\Apache2\conf\httpd.conf`

3. Apache 的虚拟主机配置
> 文件路径:`G:\softwareforwin10\Program Files (x86)\wamp\Apache2\conf\extra\httpd-vhosts.conf`

```php
NameVirtualHost *:80

#配置 www.kasumy.com 虚拟主机
<VirtualHost *:80>
	#绑定的域名
	#ServerName www.kasumy.com
	#指定默认首页
	DirectoryIndex index.html index.php
	#指定网站根目录
	DocumentRoot "H:\02-PHP\01-PHP-Basic\day-01"
	#目录权限
	<Directory "H:\02-PHP\01-PHP-Basic\day-01">
		Options Indexes
		Order Deny, Allow
		Allow from all
		Deny from all
	</Directory>
</VirtualHost>
```

#### 虚拟主机的详细配置

```php
<VirtualHost *:80>
	#绑定的域名
	#ServerName www.kasumy.com
	#指定默认首页
	DirectoryIndex index.html index.php
	#指定网站根目录
	DocumentRoot "H:\02-PHP\01-PHP-Basic\day-01"
	#目录权限
	<Directory "H:\02-PHP\01-PHP-Basic\day-01">
		Options Indexes
		Order Deny, Allow
		Allow from all
		Deny from all
	</Directory>
</VirtualHost>
```




## MySQL数据库：

#### 简介

	MySQL 是瑞典的 AB 公司的开发的，但是，后来被 Oracle 收购。
	MySQL 是当前比较流行的关系型数据库。
	MySQL 服务器：安装了 MySQL 软件的电脑，就是 MySQL 服务器。

### extension_dir
	phpinfo();

