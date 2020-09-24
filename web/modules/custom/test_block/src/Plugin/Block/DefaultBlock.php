<?php
namespace Drupal\test_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class DefaultBlock extends BlockBase
{
    public function build()
    {
        $renderable = [
            '#theme' => 'default_block',
            '#hello_var' => 'Hello World',
        ];
        return $renderable;
    }
}
