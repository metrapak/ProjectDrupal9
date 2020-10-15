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

    if (!$status) {
      $response = new AjaxResponse();
      $response->addCommand(new
      alertCommand('status of node is 0 already'));
    }
    else {
      $node->set('status', 0);
      $node->save();

      $response = new AjaxResponse();
      $selector = '#' . $nid;
      $content = '<p>status became 0 </p>';
      $settings = ['my-setting' => 'setting',];
      $response->addCommand(new ReplaceCommand($selector, $content, $settings));
    }
    return $response;
  }

}
