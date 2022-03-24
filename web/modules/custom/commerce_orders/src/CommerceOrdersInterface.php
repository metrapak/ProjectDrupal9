<?php

namespace Drupal\commerce_orders;

use Drupal\Core\Entity\EntityInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Defines the interface for commerce orders.
 */
interface CommerceOrdersInterface {

  /**
   * Gets orders count .
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Request.
   *
   * @return array
   *   Orders statistics.
   */
  public function getOrdersStatistics(Request $request): array;

  /**
   * Gets orders count .
   *
   * @param $date_from_timestamp
   *   The date from.
   * @param $date_to_timestamp
   *   THe date to.
   *
   * @return int
   *   The orders count.
   */
  public function getOrdersCount($date_from_timestamp, $date_to_timestamp): int;

  /**
   * Get average orders sum.
   *
   * @param $date_from_timestamp
   *   The date from.
   * @param $date_to_timestamp
   *   The date to.
   *
   * @return float
   *  The average orders sum.
   */
  public function getAverageOrdersSum($date_from_timestamp, $date_to_timestamp): float;

  /**
   * Gets the purchased entity.
   *
   * @param $date_from_timestamp
   *   The date from.
   * @param $date_to_timestamp
   *   The date to.
   *
   * @return int
   *   The most purchased entity id.
   */
  public function getMostPurchasedEntityId($date_from_timestamp, $date_to_timestamp): int;

  /**
   * Gets the purchased entity.
   *
   * @param $id
   *   Entity id.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   *   The product variation.
   */
  public function getPurchasedEntity($id): EntityInterface;


}
