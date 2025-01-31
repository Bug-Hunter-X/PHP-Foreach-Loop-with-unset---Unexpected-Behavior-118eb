function foo(array $arr): array {
  // Using array_filter for a concise and correct solution
  return array_filter($arr, fn($value) => $value !== 'bar');

  //Alternative solution using a for loop
  // for ($i = 0; $i < count($arr); $i++) {
  //   if ($arr[$i] === 'bar') {
  //     unset($arr[$i]);
  //   }
  // }
  // return $arr;
} 