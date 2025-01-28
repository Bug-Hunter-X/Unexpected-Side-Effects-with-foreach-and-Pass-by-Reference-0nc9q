```php
function processData(array $data): array {
  foreach ($data as &$item) {
    // ... some processing on $item ...
  }
  return $data;
}

$myData = [1, 2, 3];
$processedData = processData($myData);

// Unexpected behavior! $myData is also modified!
print_r($myData); // Output: Array ( [0] => ... [1] => ... [2] => ... )
```