# TODO

## .wp-env.json

1. default username, password, url, title

```json
{
  "core": "WordPress/WordPress:6.8.1",
  "phpVersion": "8.4.7",
  "themes": [ "./" ]
}
```

## wp-create-block

```txt
  -V, --version                output the version number
  -t, --template <name>        project template type name; allowed values: "standard", "es5", the name of an
                               external npm package, or the path to a local directory (default: "standard")
  --variant <variant>          the variant of the template to use
  --no-plugin                  scaffold only block files
  --target-dir <directory>     the directory where the files will be scaffolded, defaults to the slug
  --namespace <value>          internal namespace for the block name
  --title <value>              display title for the block and the WordPress plugin
  --short-description <value>  short description for the block and the WordPress plugin
  --category <name>            category name for the block
  --wp-scripts                 enable integration with `@wordpress/scripts` package
  --no-wp-scripts              disable integration with `@wordpress/scripts` package
  --wp-env                     enable integration with `@wordpress/env` package
  --textdomain <value>         text domain for internationalization
  -h, --help                   display help for command
```

## TODOs

1. format
2. lint
3. autoprefixer, postcss, sass
4. wp core install url
5. wp core install language
