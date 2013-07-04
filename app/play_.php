<?php
phpinfo();
# URL's from the web
$board_url = "http://eclecticdjs.com/mike/tutorials/php/imagemagick/examples_09/board.png";
$printer_url = "http://eclecticdjs.com/mike/tutorials/php/imagemagick/examples_09/printer.png";

# read files
$board_blob = file_get_contents("$board_url");
$printer_blob = file_get_contents("$printer_url");

# create new image objects
$board = new imagick();
$printer = new imagick();

# read blobs
$board->readImageBlob("$board_blob");
$printer->readImageBlob("$printer_blob");

# composite
$board->compositeImage($printer, imagick::COMPOSITE_ATOP, 0, 0);

# write composited image
$board->writeImage ("composite.png" );

# you can also send image to the browser
header("Content-type: image/png");
echo $board;
?>