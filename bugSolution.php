```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric input appropriately (e.g., log an error, throw an exception, or skip the element)
      error_log("Warning: Non-numeric value encountered in array: " . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```