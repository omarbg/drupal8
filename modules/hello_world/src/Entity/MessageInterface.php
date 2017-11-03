<?php
/**
 * @file Contains \Drupal\hello_world\Entity\MessageInterface.
 */
namespace Drupal\hello_world\Entity;
use Drupal\Core\Entity\ContentEntityInterface;
interface MessageInterface extends ContentEntityInterface {
 /**
 * Gets the message value.
 *
 * @return string
 */
 public function getMessage();
}