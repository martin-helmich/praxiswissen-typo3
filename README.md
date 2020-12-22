# Praxiswissen TYPO3 - Beispieldaten und Skripte

Dieses Repository enthält die Beispieldaten und Skripte zum Buch _"Praxiswissen TYPO3"_.

## :warning: WICHTIG! Download-Hinweise

Dieses Repository beinhaltet die Beispieldaten und -Skripte für *alle* Ausgaben des Buchs ab der 9. Ausgabe (für TYPO3 8.7) in verschiedenen Git-Zweigen. Achte darauf, die richtige Version des Beispiel-Datensatzes für die Dir vorliegende Ausgabe herunterzuladen. Verfügbare Download-Pakete dieses Repositories finden sich auf der [Release-Liste][releases] dieses Projekts!

Fortgeschrittene Nutzer können die Beispieldaten auch direkt per Git beziehen:

    $ git clone --recursive --branch master git://github.com/martin-helmich/praxiswissen-typo3.git

In diesem Repository existieren folgende Zweige:

- `master` für die 11. Auflage (TYPO3 CMS 10.4 LTS)
- `edition-10` für die 10. Auflage (TYPO3 CMS 9.5 LTS)
- `edition-9` für die 9. Auflage (TYPO3 CMS 8.7 LTS)

## Orientierung

Die Download-Pakete bestehen aus den zwei Verzeichnissen `site/`, `examples/` und `theme/`.

- Das `examples/`-Verzeichnis enthält in seinen verschiedenen Unterverzeichnissen die exakten Quelltextbeispiele aus dem Buch.
- Das `site/`-Verzeichnis enthält alle Dateien, die für eine funktionierende TYPO3-Seite mit dem Beispiel-Template aus dem Buch benötigt werden.

Im Repository selbst finden sich im `theme/`-Verzeichnis die Quelldateien der Designvorlage. Diese wurden im Buch selbst nicht weiter besprochen, und sind hier als weiterführendes Material enthalten.

## Schnellstart

Für den Schnellstart liegt direkt im Wurzelverzeichnis die Datei `docker-compose.yml` zur Verfügung. Mit dem Befehl `docker-compose up -d` können alle benötigten Docker-Container für Web- und Datenbankserver gestartet werden. Das Beispiel-Projekt steht im Anschluss unter http://localhost zur Verfügung.

Das Beispiel-Projekt enthält noch keine Daten. Benutzer, Seiten und Inhalte müssen selbst angelegt werden.

Für den Start solltest Du zunächst einen eigenen Benutzer über das Install Tool erstellen. Dieses erreichst du unter http://localhost/install. Das Installtool-Passwort lautet standardmäßig `praxiswissentypo3` -- kann (und sollte) aber natürlich geändert werden.

## Fehler melden

Fehler passieren. Falls Du einen Fehler in den Beispiel-Dateien findest, öffne gerne einen [Bug-Report][issue]. Hierzu benötigst du lediglich einen kostenlosen Github-Account.

Wenn du einen Fehler meldest, denke bitte daran, die folgenden Informationen bereit zu stellen:

- In welcher Auflage des Buchs ist Dir der Fehler aufgefallen? 
- Mit welcher (exakten) TYPO3-Version hast du gearbeitet?
- In welcher Datei ist der Fehler (am besten direkt mit Link zur betroffenen Datei in diesem Repository)

## Bildquellen und -lizenzen

- `theme/public/images/trailer1.jpg`, CC-BY [Zach Dischner, flickr.com](https://www.flickr.com/zachd1_618/15252945587)
- `theme/public/images/trailer-default.jpg`, CC-BY [Kai Hendry, flickr.com](https://www.flickr.com/photos/hendry/4412963067)

[issue]: https://github.com/martin-helmich/praxiswissen-typo3/issues/new
[releases]: https://github.com/martin-helmich/praxiswissen-typo3/releases