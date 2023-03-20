

<!DOCTYPE html>


<html >

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta name="generator" content="Docutils 0.17.1: http://docutils.sourceforge.net/" />

    <title>Kinetics Toolkit &#8212; Kinetics Toolkit</title>
  
  
  
  <script data-cfasync="false">
    document.documentElement.dataset.mode = localStorage.getItem("mode") || "";
    document.documentElement.dataset.theme = localStorage.getItem("theme") || "light";
  </script>
  
  <!-- Loaded before other Sphinx assets -->
  <link href="_static/styles/theme.css?digest=12da95d707ffb74b382d" rel="stylesheet" />
<link href="_static/styles/bootstrap.css?digest=12da95d707ffb74b382d" rel="stylesheet" />
<link href="_static/styles/pydata-sphinx-theme.css?digest=12da95d707ffb74b382d" rel="stylesheet" />

  
  <link href="_static/vendor/fontawesome/6.1.2/css/all.min.css?digest=12da95d707ffb74b382d" rel="stylesheet" />
  <link rel="preload" as="font" type="font/woff2" crossorigin href="_static/vendor/fontawesome/6.1.2/webfonts/fa-solid-900.woff2" />
<link rel="preload" as="font" type="font/woff2" crossorigin href="_static/vendor/fontawesome/6.1.2/webfonts/fa-brands-400.woff2" />
<link rel="preload" as="font" type="font/woff2" crossorigin href="_static/vendor/fontawesome/6.1.2/webfonts/fa-regular-400.woff2" />

    <link rel="stylesheet" type="text/css" href="_static/pygments.css" />
    <link rel="stylesheet" href="_static/styles/sphinx-book-theme.css?digest=14f4ca6b54d191a8c7657f6c759bf11a5fb86285" type="text/css" />
    <link rel="stylesheet" type="text/css" href="_static/togglebutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/copybutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/mystnb.4510f1fc1dee50b3e5859aac5469c37c29e427902b24a333a5f9fcb2f0b3ac41.css" />
    <link rel="stylesheet" type="text/css" href="_static/sphinx-thebe.css" />
    <link rel="stylesheet" type="text/css" href="_static/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="_static/design-style.4045f2051d55cab465a707391d5b2007.min.css" />
  
  <!-- Pre-loaded scripts that we'll load fully later -->
  <link rel="preload" as="script" href="_static/scripts/bootstrap.js?digest=12da95d707ffb74b382d" />
<link rel="preload" as="script" href="_static/scripts/pydata-sphinx-theme.js?digest=12da95d707ffb74b382d" />

    <script data-url_root="./" id="documentation_options" src="_static/documentation_options.js"></script>
    <script src="_static/jquery.js"></script>
    <script src="_static/underscore.js"></script>
    <script src="_static/doctools.js"></script>
    <script src="_static/clipboard.min.js"></script>
    <script src="_static/copybutton.js"></script>
    <script src="_static/scripts/sphinx-book-theme.js?digest=5a5c038af52cf7bc1a1ec88eea08e6366ee68824"></script>
    <script>let toggleHintShow = 'Click to show';</script>
    <script>let toggleHintHide = 'Click to hide';</script>
    <script>let toggleOpenOnPrint = 'true';</script>
    <script src="_static/togglebutton.js"></script>
    <script>var togglebuttonSelector = '.toggle, .admonition.dropdown';</script>
    <script src="_static/design-tabs.js"></script>
    <script>const THEBE_JS_URL = "https://unpkg.com/thebe@0.8.2/lib/index.js"
