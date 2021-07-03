<?php

/**
 * Get the list of PNG and JPG files in the given directory
 *
 * @param string $imgDir    Search this dir for images
 * @return array            Array of filenames (could be an empty array)
 */
function get_images(string $imgDir): array
{
    $result = [];
    foreach (new DirectoryIterator($imgDir) as $fileInfo) {
        if ($fileInfo->isDot()) {
            continue;
        }
        $fileName = $fileInfo->getFilename();
        if ($fileInfo->isFile() && (strpos($fileName, 'png') !== false || strpos($fileName, 'jpg') !== false)) {
            $result[] = $imgDir . '/' . $fileName;
        }
    }
    if (!empty($result)) {
        sort($result);
    }
    return $result;
}

function print_carousel(array $imageFiles, int $timeout = 3000): bool
{
    $carBegin = "<div id='carouselControls' class='carousel slide w-100' data-ride='carousel' data-interval='${timeout}'>
    <div class='carousel-inner'>";
    $carEnd = '
        </div>
    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>';

    if (!empty($imageFiles)) {
        echo $carBegin;
        $isActive = 'active';
        foreach ($imageFiles as $imageFile) {
            echo "<div class='carousel-item {$isActive}'><img class='d-block img-responsive w-100' src='{$imageFile}'></div>";
            $isActive = '';
        }
        echo $carEnd, "\n";
        return true;
    }
    return false;
}

/**
 * Generate a BS4 Carousel
 * 
 * Generates a BS4 compatible carousel for PNG and JPG files from the given directory
 *
 * @param string $imgDir    Image collection directory
 * @return void
 */
function gen_carousel(string $imgDir, int $timeout = 3000, bool $showAlert = false)
{
    $imgs = get_images($imgDir);
    $printResult = print_carousel($imgs, $timeout);
    if ($printResult === false && $showAlert) {
        echo <<< ENDCONTENT
            <div class="alert alert-info w-100" role="alert">
       No images to display
    </div>
ENDCONTENT;
    }
}
