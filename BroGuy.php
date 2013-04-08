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

  public static function doATryCatchAndThenLogException($tryFuncName, $catchFuncName) {
    try {
      if (is_callable(array(self, $tryFuncName)) {
        call_user_func(array(self, $tryFuncName));
      } catch (Exception $e) {
        if (is_callable(array(self, $catchFuncName)) {
          call_user_func(array(self, $catchFuncName);
          BroGuy::log($e->getMessage());
        }
      }
    }
  }
}