const thebe_selector = ".thebe,.cell"
const thebe_selector_input = "pre"
const thebe_selector_output = ".output, .cell_output"
</script>
    <script async="async" src="_static/sphinx-thebe.js"></script>
    <script>DOCUMENTATION_OPTIONS.pagename = 'index';</script>
    <link rel="canonical" href="https://kineticstoolkit.uqam.ca/doc/index.html" />
    <link rel="shortcut icon" href="_static/favicon.ico"/>
    <link rel="index" title="Index" href="genindex.html" />
    <link rel="search" title="Search" href="search.html" />
    <link rel="next" title="📘 Manual" href="ktk_manual.html" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="docsearch:language" content="None"/>
  </head>
  
  
  <body data-bs-spy="scroll" data-bs-target=".bd-toc-nav" data-offset="180" data-bs-root-margin="0px 0px -60%" data-default-mode="">

  
  
  <a class="skip-link" href="#main-content">Skip to main content</a>
  
  <input type="checkbox"
          class="sidebar-toggle"
          name="__primary"
          id="__primary"/>
  <label class="overlay overlay-primary" for="__primary"></label>
  
  <input type="checkbox"
          class="sidebar-toggle"
          name="__secondary"
          id="__secondary"/>
  <label class="overlay overlay-secondary" for="__secondary"></label>
  
  <div class="search-button__wrapper">
    <div class="search-button__overlay"></div>
    <div class="search-button__search-container">
<form class="bd-search d-flex align-items-center"
      action="search.html"
      method="get">
  <i class="fa-solid fa-magnifying-glass"></i>
  <input type="search"
         class="form-control"
         name="q"
         id="search-input"
         placeholder="Search..."
         aria-label="Search..."
         autocomplete="off"
         autocorrect="off"
         autocapitalize="off"
         spellcheck="false"/>
  <span class="search-button__kbd-shortcut"><kbd class="kbd-shortcut__modifier">Ctrl</kbd>+<kbd>K</kbd></span>
</form></div>
  </div>
  
    <nav class="bd-header navbar navbar-expand-lg bd-navbar">
    </nav>
  
  <div class="bd-container">
    <div class="bd-container__inner bd-page-width">
      
      <div class="bd-sidebar-primary bd-sidebar">
        

  
  <div class="sidebar-header-items sidebar-primary__section">
    
    
    
    
  </div>
  
    <div class="sidebar-primary-items__start sidebar-primary__section">
        <div class="sidebar-primary-item">
  

<a class="navbar-brand logo" href="#">
  
  
  
  
    
    
      
    
    
    <img src="_static/logo.png" class="logo__image only-light" alt="Logo image"/>
    <script>document.write(`<img src="_static/logo.png" class="logo__image only-dark" alt="Logo image"/>`);</script>
  
  
</a></div>
        <div class="sidebar-primary-item"><nav class="bd-links" id="bd-docs-nav" aria-label="Main">
    <div class="bd-toc-item navbar-nav active">
        <ul class="nav bd-sidenav">
