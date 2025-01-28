# PHP Foreach Loop Pass-by-Reference Bug
This repository demonstrates a common pitfall in PHP involving the `foreach` loop and pass-by-reference.  When iterating over an array using `foreach`, and modifying elements within the loop, the original array is directly modified unless you take precautions. This can lead to unexpected side effects if a copy of the array was intended.

The `bug.php` file showcases the problem, and `bugSolution.php` provides a solution using `$item = & $value` to explicitly pass by reference, or using the `foreach` loop without reference, creating a copy using `array_values`. 

**Note:** This bug is subtle but can cause significant issues in larger applications if not understood.