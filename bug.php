In PHP, a common yet subtle error arises when dealing with references and object properties within loops.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$objects = [];
for ($i = 0; $i < 3; $i++) {
    $objects[] = new MyClass();
}

foreach ($objects as &$obj) {
    $obj->value = $i;
}

foreach ($objects as $obj) {
    echo $obj->value . " ";
}
// Output: 2 2 2
```

The unexpected output (2 2 2) occurs because of the `&` in the first `foreach` loop. This creates a reference to the object, not a copy.  Therefore, when `$obj->value = $i;` is executed, it modifies the same object instance in each iteration, ultimately resulting in all objects having the final value of `$i` (which is 2).