<li class="toctree-l1 has-children"><a class="reference internal" href="ktk_manual.html">📘 Manual</a><input class="toctree-checkbox" id="toctree-checkbox-1" name="toctree-checkbox-1" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-1"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="ktk_overview.html">📖 An overview of Kinetics Toolkit</a></li>
<li class="toctree-l2"><a class="reference internal" href="ktk_installing.html">📖 Installing and importing</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="timeseries.html">📖 TimeSeries</a><input class="toctree-checkbox" id="toctree-checkbox-2" name="toctree-checkbox-2" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-2"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="timeseries_basics.html">📖 TimeSeries basics</a></li>
<li class="toctree-l3"><a class="reference internal" href="timeseries_manipulating.html">📖 Manipulating TimeSeries</a></li>
<li class="toctree-l3"><a class="reference internal" href="timeseries_dataframes.html">📖 Converting between TimeSeries and pandas DataFrames</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="loadsave.html">📖 Saving and loading</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="filters.html">📖 Filtering</a><input class="toctree-checkbox" id="toctree-checkbox-3" name="toctree-checkbox-3" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-3"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="filters_butter.html">📖 Butterworth filter</a></li>
<li class="toctree-l3"><a class="reference internal" href="filters_smooth_savgol.html">📖 Moving average and Savitsky-Golay</a></li>
<li class="toctree-l3"><a class="reference internal" href="filters_median.html">📖 Removing artefacts using a median filter</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="cycles.html">📖 Working with cycles</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="geometry.html">📖 3D rigid body geometry</a><input class="toctree-checkbox" id="toctree-checkbox-4" name="toctree-checkbox-4" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-4"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="geometry_basics.html">📖 Coordinates: points, vectors and frames</a></li>
<li class="toctree-l3"><a class="reference internal" href="geometry_transform_moving_coordinates.html">📖 The homogeneous transform: rotating and translating coordinates</a></li>
<li class="toctree-l3"><a class="reference internal" href="geometry_transform_changing_coordinate_system.html">📖 The homogeneous transform: mapping coordinates to other coordinate systems</a></li>
<li class="toctree-l3"><a class="reference internal" href="geometry_kinematic_chains.html">📖 Kinematic chains</a></li>
<li class="toctree-l3"><a class="reference internal" href="geometry_angles.html">📖 Extracting angles</a></li>
<li class="toctree-l3"><a class="reference internal" href="geometry_dimension_conventions.html">📖 Dimension conventions</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="kinematics.html">📖 Kinematics analysis</a><input class="toctree-checkbox" id="toctree-checkbox-5" name="toctree-checkbox-5" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-5"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="kinematics_load_visualize.html">📖 Reading and visualizing markers in 3D</a></li>
<li class="toctree-l3"><a class="reference internal" href="kinematics_joint_angles.html">📖 Calculating joint angles from a kinematic acquisition</a></li>
<li class="toctree-l3"><a class="reference internal" href="kinematics_reconstructing_occluded_markers.html">📖 Reconstructing occluded markers</a></li>
<li class="toctree-l3"><a class="reference internal" href="kinematics_reconstructing_removed_markers.html">📖 Reconstructing removed markers</a></li>
<li class="toctree-l3"><a class="reference internal" href="kinematics_reconstructing_probed_points.html">📖 Reconstructing probed points</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="extensions.html">📖 Extensions</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="api_reference.html">📘 API Reference</a><input class="toctree-checkbox" id="toctree-checkbox-6" name="toctree-checkbox-6" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-6"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="ktk_conventions.html">📖 Conventions</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="api_classes.html">📖 Classes</a><input class="toctree-checkbox" id="toctree-checkbox-7" name="toctree-checkbox-7" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-7"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.TimeSeries.html">ktk.TimeSeries</a><input class="toctree-checkbox" id="toctree-checkbox-8" name="toctree-checkbox-8" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-8"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.add_data_info.html">ktk.TimeSeries.add_data_info</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.add_event.html">ktk.TimeSeries.add_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.copy.html">ktk.TimeSeries.copy</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.count_events.html">ktk.TimeSeries.count_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.fill_missing_samples.html">ktk.TimeSeries.fill_missing_samples</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.from_dataframe.html">ktk.TimeSeries.from_dataframe</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_event_index.html">ktk.TimeSeries.get_event_index</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_event_time.html">ktk.TimeSeries.get_event_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_index_after_time.html">ktk.TimeSeries.get_index_after_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_index_at_time.html">ktk.TimeSeries.get_index_at_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_index_before_time.html">ktk.TimeSeries.get_index_before_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_sample_rate.html">ktk.TimeSeries.get_sample_rate</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_subset.html">ktk.TimeSeries.get_subset</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_after_event.html">ktk.TimeSeries.get_ts_after_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_after_index.html">ktk.TimeSeries.get_ts_after_index</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_after_time.html">ktk.TimeSeries.get_ts_after_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_at_event.html">ktk.TimeSeries.get_ts_at_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_at_time.html">ktk.TimeSeries.get_ts_at_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_before_event.html">ktk.TimeSeries.get_ts_before_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_before_index.html">ktk.TimeSeries.get_ts_before_index</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_before_time.html">ktk.TimeSeries.get_ts_before_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_between_events.html">ktk.TimeSeries.get_ts_between_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_between_indexes.html">ktk.TimeSeries.get_ts_between_indexes</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_between_times.html">ktk.TimeSeries.get_ts_between_times</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.isnan.html">ktk.TimeSeries.isnan</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.merge.html">ktk.TimeSeries.merge</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.plot.html">ktk.TimeSeries.plot</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_data.html">ktk.TimeSeries.remove_data</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_data_info.html">ktk.TimeSeries.remove_data_info</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_duplicate_events.html">ktk.TimeSeries.remove_duplicate_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_event.html">ktk.TimeSeries.remove_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.rename_data.html">ktk.TimeSeries.rename_data</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.rename_event.html">ktk.TimeSeries.rename_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.resample.html">ktk.TimeSeries.resample</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.shift.html">ktk.TimeSeries.shift</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.sort_events.html">ktk.TimeSeries.sort_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.sync_event.html">ktk.TimeSeries.sync_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.to_dataframe.html">ktk.TimeSeries.to_dataframe</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.trim_events.html">ktk.TimeSeries.trim_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.ui_edit_events.html">ktk.TimeSeries.ui_edit_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.ui_get_ts_between_clicks.html">ktk.TimeSeries.ui_get_ts_between_clicks</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.ui_sync.html">ktk.TimeSeries.ui_sync</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.TimeSeriesEvent.html">ktk.TimeSeriesEvent</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.Player.html">ktk.Player</a><input class="toctree-checkbox" id="toctree-checkbox-9" name="toctree-checkbox-9" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-9"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.Player.close.html">ktk.Player.close</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.Player.to_html5.html">ktk.Player.to_html5</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="api_functions.html">📖 Functions</a><input class="toctree-checkbox" id="toctree-checkbox-10" name="toctree-checkbox-10" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-10"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.import_extensions.html">ktk.import_extensions</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.load.html">ktk.load</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.save.html">ktk.save</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.read_c3d.html">ktk.read_c3d</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.write_c3d.html">ktk.write_c3d</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.change_defaults.html">ktk.change_defaults</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="api_modules.html">📖 Modules</a><input class="toctree-checkbox" id="toctree-checkbox-11" name="toctree-checkbox-11" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-11"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.cycles.html">ktk.cycles</a><input class="toctree-checkbox" id="toctree-checkbox-12" name="toctree-checkbox-12" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-12"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.detect_cycles.html">ktk.cycles.detect_cycles</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.most_repeatable_cycles.html">ktk.cycles.most_repeatable_cycles</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.stack.html">ktk.cycles.stack</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.time_normalize.html">ktk.cycles.time_normalize</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.unstack.html">ktk.cycles.unstack</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.doc.html">ktk.doc</a><input class="toctree-checkbox" id="toctree-checkbox-13" name="toctree-checkbox-13" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-13"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.doc.download.html">ktk.doc.download</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.filters.html">ktk.filters</a><input class="toctree-checkbox" id="toctree-checkbox-14" name="toctree-checkbox-14" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-14"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.butter.html">ktk.filters.butter</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.deriv.html">ktk.filters.deriv</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.median.html">ktk.filters.median</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.savgol.html">ktk.filters.savgol</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.smooth.html">ktk.filters.smooth</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.geometry.html">ktk.geometry</a><input class="toctree-checkbox" id="toctree-checkbox-15" name="toctree-checkbox-15" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-15"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.create_frames.html">ktk.geometry.create_frames</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.create_transforms.html">ktk.geometry.create_transforms</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.get_angles.html">ktk.geometry.get_angles</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.get_global_coordinates.html">ktk.geometry.get_global_coordinates</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.get_local_coordinates.html">ktk.geometry.get_local_coordinates</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.isnan.html">ktk.geometry.isnan</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.matmul.html">ktk.geometry.matmul</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.register_points.html">ktk.geometry.register_points</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.kinematics.html">ktk.kinematics</a><input class="toctree-checkbox" id="toctree-checkbox-16" name="toctree-checkbox-16" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-16"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.kinematics.create_cluster.html">ktk.kinematics.create_cluster</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.kinematics.extend_cluster.html">ktk.kinematics.extend_cluster</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.kinematics.track_cluster.html">ktk.kinematics.track_cluster</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="dev_extensions.html">📖 Developing extensions</a></li>
<li class="toctree-l2"><a class="reference internal" href="ktk_release_notes.html">🗓 Release Notes</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="dev_contributing.html">👋 How to contribute</a><input class="toctree-checkbox" id="toctree-checkbox-17" name="toctree-checkbox-17" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-17"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="ktk_citing.html">📄 Citing</a></li>
<li class="toctree-l2"><a class="reference internal" href="dev_rules.html">📖 Development rules</a></li>
<li class="toctree-l2"><a class="reference internal" href="dev_code_of_conduct.html">📖 Code of conduct</a></li>
<li class="toctree-l2"><a class="reference internal" href="dev_installing_from_github.html">📖 Installing from GitHub</a></li>
<li class="toctree-l2"><a class="reference internal" href="dev_coding_style.html">📖 Coding style</a></li>
<li class="toctree-l2"><a class="reference external" href="https://github.com/felixchenier/kineticstoolkit">🌎 GitHub repository</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="python_for_beginners.html">📘 Learning Python for biomechanics</a><input class="toctree-checkbox" id="toctree-checkbox-18" name="toctree-checkbox-18" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-18"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_getting_started.html">📖 Getting started with Python</a><input class="toctree-checkbox" id="toctree-checkbox-19" name="toctree-checkbox-19" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-19"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="python_installing.html">📖 Installing Python, Spyder and the most important scientific packages</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_configuring_spyder.html">📖 Configuring Spyder for Python biomechanics</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_using_spyder.html">📖 Using Spyder</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python.html">📖 The Python language</a><input class="toctree-checkbox" id="toctree-checkbox-20" name="toctree-checkbox-20" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-20"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="python_arithmetics_and_variables.html">📖 Arithmetics and variables</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_numbers.html">📖 Numbers</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_strings.html">📖 Strings basics</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_functions.html">📖 Functions</a><input class="toctree-checkbox" id="toctree-checkbox-21" name="toctree-checkbox-21" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-21"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_functions_syntax.html">📖 Function syntax</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_functions_docstrings.html">📖 Docstrings</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_functions_keywords_defaults.html">📖 Keyword arguments and default values</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="python_conditions.html">📖 Conditions and booleans</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_lists.html">📖 Lists and tuples</a><input class="toctree-checkbox" id="toctree-checkbox-22" name="toctree-checkbox-22" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-22"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_lists_indexing.html">📖 Creating and indexing lists/tuples</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_lists_slicing.html">📖 Slicing lists</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_lists_mutability.html">📖 Manipulating lists</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_looping.html">📖 Looping</a><input class="toctree-checkbox" id="toctree-checkbox-23" name="toctree-checkbox-23" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-23"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_while.html">📖 Looping using <code class="docutils literal notranslate"><span class="pre">while</span></code></a></li>
<li class="toctree-l4"><a class="reference internal" href="python_for_range.html">📖 Looping using <code class="docutils literal notranslate"><span class="pre">for</span></code> and <code class="docutils literal notranslate"><span class="pre">range</span></code></a></li>
<li class="toctree-l4"><a class="reference internal" href="python_for_enumerate.html">📖 Looping though a list using <code class="docutils literal notranslate"><span class="pre">enumerate</span></code></a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="python_dicts.html">📖 Dictionaries</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_integration_exercises.html">📖 Integration exercises</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="matplotlib.html">📖 Matplotlib</a><input class="toctree-checkbox" id="toctree-checkbox-24" name="toctree-checkbox-24" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-24"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_import.html">📖 Importing <code class="docutils literal notranslate"><span class="pre">pyplot</span></code></a></li>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_frontend.html">📖 Non-blocking, interactive Matplotlib figures</a></li>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_plot.html">📖 Line plots</a></li>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_subplot.html">📖 Multiple plots side by side</a></li>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_style.html">📖 Markers, line style and colours</a></li>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_axis.html">📖 Setting the axes limits</a></li>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_ginput.html">📖 Graphical input</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy.html">📖 NumPy</a><input class="toctree-checkbox" id="toctree-checkbox-25" name="toctree-checkbox-25" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-25"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_ndarray.html">📖 Arrays</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_arithmetics_and_comparisons.html">📖 Arithmetics and comparisons</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_indexing_slicing_filtering_1d.html">📖 Indexing, slicing and filtering unidimensional arrays</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_indexing_slicing_filtering_nd.html">📖 Indexing, slicing and filtering multidimensional arrays</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="pandas.html">🚧 Pandas</a></li>
</ul>
</li>
</ul>

    </div>
