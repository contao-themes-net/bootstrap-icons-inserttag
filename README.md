# Bootstrap Icons Inserttag Bundle

This extension provide one insert tag for creating [Bootsrap Icons](https://icons.getbootstrap.com/ "Bootstrap Icons") in Contao CMS. 

## Insert Tag

Use the ``bi`` prefix for the insert tag. Replace the name after ``::`` with the bootstrap icon name, e.g. check.

    {{bi::check}}

You can change the size of the icon if you insert the classes after the second ``::``. Possible classes are: ``fs-1`` to ``fs-6``.

    {{bi::check::fs-2}}
    
You can define more classes, e.g. for font and background color. For the color classes you must include the [Bootstrap 5 Framework](https://getbootstrap.com/ "Bootstrap 5 Framework").  [Here](https://getbootstrap.com/docs/5.1/customize/color/#theme-colors "Bootstrap Theme Colors") you can find all bootstrap colors.

    {{bi::check::fs-2 text-success bg-warning}}
