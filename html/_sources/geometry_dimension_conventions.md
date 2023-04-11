---
jupytext:
  text_representation:
    extension: .md
    format_name: myst
    format_version: 0.13
    jupytext_version: 1.13.8
kernelspec:
  display_name: Python 3 (ipykernel)
  language: python
  name: python3
---

```{code-cell} ipython3
:tags: [remove-cell]
%matplotlib inline
```


# Dimension conventions

:::{card} Summary
This section indicates how to represent series of scalars, points, vectors, frames and transforms in Kinetics Toolkit.
:::

In the [](api/ktk.geometry.rst) module and in most of Kinetics Toolkit's module:

- Every point, vector or matrix, and in many case even scalar, is considered as a **series**.
- The first dimension of any series corresponds to **time**.

This is emphasized in the following examples:

## 📄 Exemples of representations

### Series of scalars

```
[x(t0), x(t1), x(t2), ...]
```


### Series of points

```
[
    [x(t0), y(t0), z(t0), 1.0],
    [x(t1), y(t1), z(t1), 1.0],
    [x(t2), y(t2), z(t2), 1.0],
    [ ... ,  ... ,  ... , ...],
] 
```

### Series of vectors

```
[
    [x(t0), y(t0), z(t0), 0.0],
    [x(t1), y(t1), z(t1), 0.0],
    [x(t2), y(t2), z(t2), 0.0],
    [ ... ,  ... ,  ... , ...],
] 
```

### Series of point clouds

```
[
    [
        [x0(t0), x1(t0), x2(t0), ...],
        [y0(t0), y1(t0), y2(t0), ...],
        [z0(t0), z1(t0), z2(t0), ...],
        [   1.0,    1.0,    1.0, ...],
    ],
    [
        [x0(t1), x1(t1), x2(t1), ...],
        [y0(t1), y1(t1), y2(t1), ...],
        [z0(t1), z1(t1), z2(t1), ...],
        [   1.0,    1.0,    1.0, ...],
    ],
    ...
}
```

### Series of frames or homogeneous transforms

```
[
    [
        [R00(t0), R01(t0), R02(t0), Tx(t0)],
        [R10(t0), R11(t0), R12(t0), Ty(t0)],
        [R20(t0), R21(t0), R22(t0), Tz(t0)],
        [    0.0,     0.0,     0.0,    1.0],
    ],
    [
        [R00(t1), R01(t1), R02(t1), Tx(t1)],
        [R10(t1), R11(t1), R12(t1), Ty(t1)],
        [R20(t1), R21(t1), R22(t1), Tz(t1)],
        [    0.0,     0.0,     0.0,    1.0],
    ],
    ...
}
```



## 📄 Working with constants

Since most signals in Kinetics Toolkit as considered as a series, always ensure that the first dimension of any array is reserved to time. For example, the vector (x = 1, y = 2, z = 3) must be expressed as `np.array([[1.0, 2.0, 3.0, 0.0]])` (note the double brackets). A common error would be to express it as `np.array([1.0, 2.0, 3.0, 0.0])` (single brackets), which would mean a series of 4 floats instead of one constant vector.

A quick way to convert a constant array to a series is to use numpy's `newaxis`:

```{code-cell} ipython3
import numpy as np

one_matrix = np.eye(4)
one_matrix
```

```{code-cell} ipython3
series_of_one_matrix = one_matrix[np.newaxis]
series_of_one_matrix
```


## 📄 What next

Now that we learned or reminded lots of information on rigid 3d geometry, the next section on kinematics analysis will show how to use the [](api/ktk.geometry.rst) module in real movement acquisition data.
