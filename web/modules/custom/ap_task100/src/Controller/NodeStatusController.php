<?php

namespace Drupal\ap_task100\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AlertCommand;
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
    $status = $node->get('status');
   if ($status === '0'){

     $response = new AjaxResponse();
     $response->addCommand(new
      alertCommand('status of node is 0 already'));
   }
   else {
     $node = Node::load($nid);
     $node -> set('status', 0);
     $node -> save();
     $response = new AjaxResponse();
     $response->addCommand(new
      alertCommand('status of node was changed on 0'));

   }
    return $response;
  }
}
