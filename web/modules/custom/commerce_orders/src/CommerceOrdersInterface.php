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
   * @param $date_from
   *   The date from.
   * @param $date_to
   *   THe date to.
   *
   * @return int
   *   The orders count.
   */
  public function getOrdersCount($date_from, $date_to): int;

  /**
   * Get average orders sum.
   *
   * @param $date_from
   *   The date from.
   * @param $date_to
   *   The date to.
   *
   * @return float
   *  The average orders sum.
   */
  public function getAverageOrdersSum($date_from, $date_to): float;

  /**
   * Gets the purchased entity.
   *
   * @param $date_from
   *   The date from.
   * @param $date_to
   *   The date to.
   *
   * @return int
   *   The most purchased entity id.
   */
  public function getMostPurchasedEntityId($date_from, $date_to): int;

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
