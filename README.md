# supaplex
A Canvas version of Supaplex with a supplied level editor.
```sql
CREATE TABLE IF NOT EXISTS `supa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` text COLLATE utf8_czech_ci NOT NULL,
  `popis` text COLLATE utf8_czech_ci NOT NULL,
  `obsah` longtext COLLATE utf8_czech_ci NOT NULL,
  `when` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=25 ;
```
