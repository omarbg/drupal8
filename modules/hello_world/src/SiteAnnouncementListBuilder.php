<?php

/**
 * @file
 * Contains \Drupal\hello_world\SiteAnnouncementListBuilder.
 */

namespace Drupal\hello_world;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\hello_world\Entity\SiteAnnouncementInterface;

class SiteAnnouncementListBuilder extends ConfigEntityListBuilder {

    /**
     * {@inheritdoc}
     */
    public function buildHeader() {
        $header['label'] = t('Label');
        return $header + parent::buildHeader();
    }

    /**
     * {@inheritdoc}
     */
    public function buildRow(SiteAnnouncementInterface $entity) {
        $row['label'] = $entity->label();
        return $row + parent::buildRow($entity);
    }

}