</nav></div>
    </div>
  
  
  <div class="sidebar-primary-items__end sidebar-primary__section">
  </div>
  
  <div id="rtd-footer-container"></div>


      </div>
      
      <main id="main-content" class="bd-main">
        
        

<div class="sbt-scroll-pixel-helper"></div>

          <div class="bd-content">
            <div class="bd-article-container">
              
              <div class="bd-header-article">
<div class="header-article-items header-article__inner">
  
    <div class="header-article-items__start">
      
        <div class="header-article-item"><label class="sidebar-toggle primary-toggle btn btn-sm" for="__primary" title="Toggle primary sidebar" data-bs-placement="bottom" data-bs-toggle="tooltip">
  <span class="fa-solid fa-bars"></span>
</label></div>
      
    </div>
  
  
    <div class="header-article-items__end">
      
        <div class="header-article-item">

<div class="article-header-buttons">





<div class="dropdown dropdown-download-buttons">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Download this page">
    <i class="fas fa-download"></i>
  </button>
  <ul class="dropdown-menu">
      
      
      
      <li><a href="_sources/index.md" target="_blank"
   class="btn btn-sm btn-download-source-button dropdown-item"
   title="Download source file"
   data-bs-placement="left" data-bs-toggle="tooltip"
>
  

<span class="btn__icon-container">
  <i class="fas fa-file"></i>
  </span>
