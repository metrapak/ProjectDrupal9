<?php

namespace Drupal\users_export_to_csv;
use Drupal\user\Entity\User;

class ExportUsersToCsvBatch  {
  public static function exportUsersDataToCsv($uids, &$context) {
    $csv_data = 'Email, Password' . PHP_EOL;
    foreach ($uids as $uid) {
      $user = User::load($uid);
      $row = [];
      $row[] = $user->mail->value;
      $row[] = $user->pass->value;
      $csv_data .= implode(',', $row) . PHP_EOL;
    }
    $file = fopen('users_data.csv', 'w');

    fwrite($file, $csv_data);
    fclose($file);
  }

  public static function exportUsersDataToCsvFinishedCallback($success, $results, $operations) {
    // The 'success' parameter means no fatal PHP errors were detected. All
    // other error management should be handled using 'results'.
    if ($success) {
      $message = t('Export finished successfully');
    }
    else {
      $message = t('Finished with an error.');
    }
    \Drupal::messenger()->addMessage($message);
  }

}
