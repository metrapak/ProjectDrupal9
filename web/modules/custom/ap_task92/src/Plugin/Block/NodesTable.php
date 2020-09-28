<?php

namespace Drupal\ap_task92\Plugin\Block;


use Drupal;

use Drupal\Core\Block\BlockBase;

use Drupal\node\Entity\Node;

/**
 * Provides a 'NodesTable' block.
 *
 * @Block(
 *  id = "nodes_table",
 *  admin_label = @Translation("Nodes table"),
 * )
 */
class NodesTable extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $header = ['id', 'title', 'created'];
    $nids = Drupal::entityQuery('node')->range(0,100)
      ->execute();
    $nodes = Node::loadMultiple($nids);
    $rows = [];
    foreach ($nodes as $node) {
      $rows[] = [$node->nid->value, $node->title->value, $node->created->value];
    }

    return [
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
    ];

  }

}