<span class="btn__text-container">.md</span>
</a>
</li>
      
      
      
      
      <li>
<button onclick="window.print()"
  class="btn btn-sm btn-download-pdf-button dropdown-item"
  title="Print to PDF"
  data-bs-placement="left" data-bs-toggle="tooltip"
>
  

<span class="btn__icon-container">
  <i class="fas fa-file-pdf"></i>
  </span>
<span class="btn__text-container">.pdf</span>
</button>
</li>
      
  </ul>
</div>




<button onclick="toggleFullScreen()"
  class="btn btn-sm btn-fullscreen-button"
  title="Fullscreen mode"
  data-bs-placement="bottom" data-bs-toggle="tooltip"
>
  

<span class="btn__icon-container">
  <i class="fas fa-expand"></i>
  </span>

</button>


<script>
document.write(`
  <button class="theme-switch-button btn btn-sm btn-outline-primary navbar-btn rounded-circle" title="light/dark" aria-label="light/dark" data-bs-placement="bottom" data-bs-toggle="tooltip">
    <span class="theme-switch" data-mode="light"><i class="fa-solid fa-sun"></i></span>
    <span class="theme-switch" data-mode="dark"><i class="fa-solid fa-moon"></i></span>
    <span class="theme-switch" data-mode="auto"><i class="fa-solid fa-circle-half-stroke"></i></span>
  </button>
`);
</script>

