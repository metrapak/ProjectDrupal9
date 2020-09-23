<?php

namespace Drupal\test_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {

    $renderable = [
         '#theme' => 'default_block',
         '#hello_var' => 'Hello World',
       ];

       return $renderable;

  }

}
