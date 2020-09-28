<?php

namespace Drupal\ap_task92\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HelloWorld' block.
 *
 * @Block(
 *  id = "hello_world",
 *  admin_label = @Translation("Hello world"),
 * )
 */
class HelloWorld extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $renderable = [
      '#theme' => 'hello_world',
      '#message' => 'Hello World!',
    ];

    return $renderable;
  }

}
