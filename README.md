# PHP Foreach Loop with unset() Unexpected Behavior

This repository demonstrates a common error in PHP when using the `unset()` function within a `foreach` loop to remove elements from an array.  The issue stems from how `unset()` affects the internal array pointer of the `foreach` loop.

**Problem:**  When `unset()` is called on an element, the internal pointer of the `foreach` loop is not automatically adjusted. This means that subsequent iterations may skip elements, resulting in an incomplete or incorrect array modification.

**Solution:** The solution involves using a `for` loop or iterating over a copy of the array to avoid unexpected behavior.  Alternatively, `array_filter()` provides a more concise solution for removing elements based on conditions.

## How to reproduce the bug

1. Clone this repository.
2. Run `bug.php`.
3. Observe the output, which will not be as expected due to the skipping of elements.