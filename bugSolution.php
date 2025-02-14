The solution is to remove the reference operator (`&`) from the `foreach` loop. This ensures that each iteration works with a copy of the object, preventing unintended modifications to other objects.

```php
class MyClass {
    public $value = 0;
}

$objects = [];
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as $obj) {
    $obj->value = $i; // No reference here
}

foreach ($objects as $obj) {
    echo $obj->value . " ";
}
// Output: 0 1 2
```

By removing the `&`, each object's `value` is correctly set to the appropriate loop index. This demonstrates how careful attention to reference usage in loops is crucial to prevent subtle, hard-to-find bugs.