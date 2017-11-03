<?php
/**
 * @file Contains \Drupal\hello_world\Entity\SiteAnnouncement
 */
namespace Drupal\hello_world\Entity;
use Drupal\Core\Config\Entity\ConfigEntityBase;
/**
 * @ConfigEntityType(
 * id ="announcement",
 * label = @Translation("Site Announcement"),
 *  handlers = {
 * "list_builder" = "Drupal\hello_world\SiteAnnouncementListBuilder",
 * "form" = {
 * "default" = "Drupal\hello_world\SiteAnnouncementForm",
 * "add" = "Drupal\hello_world\SiteAnnouncementForm",
 * "edit" = "Drupal\hello_world\SiteAnnouncementForm",
 * "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 * }
 * },
 * config_prefix = "announcement",
 * entity_keys = {
 * "id" = "id",
 * "label" = "label"
 * },
 * links = {
 * "delete-form" = "/admin/config/system/site-announcements/
manage/{announcement}/delete",
 * "edit-form" = "/admin/config/system/site-announcements/
manage/{announcement}",
 * "collection" = "/admin/config/system/site-announcements",
 * },
 * config_export = {
 * "id",
 * "label",
 * "message",
 * }
 * )
 */
class SiteAnnouncement extends ConfigEntityBase implements
SiteAnnouncementInterface {
 /**
 * The announcement's message.
 *
 * @var string
 */
 protected $message;
 /**
 * {@inheritdoc|}
 */
 public function getMessage() {
 return $this->message;
 }
}