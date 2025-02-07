function foo(a, b) {
  if (a === null || b === null) {
    return 0;
  }

  return a + b;
}

$result = foo(null, 10);
var_dump($result); // Output: 0

$result = foo(5, null);
var_dump($result); // Output: 0

$result = foo(null, null);
var_dump($result); // Output: 0

$result = foo(5, 10);
var_dump($result); // Output: 15