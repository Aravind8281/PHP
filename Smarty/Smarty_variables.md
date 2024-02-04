### 1. Variables:

In Smarty, variables are enclosed in curly braces. For example:

```smarty
{$variable}
```

**Example:**
```smarty
{$name}
```

### 2. Outputting Variables:

To output the value of a variable, you can use the `{$variable}` syntax:

```smarty
Hello, {$name}!
```

### 3. Comments:

Smarty supports comments using the `{* ... *}` syntax:

```smarty
{* This is a comment *}
```

### 4. Loops:

Smarty provides `{foreach}` for iterating over arrays or objects:

```smarty
{foreach $users as $user}
    Name: {$user.name}<br>
    Email: {$user.email}<br>
{/foreach}
```

### 5. Conditionals:

Smarty supports `{if}`, `{elseif}`, `{else}`, and `{/if}` for conditional statements:

```smarty
{if $age < 18}
    You are a minor.
{elseif $age >= 18 and $age < 65}
    You are an adult.
{else}
    You are a senior citizen.
{/if}
```

### 6. Assigning Variables:

You can assign values to variables using the `{assign}` tag:

```smarty
{assign var="message" value="Hello, Smarty!"}
{$message}
```

### 7. Including Templates:

Smarty allows you to include other templates using the `{include}` tag:

```smarty
{include file="header.tpl"}
```

### 8. Modifiers:

Modifiers can be applied to variables using the `|` (pipe) symbol:

```smarty
{$title|capitalize}
```

### 9. Block Functions:

Smarty supports block functions for more advanced template manipulation:

```smarty
{block name="content"}{/block}
```

### 10. Template Inheritance:

Smarty allows template inheritance using the `{extends}` and `{block}` tags:

**Base Template:**
```smarty
<html>
<head>
    <title>{block name="title"}Default Title{/block}</title>
</head>
<body>
    {block name="content"}Default Content{/block}
</body>
</html>
```

**Child Template:**
```smarty
{extends file="base.tpl"}

{block name="title"}My Page{/block}

{block name="content"}
    <h1>Welcome to my page!</h1>
{/block}
```
