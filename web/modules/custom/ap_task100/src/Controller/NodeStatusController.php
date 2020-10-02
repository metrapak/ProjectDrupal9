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

    $query = \Drupal::entityQuery('node');
    $query->condition('nid',$nid);
    $id = $query->execute();

    $node = Node::load(current($id));
    $node->set('status', 0);
    $node->save();

    $response = new AjaxResponse();
    $response->addCommand(new
     alertCommand('status of node was changed on unpublished'));

    return $response;
  }

}
