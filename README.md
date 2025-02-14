# PHP Loop Reference Bug

This repository demonstrates a common yet subtle bug in PHP involving the use of references within loops when dealing with objects. Incorrect usage of references can lead to unexpected and difficult-to-debug behavior.  The `bug.php` file contains the buggy code, and `bugSolution.php` shows the correct approach.

## Bug Description

The bug arises from the unintended modification of object properties due to improper use of references. The `foreach` loop with `&` creates a reference to each object, and modifications within the loop affect the original objects, not copies.