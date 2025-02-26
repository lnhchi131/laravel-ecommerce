<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Intervention Image Driver
     |--------------------------------------------------------------------------
     |
     | Để sử dụng Imagick, hãy đặt driver thành tên đầy đủ của class driver.
     | Ví dụ:
     | "Intervention\\Image\\Imagick\\Driver"
     |
     */
    'Image' => Intervention\Image\Laravel\Facades\Image::class,

    'driver' => 'gd', // Đảm bảo đây là 'gd
];
