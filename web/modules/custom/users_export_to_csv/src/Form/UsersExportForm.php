<?php

namespace Drupal\users_export_to_csv\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;

/**
 * Class UsersExportForm.
 */
class UsersExportForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'users_export_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['users_export'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Create and export users'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $users_ids = [];
    for ($counter = 0; $counter < 100; $counter++) {
      $user = User::create();
      $user->setPassword(\Drupal::service('password_generator')->generate(12));
      $user->setEmail($this->generateRandomString(12) . '@gmail.com');
      $user->setUsername($this->generateRandomString(12));
      $user->save();
      $users_ids[] = $user->id();
    }

    $batch = [
      'title' => t('Creating and export users'),
      'operations' => [
        [
          '\Drupal\users_export_to_csv\ExportUsersToCsvBatch::exportUsersDataToCsv', [$users_ids],
        ],
      ],
      'finished' => '\Drupal\users_export_to_csv\ExportUsersToCsvBatch::exportUsersDataToCsvFinishedCallback',
    ];
    batch_set($batch);
  }
  /**
   * {@inheritdoc}
   */
  public function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
}
