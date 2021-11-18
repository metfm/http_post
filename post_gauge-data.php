<?php
# post_gauge-data.php
#
# Accept a JSON string via HTTP POST and then save the string to file
#
# Copyright (C) 2017 Gary Roderick                  gjroderick<at>gmail.com
#
# This program is free software: you can redistribute it and/or modify it under
# the terms of the GNU General Public License as published by the Free
# Software Foundation, either version 3 of the License, or (at your option) any
# later version.
#
# This program is distributed in the hope that it will be useful, but WITHOUT
# ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
# FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
# details.
#
# You should have received a copy of the GNU General Public License along with
# this program.  If not, see http://www.gnu.org/licenses/.
#
# Version: 0.1.0                                        Date: 23 March 2017
#
# Revision History
#   23 March 2017        v0.1.0
#       - initial release
#
// define our destination file, path is relative to our location
$json_file = "./gauge-data.txt";
// we are only interested in HTTP POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {  
    // get the data
    $data = file_get_contents("php://input");
    // write the data to file
    file_put_contents($json_file, $data);
    // send something back
    echo "success";
}
?>
