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
    // $build = [];
    // $build['#theme'] = 'default_block';
    // //$build['default_block']['#markup'] = 'Implement DefaultBlock.';
    // $build['default_block']['#name'] = 'Hello World.';
    //
    // return $build;
    $renderable = [
         '#theme' => 'default_theme',
         '#test_var' => 'test variable',
       ];

       return $renderable;

  }

}
