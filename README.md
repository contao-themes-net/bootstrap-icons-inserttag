# Bootstrap Icons Inserttag Bundle

Dieses Bundle installiert ein InserTag, mit dessen Hilfe Bootstrap Icons (v1.9.1) als Font oder via SVG in Contao genutzt werden können.

### Allgemeine Form des Tags

Das Tag beginnt mit dem Prefix ```&nbsp;bi ```&nbsp;und ihm folgen **drei weitere** Parameter. Parameter 1 und 2 sind
erforderlich, Parameter 3 und 4 sind optional und können auch weggelassen werden. Das Tag besteht also insgesamt aus
4 Parametern. Die allgemeine Form sieht so aus:

    {{bi::name::classes::styles}}

### Der erste Parameter &raquo;bi&laquo;
...ist konstant und kennzeichnet das Tag.

### Der zweite Parameter &raquo;name&laquo;
...muss durch den Namen des Icons ersetzt werden. Dabei sollte der Name des Icons verwendet werden, wie er auf
der Seite **Bootstrap Icons** angegeben ist: https://icons.getbootstrap.com - also ohne Prefix ```bi-```!

**Beispiel:**

    {{bi::check}}

Als Ergebnis sollte dieses Zeichen zu sehen sein:
![check.svg](src/Resources/public/img/bootstrap/check.svg)

### Der dritte Parameter &raquo;classes&laquo;
...**kann** (ist optional) eine oder mehrere CSS-Klassen-Namen enthalten. Für das Bereitstellen der Klasse müssen die Administratorinnen und
Administratoren selbst Sorge tragen. Mehrere Klassen-Namen können wie im class-Attribute eines HTML-Tags notiert werden - also auch durch
Leerzeichen getrennt.

**Beispiel:**

    {{bi::check::class1 class2 class3}}

Das Ergebnis könnte - je nach Definition der Klassen - so aussehen:

<img src='src/Resources/public/img/bootstrap/check.svg' style="width:50px;stroke:blue;background-color: chocolate;border-radius: 5px;" alt="check"/>

### Der vierte Parameter &raquo;styles&laquo;
...**kann** (ist optional) eine oder mehrere Style-Anweisungen enthalten.

**Beispiel:**

    // für svg
    {{bi::badge-3d-fill::class1 class2::width:50px;background-color:orangered;border-radius: 50px;}}

    // für icon font
    {{bi::badge-4k-fill::class1 class2::font-size:3em;background-color:orangered;border-radius: 50px;}}

Das Ergebnis sollte so aussehen:

<img src='src/Resources/public/img/bootstrap/badge-3d-fill.svg' style="width:50px;background-color:yellow;border-radius: 50px;" alt="badge-3d"/>
<img src='src/Resources/public/img/bootstrap/badge-4k-fill.svg' style="width:50px;background-color:orangered;border-radius: 50px;" alt="badge-4k"/>

####
<div style="background:#FEB099;padding:4px;"><b>Achtung!</b>
Die Vordergrundfarbe (color) kann für ein SVG-Element nicht durch das style-Attribute gesetzt werden!
</div>

### Konfiguration

Das Bootstrap Icons InsertTag Bundle kann in geringem Umfang mit der **parameters.yml** konfiguriert werden.
Diese wird wie folgt mitgeliefert:
```
parameters:
    bootstrap_config:
        source:
            use_cdn: false
            css_source: 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css'
            js_source:  'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js'
        use:
            icon_font: false
            svg: true
```
Die Konfiguration befindet sich unterhalb des Schlüssels ``bootstrap_config``.

Zurzeit werden dort zwei weitere Schlüssel ausgewertet. Der Schlüssel ``source`` und der Schlüssel ``use``.

### source
Da mit dem Bundle eine Fallback-Konfiguration mitgeliefert (Scirpt, Fonts, SVG und CSS von Bootstrap Icons 1.9.1) wird,
kann hier mit dem Schlüssel ``use_cdn: true`` das Laden vom CDN aktiviert oder deaktiviert werden.
Ist ``use_cdn`` auf false gesetzt, dann werden die lokalen Bundle-Assets verwendet, damit das Bundle bei
Versionsänderungen im CDN lauffähig bleibt.

Wenn ``use_cdn`` aktiviert ist, können die Quellen mittels ``css_source`` und ``js_source`` definiert werden.
Voreingestellt sind o.g. Quellen.

