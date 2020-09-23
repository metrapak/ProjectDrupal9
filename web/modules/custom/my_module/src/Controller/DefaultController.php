<?php

namespace Drupal\my_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Mymodule.
   *
   * @return string
   *   Return Hello string.
   */
  public function myModule() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: myModule')
    ];
  }

}
