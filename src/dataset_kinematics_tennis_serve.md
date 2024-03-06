---
jupytext:
  text_representation:
    extension: .md
    format_name: myst
    format_version: 0.13
    jupytext_version: 1.14.5
kernelspec:
  display_name: Python 3 (ipykernel)
  language: python
  name: python3
---

```{code-cell} ipython3
:tags: [remove-cell]

%matplotlib inline
```

# Tennis serve kinematics

This dataset was kindly provided by Fraje Watson, Steve Taylor and Jin (Derrick) Gaokuang from the [University College London](https://www.ucl.ac.uk/), [Aspire CREATe lab](https://ucl.ac.uk/aspire-create).

These are the bilateral kinematics of four tennis serves, sampled at 50 Hz. The laboratory vertical axis is z.

## Markerset

| Marker       | Definition                          | Marker       | Definition                                    |
| ------------ | ----------------------------------- | ------------ | ----------------------------------- |
| Derrick:LTOE | Left toe                            | Derrick:RTOE | Right toe                            |
| Derrick:LHEE | Left heel                           | Derrick:RHEE | Right heel                           |
| Derrick:LANK | Left ankle                          | Derrick:RANK | Right ankle                          |
| Derrick:LKNE | Left knee                           | Derrick:RKNE | Right knee                           |
| Derrick:LASI | Left anterior-superior iliac spine  | Derrick:RASI | Right anterior-superior iliac spine  |
| Derrick:LPSI | Left posterior-superior iliac spine | Derrick:RPSI | Right posterior-superior iliac spine |
| Derrick:LSHO | Left shoulder                       | Derrick:RSHO | Right shoulder                       |
| Derrick:LELB | Left elbow                          | Derrick:RELB | Right elbow                          |
| Derrick:LWRA | Left wrist (A)                      | Derrick:RWRA | Right wrist (A)                      |
| Derrick:LWRB | Left wrist (B)                      | Derrick:RWRB | Right wrist (B)                      |
| Derrick:LFIN | Left finger                         | Derrick:RFIN | Right finger                         |
| Derrick:LFHD | Left forehead                       | Derrick:RFHD | Right forehead                       |
| Derrick:LBHD | Left backhead                       | Derrick:RBHD | Right backhead                       |
| Derrick:C7   | C7                                  | Derrick:T10  | T10                                 |
| Derrick:STRN | Sternum                             | Derrick:CLAV | Interclavicular space               |

## Files

- `kinematics_tennis_serve.c3d`: Labelled markers, no events, no forces, no analog signals

```{code-cell} ipython3
:tags: [remove-input]

import kineticstoolkit.lab as ktk
ktk.config.interactive_backend_warning = False

filename = ktk.doc.download("kinematics_tennis_serve.c3d")
markers = ktk.read_c3d(filename)["Points"]
player = ktk.Player(markers.get_ts_between_times(2, 5), up="z", anterior="-y")
display(player._to_animation())
player.close()
```

- `kinematics_tennis_serve_nan.c3d`: Same as `kinematics_tennis_serve.c3d`, with simulated missing samples on Derrick:RSHO.

```{code-cell} ipython3
filename = ktk.doc.download("kinematics_tennis_serve_nan.c3d")
markers = ktk.read_c3d(filename)["Points"]
markers.plot("Derrick:RSHO")
```

- `kinematics_tennis_serve_2players.c3d`: Similar to `kinematics_tennis_serve.c3d`, but with a simulated second player named Viktor. In this case, the marker set is:

| Marker       | Definition                          | Marker       | Definition                           |
| ------------ | ----------------------------------- | ------------ | ------------------------------------ |
| Derrick:LTOE | Left toe                            | Derrick:RTOE | Right toe                            |
| Derrick:LHEE | Left heel                           | Derrick:RHEE | Right heel                           |
| Derrick:LANK | Left ankle                          | Derrick:RANK | Right ankle                          |
| Derrick:LKNE | Left knee                           | Derrick:RKNE | Right knee                           |
| Derrick:LASI | Left anterior-superior iliac spine  | Derrick:RASI | Right anterior-superior iliac spine  |
| Derrick:LPSI | Left posterior-superior iliac spine | Derrick:RPSI | Right posterior-superior iliac spine |
| Derrick:LSHO | Left shoulder                       | Derrick:RSHO | Right shoulder                       |
| Derrick:LELB | Left elbow                          | Derrick:RELB | Right elbow                          |
| Derrick:LWRA | Left wrist (A)                      | Derrick:RWRA | Right wrist (A)                      |
| Derrick:LWRB | Left wrist (B)                      | Derrick:RWRB | Right wrist (B)                      |
| Derrick:LFIN | Left finger                         | Derrick:RFIN | Right finger                         |
| Derrick:LFHD | Left forehead                       | Derrick:RFHD | Right forehead                       |
| Derrick:LBHD | Left backhead                       | Derrick:RBHD | Right backhead                       |
| Derrick:C7   | C7                                  | Derrick:T10  | T10                                  |
| Derrick:STRN | Sternum                             | Derrick:CLAV | Interclavicular space                |
| Viktor:LTOE  | Left toe                            | Viktor:RTOE  | Right toe                            |
| Viktor:LHEE  | Left heel                           | Viktor:RHEE  | Right heel                           |
| Viktor:LANK  | Left ankle                          | Viktor:RANK  | Right ankle                          |
| Viktor:LKNE  | Left knee                           | Viktor:RKNE  | Right knee                           |
| Viktor:LASI  | Left anterior-superior iliac spine  | Viktor:RASI  | Right anterior-superior iliac spine  |
| Viktor:LPSI  | Left posterior-superior iliac spine | Viktor:RPSI  | Right posterior-superior iliac spine |
| Viktor:LSHO  | Left shoulder                       | Viktor:RSHO  | Right shoulder                       |
| Viktor:LELB  | Left elbow                          | Viktor:RELB  | Right elbow                          |
| Viktor:LWRA  | Left wrist (A)                      | Viktor:RWRA  | Right wrist (A)                      |
| Viktor:LWRB  | Left wrist (B)                      | Viktor:RWRB  | Right wrist (B)                      |
| Viktor:LFIN  | Left finger                         | Viktor:RFIN  | Right finger                         |
| Viktor:LFHD  | Left forehead                       | Viktor:RFHD  | Right forehead                       |
| Viktor:LBHD  | Left backhead                       | Viktor:RBHD  | Right backhead                       |
| Viktor:C7    | C7                                  | Viktor:T10   | T10                                  |
| Viktor:STRN  | Sternum                             | Viktor:CLAV  | Interclavicular space                |

```{code-cell} ipython3
:tags: [remove-input]
filename = ktk.doc.download("kinematics_tennis_serve_2players.c3d")
markers = ktk.read_c3d(filename)["Points"]
player = ktk.Player(markers.get_ts_between_times(2, 5), up="z", anterior="-y")
display(player._to_animation())
player.close()
```
