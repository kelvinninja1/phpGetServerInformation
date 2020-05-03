<?php
include ('classes/serverInfo.php');


echo '<br /> Get system load as percentage: => ';
echo serverInfo::shapeSpace_system_load();
echo '<br /> Get the number of system cores: => ';
echo serverInfo::shapeSpace_system_cores();
echo '<br /> Get the number of HTTP connections: => ';
echo serverInfo::shapeSpace_http_connections();
echo '<br /> Get server memory usage: => ';
echo serverInfo::shapeSpace_server_memory_usage();
echo '<br /> Get server memory Free: => ';
echo serverInfo::shapeSpace_server_memory_free();
echo '<br /> Get current disk usage: => ';
echo serverInfo::shapeSpace_disk_usage();
echo '<br /> Get server uptime: => ';
echo serverInfo::shapeSpace_server_uptime();
echo '<br /> Get the kernel version: => ';
echo serverInfo::shapeSpace_kernel_version();
echo '<br /> Get the number of processes: => ';
echo serverInfo::shapeSpace_number_processes();
echo '<br /> Get current memory usage: => ';
echo serverInfo::shapeSpace_memory_usage();
 ?>
