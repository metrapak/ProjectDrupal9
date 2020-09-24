<?php
namespace Drupal\a_p_task92\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class Task92_Plugin2 extends BlockBase
{

     public function build()
     {
        $header = ['id','title', 'created'];
        $nodes = $query = \Drupal::database()->select('node_field_data', 'nfd')
        ->fields('nfd', ['nid', 'title','created'])->execute()->fetchAll();
        $rows = array();

        foreach ($nodes as $node) {
            $rows[] = array($node->nid, $node->title,$node->created);
        }

        return [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $rows,
             ];
      }
  }
