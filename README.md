ScalarPHP
=========

Just an experiment.


### Example

```php
<?php
require 'String.php';
$s = new String('hello world');
echo $s->toUppercase() . '<br />'; // HELLO WORLD
echo $s->startsWith('hell') . '<br />'; // 1
echo $s->endsWith('rld') . '<br />'; // 1
echo $s->contains('o w') . '<br />'; // 1
echo $s->charAt(2) . '<br />'; // l
echo $s->charCodeAt(4) . '<br />'; // something
echo $s->toUppercase()->startsWith('HELL'); // 1, toUppercase returns new instance of String
?>
```

### The advantage of something like this is that you can type-hint, unlike with primitive types.

```php
<?php
require 'String.php';

class MyClass {
  public function doSomething(String $string) {
      echo $string;
  }
}
````

## vs

```php
class MyClass {
  public function doSomething($string) {
      if(is_string($string)) {
        echo $string;
      }
  }
}
```
