<?php
namespace Drupal\a_p_task92\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class Task92_Plugin1 extends BlockBase
{
   public function build()
    {
       $renderable = [
            '#theme' => 'task92_plugin1',
            '#message' => 'Hello World!',
            ];

       return $renderable;
   }
}
