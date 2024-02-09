# pith-pack-aero-gel
Pack Aero-Gel for Pith

-------

# About

This project packs aero-gel.css so that it can be used with the Pith Framewok.

For info on aero-gel, see repo at https://github.com/ian-maurmann/aero-gel-css

For info on Pith, see the Pith website at https://pith-framework.org/

# Install

Install to an existing Pith Framework project

Use Composer to install pack to the `vendor` folder.
```bash
php composer.phar require pith-front/pith-pack-aero-gel
```

Add new route to your Route List:

```php
public array $routes = [
    // Other routes....
    // ...
    
    // Add route to call aero-gel from
    ['route', 'GET', '/resources/vendor/library/aero-gel/{filepath:.+}', '\\PithFront\\PithPackAeroGel\\AeroGelResourceRoute'],
];
```

-------------


# Licensing Info

### Aero, Approximately
- Aero-gel is heavily based on "Aero, Approximately" by Chris Price
- Link: https://codepen.io/studiochris/pen/NZYzWq
- (Public Pens on CodePen are MIT Licensed. See: https://blog.codepen.io/documentation/licensing/ )

### Aero-Gel CSS
- aero-gel.css by Ian Maurmann
- Link: https://github.com/ian-maurmann/aero-gel-css
- MIT license *(Matching the license of "Aero, Approximately")*

### pith-pack-aero-gel
- pith-pack-aero-gel
- MIT license *(Matching the license of Aero-Gel CSS)*
- Copyright (c) Ian Maurmann
- Link: https://github.com/pith-front/pith-pack-aero-gel