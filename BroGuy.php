<? // Main application code
class BroGuy {
  static $instance;
  static $isGlobal;
  static $shouldLog;

  public function __construct($isGlobal = false, $shouldLog = GLOBAL_LOGGING, array $arguments = array()) {
    self::isGlobal = $isGlobal;
    self::shouldLog = $shouldLog;

    // Bros dont limit other brogrammers with instance, ill take what you can give bro.
    foreach ($arguments as $key => $value) {
      $this->{$key} = $value;
    }
  }

  /**
   * Bros always use the singleton design pattern, but we also let people use the constructor because bros
   * dont codeblock other bros.
   * @return [type] [description]
   */
  public static function getInstance() {
    if (is_null(self::instance)) {
      self::instance = new BroGuy();
    }

    return self::instance;
  }

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
