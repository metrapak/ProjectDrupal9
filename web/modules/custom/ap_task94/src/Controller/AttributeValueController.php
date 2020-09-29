<?php

namespace Drupal\ap_task94\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AttributeValueController.
 */

class AttributeValueController extends ControllerBase {
  /**
   * OutputValue.
   *
   * @return
   */
  public function outputValue() {
    return [
      '#attached' => [
        'library' => [
          'ap_task94/my_library',
        ],
      ],
    ];
  }
}
