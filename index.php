function timer($str = 'Timer', $reset = false)
{
  global $time;
  if ($reset || !$time) {
    $time = microtime(true);
    $str = $str ?: 'Reset';
  }
  echo $str . ': ' . number_format(microtime(true) - $time, 6, '.', ',') . "\n\r<br>" . PHP_EOL;
}
