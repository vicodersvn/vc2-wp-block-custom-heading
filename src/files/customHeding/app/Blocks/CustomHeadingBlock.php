<?php

namespace App\Blocks;

use App\Blocks\GutenburgBlock;

class CustomHeadingBlock extends GutenburgBlock
{
    public $name = 'vc_custom_heading';
    public $title = 'VC Custom Heading';
    public $description = 'VC Custom Heading Gutenburg Block';
    public $category = 'formatting';
    public $icon = 'images-alt2';
    public $align = 'full';

    public function __construct()
    {
        add_action('acf/init', [$this, 'register_block']);
    }

    public function register_block()
    {
        if (function_exists('acf_register_block_type')) {
            acf_register_block_type([
                'name' => $this->name,
                'title' => $this->title,
                'description' => $this->description,
                'render_callback' => [$this,'render'],
                'category' => $this->category,
                'icon' => $this->icon,
                'align' => $this->align,
            ]);
        }
    }

    public function render($block)
    {
        return view('blocks/_vc2_custom_heading_block',['block'=>$block]);
    }
}

