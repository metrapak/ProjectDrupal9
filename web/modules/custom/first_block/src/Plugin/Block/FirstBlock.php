<?php

namespace Drupal\first_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FirstBlock' block.
 *
 * @Block(
 *  id = "first_block",
 *  admin_label = @Translation("First block"),
 * )
 */
class FirstBlock extends BlockBase {

  /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
      return ['label_display' => FALSE];
    }
  /**
   * {@inheritdoc}
   */

    public function build()
   {
       // return array(
       //     '#theme' => 'first_block',
       //     '#test_var' => $this->t('Hello World'),
       //
       // );
       $renderable = [
             '#theme' => 'first_block',
             '#test_var' => 'Hello World',
           ];

           return $renderable;

   }


}
