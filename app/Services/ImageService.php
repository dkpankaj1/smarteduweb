<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Interfaces\ImageInterface;

class ImageService
{
    protected $manager;
    protected $defaultPath = 'upload';

    public function __construct()
    {
        $this->manager = new ImageManager(new Driver());
    }

    /**
     * Upload an image with optional resize and crop
     *
     * @param UploadedFile $file
     * @param string $path
     * @param array $options
     * @return string
     */
    public function upload(UploadedFile $file, string $path = '', array $options = []): string
    {
        // Generate unique filename
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        
        // Set upload path
        $uploadPath = $path ?: $this->defaultPath;
        $fullPath = $uploadPath . '/' . $filename;

        // Create directory if it doesn't exist
        if (!file_exists(public_path($uploadPath))) {
            mkdir(public_path($uploadPath), 0755, true);
        }

        // Handle SVG files differently
        if ($file->getClientOriginalExtension() === 'svg') {
            $file->move(public_path($uploadPath), $filename);
            return $fullPath;
        }

        // Handle regular images
        $image = $this->manager->read($file->getPathname());

        // Handle resize if dimensions are provided
        if (isset($options['width']) || isset($options['height'])) {
            $image = $this->resize($image, $options);
        }

        // Handle crop if dimensions are provided
        if (isset($options['crop_width']) || isset($options['crop_height'])) {
            $image = $this->crop($image, $options);
        }

        // Handle quality if provided
        $quality = $options['quality'] ?? 90;

        // Store the image in public directory
        $image->save(public_path($fullPath), $quality);

        return $fullPath;
    }

    /**
     * Resize the image while maintaining aspect ratio
     *
     * @param ImageInterface $image
     * @param array $options
     * @return ImageInterface
     */
    private function resize(ImageInterface $image, array $options): ImageInterface
    {
        $width = $options['width'] ?? null;
        $height = $options['height'] ?? null;

        if ($width && $height) {
            return $image->resize($width, $height);
        }

        if ($width) {
            return $image->resize($width, null);
        }

        if ($height) {
            return $image->resize(null, $height);
        }

        return $image;
    }

    /**
     * Crop the image
     *
     * @param ImageInterface $image
     * @param array $options
     * @return ImageInterface
     */
    private function crop(ImageInterface $image, array $options): ImageInterface
    {
        $width = $options['crop_width'] ?? null;
        $height = $options['crop_height'] ?? null;
        $x = $options['crop_x'] ?? 0;
        $y = $options['crop_y'] ?? 0;

        if ($width && $height) {
            return $image->crop($width, $height, $x, $y);
        }

        return $image;
    }

    /**
     * Delete an image from public directory
     *
     * @param string $path
     * @return bool
     */
    public function delete(string $path): bool
    {
        if (file_exists(public_path($path))) {
            return unlink(public_path($path));
        }
        return false;
    }
}