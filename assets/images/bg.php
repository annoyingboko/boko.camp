<?php
$path = "/var/www/boko_camp";
$path_photos = "/var/www/boko_camp/assets/images/photos";
$images = array();
function getFilesIn($directory)
{
       foreach (new DirectoryIterator($directory) as $file) {
              if ($file->isDot())
              {
                     continue;
              }
              else{
                     if (is_dir($directory . "/" .  $file->getFilename()))
                     {
                            getFilesIn($directory . "/" . $file->getFilename());
                     }
                     else{
                            global $images, $path;
                            $images[] = str_ireplace($path, "", ($directory . "/" .  $file->getFilename()));
                     }
              }
       }
}
getFilesIn($path_photos);
echo $images[array_rand($images)];
?>
