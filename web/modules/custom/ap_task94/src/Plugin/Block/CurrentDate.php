<?php

namespace Drupal\ap_task94\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CurrentDate' block.
 *
 * @Block(
 *  id = "current_date",
 *  admin_label = @Translation("Current date"),
 * )
 */
class CurrentDate extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'current_date',
      '#attached' => [
        'library' => [
          'ap_task94/my_library',
        ],
      ],
    ];
  }

}
