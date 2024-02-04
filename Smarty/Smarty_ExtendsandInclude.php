### Definition:

- **Include:**
  - `{include}` is a Smarty tag used to include the content of one template within another template. It allows you to break down complex templates into smaller, reusable components.

- **Extend:**
  - `{extends}` is used for template inheritance. It enables the creation of a base template that can be extended by child templates. Child templates inherit the structure of the base template and can override specific blocks or sections.

### Code Example:

#### Include:

Consider you have a file named `header.tpl`:

```smarty
<!-- header.tpl -->
<!DOCTYPE html>
<html>
<head>
    <title>{$pageTitle}</title>
</head>
<body>
    <header>
        <h1>{$headerTitle}</h1>
    </header>
```

And a file named `content.tpl`:

```smarty
<!-- content.tpl -->
<section>
    <h2>{$contentTitle}</h2>
    <p>{$contentText}</p>
</section>
```

You can include these templates in a main file like this:

```smarty
<!-- main.tpl -->
{include file="header.tpl"}

{include file="content.tpl"}

</body>
</html>
```

In this example, the content of `header.tpl` and `content.tpl` is included in `main.tpl`.

#### Extend:

Consider a base template named `base.tpl`:

```smarty
<!-- base.tpl -->
<!DOCTYPE html>
<html>
<head>
    <title>{block name="title"}Default Title{/block}</title>
</head>
<body>
    <header>
        <h1>{block name="header"}Default Header{/block}</h1>
    </header>
    <main>
        {block name="content"}Default Content{/block}
    </main>
</body>
</html>
```

A child template can extend and override specific blocks:

```smarty
<!-- child.tpl -->
{extends file="base.tpl"}

{block name="title"}Child Title{/block}

{block name="header"}Child Header{/block}

{block name="content"}
    <p>This is the content of the child template.</p>
{/block}
```

In this example, `child.tpl` extends `base.tpl` and overrides the title, header, and content blocks.

### Use Case:

- **Include:**
  - Use `{include}` when you want to reuse parts of your templates across multiple pages, such as headers, footers, or sidebars.

- **Extend:**
  - Use `{extends}` when you want to create a consistent layout across multiple pages, but each page may have some unique content. Child templates can provide specific content while inheriting the overall structure from a base template.

Example Use Case:
- `{include}`: Include a common navigation bar on multiple pages.
- `{extends}`: Create a standard layout for product pages, with individual pages extending the base layout to include unique product details.

These features enhance code organization, maintainability, and the reusability of templates in Smarty.
