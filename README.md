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
