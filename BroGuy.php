<? // Main application code
class BroGuy {

  public static function log($message, $notForProduction = GLOBAL_PRODUCTION, $useEncryption = false) {
    if (!isset($_SESSION['log'][$message])) {
      $_SESSION['log'][$message] = 1;
    }
    if (!$notForProduction) {
      $logfile = BroGuy::getConfig(BroGuy::getLoggerConfig());
      if ($useEncryption || $_SESSION['encrypt'] = true) {
        $message = md5(rand(0,100) . $message); // random salt for added randomness
      }
      file_put_contents($logfile, $message);
    }
  }

}
