# downloadimages

# Example install
composer require mixaroot/downloadimages dev-master
# Example Usage 
```
require_once "vendor/autoload.php";
$imageTest = 'https://www.w3schools.com/css/paris.jpg';
$class = new Mixaroot\Downloadimages\DownloadImages();
$class->setRemoteUrl($imageTest)
    ->setLocalPath($_SERVER['DOCUMENT_ROOT'] . '\\' . 'images\\')
    ->setLocalName('test.jpg');
$copySize = $class->download();
```
