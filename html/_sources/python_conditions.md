---
jupytext:
  text_representation:
    extension: .md
    format_name: myst
    format_version: 0.13
    jupytext_version: 1.14.0
kernelspec:
  display_name: Python 3 (ipykernel)
  language: python
  name: python3
---

# Conditions and booleans

:::{card} Summary
This section shows how to perform comparisons and boolean (logical) operations and how to use these operation to program conditional code (`if`, `else`, `elif`).
:::

In the [previous section](python_functions.md), we learnt how to create simple units called functions, which have a specific and simple goal. The examples were however very simple, because the only concepts we learnt yet are arithmetics and variables.

In this section, our programs will be able to execute different instructions as a consequence of conditions.

## Boolean and comparisons

Comparisons are performed using the following operators:

- `==` Equal
- `!=` Unequal
- `>` Strictly greater
- `>=` Greater or equal
- `<` Strictly lower
- `<=` Lower or equal

For example, the following comparison is `True`:

```{code-cell}
10 > 5
```

while this one is `False`:

```{code-cell}
10 <= 5
```

The result of a comparison is always a boolean variable. We already know the following types of variable: `string`, `int`, `float` and `complex`. Boolean variables, `bool`, may be the simplest type of all: they can be only either `True` or `False`.

Here are other examples of comparison:

```{code-cell}
10 == 10
```

```{code-cell}
10 == 5
```

```{code-cell}
10 != 5
```


Obviously, comparing a constant with another constant has little value. However, it is very common to compare variables with constants, or variables with other variables:

```{code-cell}
WORLD_RECORD = 240
my_score = 236

# Verify if I broke the world record
my_score > WORLD_RECORD
```

:::{tip}
You may note that the equality comparison is a double-equal `==` instead of a single one `=`. This is to avoid confusion between a comparison:

```
a == 5
```
which returns `True` or `False`

and an assignment:

```
a = 5
```
which assigns the value of 5 to variable `a`.
:::

## Conditional code: `if`, `elif`, `else`

Now that we understand how to make comparisons, we will learn how to control the flow of the program as a result of these comparisons. The most important keyword for this effect is `if`:

```
if condition:
    perform_task2()
    perform_task1()
    perform_task2()
```

The `if` checks if a condition is met. Only if the condition evaluates to `True` is the following code block executed. Let's continue the example above:

```{code-cell}
WORLD_RECORD = 240
my_score = 236

# Verify if I broke the world record
if my_score > WORLD_RECORD:
    print("I broke the world record!")

```

This code does nothing, because the condition evaluated to `False`. In this case, it would be interesting to have another code block that would be executed if the condition was `False`. This is done using the `else` keyword:

```{code-cell}
WORLD_RECORD = 240
my_score = 236

# Verify if I broke the world record
if my_score > WORLD_RECORD:
    print("I broke the world record!")

else:
    print("Nothing to see here.")

```

And what if we just matched the world record, without breaking it? Another keyword, `elif`, is read as "else if" and allows to make additional comparisons, in case the first one was `False`:

```{code-cell}
WORLD_RECORD = 240
my_score = 236

# Verify if I broke the world record
if my_score > WORLD_RECORD:
    print("I broke the world record!")

elif my_score == WORLD_RECORD:
    print("I matched the world record!")

else:
    print("Nothing to see here.")

```

There may have more than one `elif` in a same series of comparisons:

```{code-cell}
WORLD_RECORD = 240
my_score = 236

# Verify if I broke the world record
if my_score > WORLD_RECORD:
    print("I broke the world record!")

elif my_score == WORLD_RECORD:
    print("I matched the world record!")

elif my_score > WORLD_RECORD - 5:
    print("I am near the world record!")

else:
    print("Nothing to see here.")

```


## Exercise 1

We have three timing gates. We want to know if an athlete has accelerated, decelerated, or stayed a the same speed between gates 1-2 and gates 2-3.

Write a function with the following signature and docstring:

```
def compare_speed(time1, time2, time3, distance12, distance23):
    """
    Check if an athlete accelerated or decelerated based on timing gates.

    Parameters
    ----------
    time1, time2, time3 : float
        Time at which the athlete passed through timing gate 1, 2, 3,
        in seconds.
    distance12, distance23 : float
        Distance between timing gates 1 and 2; and between timing gates
        2 and 3.

    Returns
    -------
    str
        Returns "accelerated", "decelerated", or "stayed constant" according
        to the calculation.

    """
```


```{code-cell} ipython3
:tags: [hide-cell]


def compare_speed(time1, time2, time3, distance12, distance23):
    """
    Check if an athlete accelerated or decelerated based on timing gates.

    Parameters
    ----------
    time1, time2, time3 : float
        Time at which the athlete passed through timing gate 1, 2, 3,
        in seconds.
    distance12, distance23 : float
        Distance between timing gates 1 and 2; and between timing gates
        2 and 3.

    Returns
    -------
    str
        Returns "accelerated", "decelerated", or "stayed constant" according
        to the calculation.

    """
    speed1 = distance12 / (time2 - time1)
    speed2 = distance23 / (time3 - time2)

    if speed2 > speed1:
        return "accelerated"
    
    elif speed2 < speed1:
        return "decelerated"

    else:
        return "stayed constant"


# Test the function:
print(compare_speed(1.0, 2.0, 3.0, 50, 50))
print(compare_speed(1.0, 2.0, 3.5, 50, 50))
print(compare_speed(1.0, 2.0, 2.5, 50, 50))

```


## Boolean operators

It is possible to construct complex comparisons, by combining the results of many combinations, using the logical operators `not`, `and` and `or`. These operators are specifically aimed to compare booleans.

The `not` operator inverts a `bool`:
```{code-cell}
not True
```

```{code-cell}
not False
```

The `or` operator yields `True` as long as one of the two operands is True:

```{code-cell}
True or False
```

```{code-cell}
False or False
```

The `and` operator yields `True` as long as both operands are True:

```{code-cell}
True and False
```

```{code-cell}
True and True
```

Using these operators, we can construct more complex comparisons and program flows. For example, this function returns `True` only if the first argument is contained between the two others:

```{code-cell}
def is_between(a, lower, upper):
    """Returns True if a is strictly between lower and upper."""
    return (a > lower) and (a < upper)


# Test the function
print(is_between(3, 2, 5))
print(is_between(10, 2, 5))
print(is_between(2, 2, 5))
```

:::{good-practice} Naming functions that return bools
Function that check a condition often start with `is_`, `has_`, `contains_`, etc. This makes it obvious that the answer will be a boolean, or will contain booleans.
:::

## Exercise 2

Write a short code that check the value of two integers named `dice1` and `dice2`, and that prints "You got double-six!", "You got one six!" or "You got no six." according to the dice values.

```{code-cell} ipython3
:tags: [hide-cell]

# Assign some values to dice1 and dice2
dice1 = 6
dice2 = 4

if (dice1 == 6) and (dice2 == 6):
    print("You got double-six!")
elif (dice1 == 6) or (dice2 == 6):
    print("You got one six!")
else:
    print("You got no six.")
```
