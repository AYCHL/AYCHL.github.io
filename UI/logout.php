<?php

/*
*  Copyright (c) 2019-2020 AYCH inc <tokeneconomy@eclipso.eu>.
*  File LICENSE or "https://www.gnu.org/licenses/".
*
*  AYCHL is a proxy interception for lan and Wi-Fi. It is a free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the AYCH inc, either version 3 of the License, or
*  (at your option) any later version.
*
*  AYCHL is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/

session_start();

session_unset();
session_destroy();


echo ("<script>location.href='index.php'</script>");

?>
