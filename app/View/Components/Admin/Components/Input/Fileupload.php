<?php

namespace App\View\Components\Admin\Components\Input;

use Illuminate\Validation\Rules\In;
use Illuminate\View\Component;

class Fileupload extends Component
{
    /**
     * Whether or not the input has an error to show.
     *
     * @var bool
     */
    public bool $error = false;

    /**
     * Specify any filetypes for validation client side.
     *
     * @var array<string>
     */
    public $filetypes = [];

    /**
     * Spcify max upload filesize.
     */
    public int $maxUploadSize;

    /**
     * Sepcify max Number of files
     */
    public int $maxFiles;

    /**
     * @var string
     */
    public ?string $imagesHolder;

    public bool $multiple;

    /**
     * Initialise the component.
     *
     * @param  bool  $error
     * @param  array<mixed>  $filetypes
     * @param  string|null  $imagesHolder
     * @param  int  $maxFileSize FileSize in MB
     */
    public function __construct(
        $error = false,
        $filetypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/svg', 'image/svg+xml', 'image/webp'],
        int $maxFileSize = 5,
        int $maxFiles = 10,
        bool $multiple = true,
        ?string $imagesHolder = 'images'
    ) {
        $this->error = $error;

        $this->filetypes = $filetypes;

        $this->maxUploadSize = get_max_fileupload_size($maxFileSize * 1024);

        $this->maxFiles = $maxFiles;

        $this->multiple = $multiple && $maxFiles > 1;

        $this->imagesHolder = $imagesHolder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.components.input.fileupload');
    }
}
