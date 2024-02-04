**Installation and Setup of Smarty:**

To use Smarty in your project, you need to install it and set up the basic project structure. Follow the steps below:

### Step 1: Install Smarty

You can install Smarty using Composer, a dependency manager for PHP projects. If you don't have Composer installed, download and install it from [getcomposer.org](https://getcomposer.org/).

Open a terminal and navigate to your project directory. Run the following command to install Smarty:

```bash
composer require smarty/smarty
```

This command installs Smarty and its dependencies in your project.

### Step 2: Set Up Project Structure

After installing Smarty, you need to set up the basic project structure. Create directories for templates, compiled templates, and cache. Here's a simple project structure:

```
project/
│
├── templates/
│   └── index.tpl
│
├── compiled_templates/
│
├── cache/
│
└── vendor/
    └── ...
```

- **templates/:** This directory will contain your Smarty templates (e.g., `index.tpl`).
- **compiled_templates/:** Smarty will store compiled PHP versions of your templates here.
- **cache/:** Smarty will store cached copies of templates here for performance.

### Step 3: Create a Sample Template

Create a file named `index.tpl` inside the `templates/` directory. This will be a simple Smarty template:

```smarty
<!-- templates/index.tpl -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$pageTitle}</title>
</head>
<body>
    <h1>Hello, {$name}!</h1>
</body>
</html>
```

### Step 4: Create an Example PHP File

Create an example PHP file that initializes Smarty, assigns values to Smarty variables, and displays the template:

```php
<?php
// index.php

require 'vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('compiled_templates/');
$smarty->setCacheDir('cache/');

// Assign variables to be used in the template
$smarty->assign('pageTitle', 'Smarty Example');
$smarty->assign('name', 'John Doe');

// Display the template
$smarty->display('index.tpl');
```

### Step 5: Run the Example

Run the PHP file (`index.php`) in your browser or using the command line. You should see the rendered HTML page with the dynamic content.

```bash
php index.php
```
