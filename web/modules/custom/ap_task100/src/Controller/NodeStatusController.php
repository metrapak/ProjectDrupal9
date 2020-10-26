<?php

namespace Drupal\ap_task100\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AlertCommand;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\node\Entity\Node;

/**
 * Class NodeStatusController.
 */
class NodeStatusController extends ControllerBase {

  /**
   * ChangeStatusAction.
   *
   * @return string
   *   Return Hello string.
   */
  public function changeStatusAction($nid) {
    $node = Node::load($nid);
    $status = $node->get('status')->value;
    $response = new AjaxResponse();

    if (!$status) {
      $response->addCommand(new
      alertCommand('status of node is 0 already'));
    }
    else {
      $node->set('status', 0);
      $node->save();
      $selector = 'a[data-id ="' . $nid . '"]';

      $renderable = [
        '#theme' => 'link_text',
        '#linkText' => 'status became 0',
      ];

      $response->addCommand(new ReplaceCommand($selector, $renderable));

    }
    return $response;
  }


}
