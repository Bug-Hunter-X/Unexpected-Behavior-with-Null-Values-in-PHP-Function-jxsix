function foo(a, b) {
  if (!isset($a) || !isset($b) || !is_numeric($a) || !is_numeric($b)) {
    return 0; // Handle cases where a or b is not set or is not numeric
  }

  return $a + $b;
}

$result = foo(null, 10);
var_dump($result); // Output: 0

$result = foo(5, null);
var_dump($result); // Output: 0

$result = foo(null, null);
var_dump($result); // Output: 0

$result = foo(5, 10);
var_dump($result); // Output: 15

$result = foo("5", 10); //Example of handling string type
var_dump($result); // Output: 15

$result = foo(5, "10");//Example of handling string type
var_dump($result); // Output: 15

$result = foo("abc", 10); //Example of handling string type
var_dump($result); // Output: 0

$result = foo(5, "abc");//Example of handling string type
var_dump($result); // Output: 0