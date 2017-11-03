<?php

/**
 * @file Contains \Drupal\hello_world\Entity\
  SiteAnnouncementInterface.
 */

namespace Drupal\hello_world\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

interface SiteAnnouncementInterface extends ConfigEntityInterface  {
    //put your code here
     public function getMessage();

}