### use
Mit dem Schlüssel ``use`` können die beiden Darstellungsmethoden der Icons festgelegt werden.
Fallback ist ``icon_font: true``. Beide Schlüssel können auf ``true`` gesetzt sein.
**Es können aber (in der aktuelle Version) nicht beide Darstellungsmethoden zugleich verwendet werden!**
Soll statt Icon Font die Methode SVG zum Einsatz kommen, so muss ``icon_font: false`` und ``svg: true`` gesetzt sein.
Andernfalls tritt immer der Fallback ``icon_font: true`` ein.

# Bootstrap Icons Inserttag Bundle

This bundle installs an InserTag that allows Bootstrap Icons (v1.9.1) to be used as a font or via SVG in Contao.

### General form of the tag

The tag starts with the prefix ``&nbsp;bi ``&nbsp;and it is followed by **three more** parameters. Parameters 1 and 2 are
required, parameters 3 and 4 are optional and can be omitted. So the tag consists of a total of
4 parameters. The general form looks like this:

    {{bi::name::classes::styles}}

### The first parameter &raquo;bi&laquo;
...is constant and identifies the tag.

### The second parameter &raquo;name&laquo;
...must be replaced by the name of the icon. The name of the icon should be used as shown
on the **Bootstrap Icons** page: https://icons.getbootstrap.com - that is, without the ``bi-`` prefix!

**Example:**

    {{bi::check}}

As a result you should see this character:
![check.svg](src/Resources/public/img/bootstrap/check.svg)

### The third parameter &raquo;classes&laquo;
...**may** (is optional) contain one or more CSS class names. The administrators must take care of providing the class themselves.
Multiple class names can be noted as in the class attribute of an HTML tag - i.e. also separated by
spaces.

**Example:**

    {{bi::check::class1 class2 class3}}

The result could - depending on the definition of the classes - look like this:

<img src='src/Resources/public/img/bootstrap/check.svg' style="width:50px;stroke:blue;background-color: chocolate;border-radius: 5px;" alt="check"/>

### The fourth parameter &raquo;styles&laquo;
...**may** (is optional) contain one or more style statements.

**Beispiel:**

    // for svg
    {{bi::badge-3d-fill::class1 class2::width:50px;background-color:orangered;border-radius: 50px;}}

    // for icon font
    {{bi::badge-4k-fill::class1 class2::font-size:3em;background-color:orangered;border-radius: 50px;}}

The result could - depending on the definition of the classes - look like this:

<img src='src/Resources/public/img/bootstrap/badge-3d-fill.svg' style="width:50px;background-color:yellow;border-radius: 50px;" alt="badge-3d"/>
<img src='src/Resources/public/img/bootstrap/badge-4k-fill.svg' style="width:50px;background-color:orangered;border-radius: 50px;" alt="badge-4k"/>

####
<div style="background:#FEB099;padding:4px;"><b>Attention!</b>
The foreground color (color) cannot be set for an SVG element by the style attribute!
</div>

### Configuration

The Bootstrap Icons InsertTag Bundle can be configured to a small extent using **parameters.yml**.
This is supplied as follows:
```
parameters:
    bootstrap_config:
        source:
            use_cdn: false
            css_source: 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css'
            js_source: 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js'
        use:
            icon_font: false
            svg: true
```
The configuration is located below the ``bootstrap_config`` key.

Currently, two other keys are evaluated there. The ``source`` key and the ``use`` key.

### source
Since a fallback configuration is provided with the bundle (scirpt, fonts, SVG and CSS from Bootstrap Icons 1.9.1),
the key ``use_cdn: true`` can be used to enable or disable loading from the CDN.
If ``use_cdn`` is set to false, the local bundle assets are used so that the bundle is executable in case of
version changes in the CDN.

If ``use_cdn`` is enabled, the sources can be defined with ``css_source`` and ``js_source``.
The default sources are those listed above.

### use
The ``use`` key can be used to define the two display methods of the icons.
Fallback is ``icon_font: true``. Both keys can be set to ``true``.
**However (in the current version) both display methods cannot be used at the same time!
If the SVG method is to be used instead of Icon Font, ``icon_font: false`` and ``svg: true`` must be set.
Otherwise the fallback ``icon_font: true`` will always occur.