<script>
document.write(`
  <button class="btn btn-sm navbar-btn search-button search-button__button" title="Search" aria-label="Search" data-bs-placement="bottom" data-bs-toggle="tooltip">
    <i class="fa-solid fa-magnifying-glass"></i>
  </button>
`);
</script>

</div></div>
      
    </div>
  
</div>
</div>
              
              

<div id="jb-print-docs-body" class="onlyprint">
    <h1>Kinetics Toolkit</h1>
    <!-- Table of contents -->
    <div id="print-main-content">
        <div id="jb-print-toc">
            
        </div>
    </div>
</div>

              
                
<div id="searchbox"></div>
                <article class="bd-article" role="main">
                  
  <aside class="margin sidebar">
<p class="sidebar-title"></p>
<div style="max-height:900px">
<h3>
<a href="https://github.com/felixchenier/kineticstoolkit/discussions">Announcements <img src="_static/images/github-logo.png" alt="Follow on GitHub" width="20px"></a>
<a href="https://github.com/felixchenier/kineticstoolkit/discussions/categories/announcements.atom"><img src="_static/images/rss-icon.png" alt="Subscribe to RSS/Atom Feed" width="20px"></a>
<a href="https://twitter.com/KineticsToolkit"><img src="_static/images/twitter-logo.png" alt="Follow on Twitter" width="20px"></a>
</h3>
<?php include("/home/kinetics/public_html/rss/rss.php");?>
</div>
<link rel="alternate" type="application/rss+html" title="Subscribe to Kinetics Toolkit Announcements" href="https://github.com/felixchenier/kineticstoolkit/discussions/categories/announcements.atom" />
</aside>
<section class="tex2jax_ignore mathjax_ignore" id="kinetics-toolkit">
<h1>Kinetics Toolkit<a class="headerlink" href="#kinetics-toolkit" title="Permalink to this headline">#</a></h1>
<ul class="simple">
<li><p><strong>is an online resource for students and researchers</strong> to learn about 3D biomechanical data processing using Python;</p></li>
<li><p><strong>is an open-source Python package</strong> that does (only) the heavy lifting of this processing, so users stay in control of their data.</p></li>
</ul>
<div align="center">
<a href="https://doi.org/10.21105/joss.03714"><img src="https://joss.theoj.org/papers/10.21105/joss.03714/status.svg" alt="JOSS"></a>
<a href="https://anaconda.org/conda-forge/kineticstoolkit"><img src="https://anaconda.org/conda-forge/kineticstoolkit/badges/version.svg" alt="Anaconda"></a>
<a href="https://anaconda.org/conda-forge/kineticstoolkit"><img src="https://anaconda.org/conda-forge/kineticstoolkit/badges/latest_release_date.svg" alt="Latest release"></a>
</div>
<p></p>
<p><a class="reference internal" href="kinematics_load_visualize.html"><span class="doc std std-doc"><img alt="example_code" src="_images/index_example.png" /></span></a></p>
<p><a class="reference internal" href="kinematics_load_visualize.html"><span class="doc std std-doc"><img alt="example_result" src="_images/frontpage.gif" /></span></a></p>
<p><a class="reference external" href="https://github.com/felixchenier/kineticstoolkit/discussions">Questions, suggestions, discussions and collaborations</a> are highly welcome. Please see the numerous ways you can <a class="reference internal" href="dev_contributing.html"><span class="doc std std-doc">contribute</span></a> to this project.</p>
<hr class="docutils" />
<div align="center">
<a href="https://felixchenier.uqam.ca"><img alt="-width:narrow" src="_static/images/logo_mosa.png"></a>
&nbsp;&nbsp;&nbsp;<a href="https://uqam.ca"><img alt="-width:narrower" src="_static/images/logo_uqam.png"></a>
&nbsp;&nbsp;&nbsp;<a href="https://crir.ca"><img alt="-width:narrower" src="_static/images/logo_crir.jpg"></a>
</div>
<div class="toctree-wrapper compound">
</div>
</section>

    <script type="text/x-thebe-config">
    {
        requestKernel: true,
        binderOptions: {
            repo: "binder-examples/jupyter-stacks-datascience",
            ref: "master",
        },
        codeMirrorConfig: {
            theme: "abcdef",
            mode: "python"
        },
        kernelOptions: {
            name: "python3",
            path: "./."
        },
        predefinedOutput: true
    }
    </script>
    <script>kernelName = 'python3'</script>

                </article>
              

              
              
                <footer class="bd-footer-article">
                  <!-- Previous / next buttons -->
