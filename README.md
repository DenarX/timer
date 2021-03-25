# timer
Timer function for easily finding and debugging slow scripts in PHP

#### Code
```
function timer($str = 'Timer', $reset = false)
{
  global $time;
  if ($reset || !$time) {
    $time = microtime(true);
    $str = $str ?: 'Reset';
  }
  echo $str . ': ' . number_format(microtime(true) - $time, 6, '.', ',') . "\n\r<br>" . PHP_EOL;
}
```
#### Usage

```
timer();
timer();
timer();

echo "<br>";

timer('', true);
timer('1');
timer('2');
timer('3');
timer('End');
```
#### Result
```
Timer: 0.000001
Timer: 0.000014
Timer: 0.000015

Reset: 0.000000
1: 0.000001
2: 0.000002
3: 0.000003
End: 0.000004
```
