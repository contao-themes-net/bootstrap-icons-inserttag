# Bootstrap Icons Inserttag Bundle

Dieses Bundle installiert ein InserTag, mit dessen Hilfe Bootstrap Icons (v1.8.0) als Font oder via SVG in Contao genutzt werden können.

## Insert Tag

Das Tag verwendet den Prefix ```bi``` im InsertTag. Der zweite Teil des Tags (nach ::) muss durch den Namen des Icons
ersetzt werden.

Das kann beispielsweise so aussehen:

    {{bi:check}}

Als Ergebnis sollte dieses Zeichen zu sehen sein:
![check.svg](src/Resources/public/img/bootstrap/check.svg)

Als tritten Teil des InsertTags kann eine oder mehrere CSS-Klassen angeben werden. Für das Bereitstellen der
Klasse müssen die Admins selbst Sorge tragen.

Das kann beispielsweise so aussehen:

    {{bi:check:class1 class2 class3}}

Das Ergebnis könnte - je nach Definition der Klassen - so aussehen:

<img src='src/Resources/public/img/bootstrap/check.svg' style="width:50px;color:blue;background-color: chocolate;border-radius: 5px;"/>

## Konfiguration

Das Bootstrap Icons Inserttag Bundle kann in geringem Umfang mit der **parameters.yml** konfiguriert werden.
Diese wird wie folgt mitgelierfert:
```
parameters:
    bootstrap_config:
        source:
            use_cdn: false
            css_source: 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css'
            js_source:  'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'
        use:
            icon_font: false
            svg: true
```
Die Konfiguration befindet sich unterhalb des Schlüssels ``bootstrap_config``.

Zurzeit werden dort zwei weitere Schlüssel ausgewertet. Der Schlüssel ``source`` und der Schlüssel ``use``.

#### source
Da mit dem Bundle eine Fallback-Konfiguration mitgeliefert (Scirpt, Fonts, SVG und CSS von Bootstrap Icons 1.8.0) wird,
kann hier mit dem Schlüssel ``use_cdn: true`` das Laden vom CDN aktiviert oder deaktiviert werden.
Ist ``use_cdn`` auf false gesetzt, dann werden die lokalen Bundle-Assets verwendet, damit das Bundle bei
Versionsänderungen im CDN lauffähig bleibt.

Wenn ``use_cdn`` aktiviert ist, können die Quellen mittels ``css_source`` und ``js_source`` definiert werden.
Voreingestellt sind o.g. Quellen.

#### use
Mit dem Schlüssel ``use`` können die beiden Darstellungsmethoden der Icons festgelegt werden.
Fallback ist ``icon_font: true``. Beide Schlüssel können auf ``true`` gesetzt sein.
**Es können aber (in der aktuelle Version) nicht beide Darstellungsmethoden zugleich verwendet werden!**
Soll statt Icon Font die Methode SVG zum Einsatz kommen, so muss ``icon_font: false`` und ``svg: true`` gesetzt sein.
Andernfalls tritt immer der Fallback ``icon_font: true`` ein.

# Bootstrap Icons Inserttag Bundle
This bundle installs an InserTag that allows to use Bootstrap Icons (v1.8.0) as font or via SVG in Contao.

## Insert Tag
The tag uses the prefix ``bi`` for the insert tag. The second part of the tag (after ::) must be replaced by the name of the icon.

For example, it can look like this:

    {{bi:check}}

As a result you should see this character:
![check.svg](src/Resources/public/img/bootstrap/check.svg)

One or more CSS classes can be specified as the third part of the InsertTag. For the provision of the
class must be taken care of by the admins themselves.

For example, it can look like this:

    {{bi:check:class1 class2 class3}}

The result could look like this - depending on the definition of the classes:

<img src='src/Resources/public/img/bootstrap/check.svg' style="width:50px;color:blue;background-color: chocolate;border-radius: 5px;"/>

## Configuration

The Bootstrap Icons Inserttag Bundle can be configured to a small extent with the **parameters.yml**.
This is supplied as follows:
```
parameters:
    bootstrap_config:
        source:
            use_cdn: false
            css_source: 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css'
            js_source: 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'
        use:
            icon_font: false
            svg: true
```
The configuration is located below the ``bootstrap_config`` key.

Currently, two other keys are evaluated there. The key ``source`` and the key ``use``.

#### source
Since a fallback configuration is provided with the bundle (Scirpt, Fonts, SVG and CSS from Bootstrap Icons 1.8.0),
the key ``use_cdn: true`` can be used to enable or disable loading from CDN.
If ``use_cdn`` is set to false, then the local bundle assets are used, so that the bundle is executable in case of
version changes in the CDN.

If ``use_cdn`` is enabled, the sources can be defined using ``css_source`` and ``js_source``.
The above sources are the default.

#### use
With the key ``use`` the two display methods of the icons can be defined.
Fallback is ``icon_font: true``. Both keys can be set to ``true``.
**However (in the current version) both display methods cannot be used at the same time!**
If the SVG method is to be used instead of Icon Font, ``icon_font: false`` and ``svg: true`` must be set.
Otherwise the fallback ``icon_font: true`` will always occur.
