# kineticstoolkit_doc

This is the repository for Kinetics Toolkit's website: https://kineticstoolkit.uqam.ca

All the website source code is written in MyST Markdown and is built using Jupyter-Book. The source is included in the `src` folder.

To compile the website, you must create two symlinks in the `kineticstoolkit_doc` root folder, named `ktk` and `kineticstoolkit`, that both points to the inner `kineticstoolkit` folder of the installed Kinetics Toolkit package. For instance, from the `kineticstoolkit_doc` root folder:

```
ln -s [SOME_FOLDER]/kineticstoolkit/kineticstoolkit ktk
ln -s [SOME_FOLDER]/kineticstoolkit/kineticstoolkit kineticstoolkit
```

Please [check this page](https://kineticstoolkit.uqam.ca/doc/dev_contributing.html) to find out how to contribute to Kinetics Toolkit. Your help is very welcome!
