<?php

namespace Drupal\ap_task97\Controller;


use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenDialogCommand;
use Drupal\Core\Ajax\addContent;
use Drupal\Core\Ajax\addCommand;

/**
 * Class AjaxLinkNodesController.
 */
class AjaxLinkNodesController extends ControllerBase  {

  /**
   * Ajaxlink.
   *
   * @return string
   *   Return Hello string.
   */
  public function ajaxLink() {

    $header = ['id', 'title', 'created'];
    $nids = Drupal::entityQuery('node')->execute();
    $nodes = Node::loadMultiple($nids);
    $rows = [];

    foreach ($nodes as $node) {
      $rows[] = [$node->nid->value, $node->title->value, $node->created->value];
    }

    $content = [
      '#theme' => 'table',
      '#header' => $header,
      '#rows' => $rows,
    ];

    $selector = '#myID';
    $title = 'Dialog Title';
    $dialog_options = ['minHeight' => 200, 'resizable' => TRUE];
    $settings = [];

    $responce = new AjaxResponse();
    $responce -> addCommand(new
    OpenDialogCommand($selector, $title, $content, $dialog_options, $settings));

    return $responce;
  }

}