<div class="prev-next-area">
    <a class="right-next"
       href="ktk_manual.html"
       title="next page">
      <div class="prev-next-info">
        <p class="prev-next-subtitle">next</p>
        <p class="prev-next-title">📘 Manual</p>
      </div>
      <i class="fa-solid fa-angle-right"></i>
    </a>
</div>
                </footer>
              
            </div>
            
            
              
            
          </div>
          <footer class="bd-footer-content">
            <div class="bd-footer-content__inner">
<div class="bd-footer-content__inner container">
  
  <div class="footer-item">
    
<p class="component-author">
By Félix Chénier
</p>

  </div>
  
  <div class="footer-item">
    
  <p class="copyright">
    
      © Copyright 2020-2023.
      <br/>
    
  </p>

  </div>
  
  <div class="footer-item">
    
  </div>
  
  <div class="footer-item">
    
<div class="extra_footer">
  This website is built using <a href='https://jupyterbook.org'>jupyter-book</a>.
</div>
  </div>
  
</div></div>
          </footer>
        

      </main>
    </div>
  </div>
  
  <!-- Scripts loaded after <body> so the DOM is not blocked -->
  <script src="_static/scripts/bootstrap.js?digest=12da95d707ffb74b382d"></script>
<script src="_static/scripts/pydata-sphinx-theme.js?digest=12da95d707ffb74b382d"></script>

  <footer class="bd-footer">
  </footer>
  </body>
</html>