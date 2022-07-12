# CMS_UCV2 :man_technologist:
cms para la carga de informacion de la web olive


[![GitHub contributors](https://img.shields.io/badge/Contributor-5-blueviolet.svg)](https://github.com/rricardob/cms_ucv2/graphs/contributors/)
[![made-with-PHP](https://img.shields.io/badge/Made%20with%20-PHP-green.svg)](https://www.php.net/manual/es/index.php)
[![made-with-mysql](https://img.shields.io/badge/Made%20with%20-mysql-orange.svg)](https://www.mysql.com/)


## :scroll: Descripcion
Este repositorio contiene código PHP para realizar la insercion y mantenimiento de la informacion de la web olive


## :art: Recursos
Meedo, el marco de base de datos PHP ligero para acelerar el desarrollo
* [https://medoo.in/](https://medoo.in/)  

```mermaid
sequenceDiagram
    participant dotcom
    participant iframe
    participant viewscreen
    dotcom->>iframe: loads html w/ iframe url
    iframe->>viewscreen: request template
    viewscreen->>iframe: html & javascript
    iframe->>dotcom: iframe ready
    dotcom->>iframe: set mermaid data on iframe
    iframe->>iframe: render mermaid
```
