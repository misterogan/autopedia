## Add Custom/ External JS

-   attach file inside folder `public/js`
-   import script file inside folder `views/frontend/layouts/app.blade.php`
    ```html
    <script defer src="{{asset('js/step-handler.js')}}"></script>
    <script defer src="{{asset('js/chart-saham.js')}}"></script>
    ```

## Add Custom SCSS for specific file

-   create `yourCssName.scss` inside folder `resorces/sass` and run script `npm run watch`
-   import CSS bundle public directory into folder `views/frontend/pages/partials/head.blade.php`

```html
<!-- Styles -->
<link rel="stylesheet" href="{!! mix('/css/main.css') !!}" />

<link rel="stylesheet" href="{!! mix('/css/karir.css') !!}" />
<link rel="stylesheet" href="{!! mix('/css/saham.css') !!}" />
```

-   import SCSS files inside `webpack.mix.js`

```javascript

// karir scss
    .sass("resources/sass/karir.scss", "css")
    .options({
        processCssUrls: false,
    })

    // saham scss
    .sass("resources/sass/saham.scss", "css")
    .options({
        processCssUrls: false,
    });
```
