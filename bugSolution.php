```php
function processData(array $data): array {
  $newData = array_values($data); // Create a copy to avoid modifying the original array
  foreach ($newData as &$item) {
    // ... some processing on $item ...
  }
  return $newData;
}

$myData = [1, 2, 3];
$processedData = processData($myData);

// Now $myData remains unchanged
print_r($myData); // Output: Array ( [0] => 1, [1] => 2, [2] => 3 )
print_r($processedData); // Output: Array ( [0] => ..., [1] => ..., [2] => ... )
```