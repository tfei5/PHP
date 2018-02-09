<?php
/* */
$g_connect_new = false ;
$g_db_host    ="localhost";$g_db_name    ="kingflower";$g_db_user_name  ="root";$g_db_user_pwd   ="admin20140401";
//分页个数$gPageNumber   = 50 ;
$g_upload="uploadfile";
//游戏服务器地址$g_game_server_host   ="127.0.0.1";$g_game_server_port   =9001;
/*php socket connect Permission denied :13Hi there!
For the TCP connections: socket_create(AF_INET, SOCK_STREAM, SOL_TCP);In case you're having problems in socket_connect() with socket_strerror() = "Permission denied", you may be having a SELinux config issue.
Check if SELinux is enabled:# /usr/sbin/sestatus -vIn case it is, you can just type the command:# setsebool httpd_can_network_connect=1
*/
