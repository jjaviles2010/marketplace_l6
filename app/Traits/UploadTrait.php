<?php
namespace App\Traits;

use function PHPUnit\Framework\isNull;

use Illuminate\Http\Request;

trait UploadTrait
{
    private function imageUpload($images, $imageColumn = null)
    {
        $uploadedImages = [];

        if(is_array($images)) {
            foreach($images as $image) {
                $uploadedImages[] = [$imageColumn => $image->store('product', 'public')];
            }
        } else {
            $uploadedImages = $images->store('logo', 'public');
        }

        return $uploadedImages;
    }
}