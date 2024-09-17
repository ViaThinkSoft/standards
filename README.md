# ViaThinkSoft/Webfan Standards Collection

## View Online

HTML at GitHub: https://htmlpreview.github.io/?https://raw.githubusercontent.com/ViaThinkSoft/standards/master/index.html

Mirror at ViaThinkSoft: https://www.viathinksoft.de/std/index.html

## Product independent standards

**VTS Standards:**

- Base OID	`{ iso(1) identified-organization(3) dod(6) internet(1) private(4) enterprise(1) 37476 specifications(3) ... }`

- Base WEID	`weid:pen:SX0-3-...-?`

**Webfan Standards:**

- Base OID `{ iso(1) identified-organization(3) dod(6) internet(1) private(4) enterprise(1) frdlweb(37553) weid(8) org(1) webfan(8) technical-specifications(1) ... }`

- Base WEID `weid:1-8-1-...-?`

**Registered Standards:**

| No.  | Title                                      | State            | Revision   | OID / WEID                                                                                                 | Resources                                                                           |
|------|--------------------------------------------|------------------|------------|------------------------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------|
| 0001 | ViaThinkSoft/Webfan Standard Specification | In Force         | 2024-09-17 | [1.3.6.1.4.1.37476.3.0.0](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.0.0)<br>weid:pen:SX0-3-0-0-5    | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0001-std.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0001-std.nroff) |
| 0002 | OID Information Protocol (OID-IP)          | In Force         | 2024-09-02 | [1.3.6.1.4.1.37476.3.5.10](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.5.10)<br>weid:pen:SX0-3-5-A-6  | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.nroff) / [JSON-Schema](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.json) / [XML-Schema](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.xsd) / [IETF I-D](https://datatracker.ietf.org/doc/draft-viathinksoft-oidip/10/) |
| 0003 | Wehowski Identifier (WEID)                 | In Force         | 2024-09-09 | [1.3.6.1.4.1.37553.8.1.8.1.6](https://registry.frdl.de/?goto=oid%3A1.3.6.1.4.1.37553.8.1.8.1.6)<br>weid:1-8-1-6-2           | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0003-weid.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0003-weid.nroff) / [Website](https://weid.info/spec.html) |
| 0004 | ViaThinkSoft Modular Crypt Format 1.0 (MCF1) | In Force         | 2024-09-03 | [1.3.6.1.4.1.37476.3.0.1.1](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.0.1.1)<br>weid:pen:SX0-3-0-1-1-5 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0004-mcf1.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0004-mcf1.nroff) / [RefImpl](https://github.com/danielmarschall/php_utils/blob/master/vts_crypt.inc.php) |
| 0005 | Marschall Hash (MHA)                     | Deprecated | 2024-09-04  | [1.3.6.1.4.1.37476.3.2.1.1](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.2.1.1)<br>weid:pen:SX0-3-2-1-1-1 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0005-mha1.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0005-mha1.nroff) / [RefImpl](https://github.com/danielmarschall/php_utils/blob/master/vts_crypt.inc.php) |
| 0006 | Marschall Hash 2 (MHA2)                  | Deprecated | 2024-09-04  | [1.3.6.1.4.1.37476.3.2.1.2](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.2.1.2)<br>weid:pen:SX0-3-2-1-2-9 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0006-mha2.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0006-mha2.nroff) / [RefImpl](https://github.com/danielmarschall/php_utils/blob/master/vts_crypt.inc.php) |
| 0007 | Marschall Hash 3 (MHA3)                  | Deprecated | 2024-09-04  | [1.3.6.1.4.1.37476.3.2.1.3](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.2.1.3)<br>weid:pen:SX0-3-2-1-3-7 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0007-mha3.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0007-mha3.nroff) / [RefImpl](https://github.com/danielmarschall/php_utils/blob/master/vts_crypt.inc.php) |
| 0008 | PHAR File List / Checksums               | In Force   | 2024-09-04  | [1.3.6.1.4.1.37476.3.0.2](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.0.2)<br>weid:pen:SX0-3-0-2-1 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0008-phar-cs.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0008-phar-cs.nroff) / [RefImpl](https://github.com/danielmarschall/vnag/blob/master/src/build.phps) |
| 0009 | File Format Definition File              | In Force   | 2024-09-11  | [1.3.6.1.4.1.37476.3.1.7](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.1.7)<br>weid:pen:SX0-3-1-7-9 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0009-fileformat-def.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0009-fileformat-def.nroff) |
| 0010 | Illegality OID Definition File           | In Force   | 2024-09-11  | [1.3.6.1.4.1.37476.3.1.5](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.1.5)<br>weid:pen:SX0-3-1-5-3 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0010-illegal-oid.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0010-illegal-oid.nroff) |
| 0011 | Example OID                              | Deprecated | 2024-09-11  | [1.3.6.1.4.1.37476.9999](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.9999)<br>weid:pen:SX0-7PR-6 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0011-example-oid.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0011-example-oid.nroff) |
| 0012 | ViaThinkSoft MultiDump (VMD) 2011        | Reserved / Deprecated | (2011/2019) | [1.3.6.1.4.1.37476.3.1.6.2011](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.1.6.2011)<br>weid:pen:SX0-3-1-6-1JV-3 | [Web](https://misc.daniel-marschall.de/drafts/multidump/) |
| 0013 | ViaThinkSoft MultiDump (VMD) 2019        | Reserved              | (2019)  | [1.3.6.1.4.1.37476.3.1.6.2019](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.1.6.2019)<br>weid:pen:SX0-3-1-6-1K3-0 | [Web](https://misc.daniel-marschall.de/drafts/multidump/) |
| 0014 | ViaThinkSoft MultiDump (VMD) 2024        | Reserved              | 2024-09-12  | [1.3.6.1.4.1.37476.3.1.6.2024](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.1.6.2024)<br>weid:pen:SX0-3-1-6-1K8-9 | [Web](https://misc.daniel-marschall.de/drafts/multidump/) |
| 0015 | StN (String to Number) algorithm         | Reserved              |             | [1.3.6.1.4.1.37476.3.2.3.1](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.2.3.1)<br>weid:pen:SX0-3-2-3-1-9 |                                                      |
| 0016 | Pyrascript 1408                          | Reserved              | 2014-08     | [1.3.6.1.4.1.37476.3.4.1.1408](https://hosted.oidplus.com/viathinksoft/?goto=oid%3A1.3.6.1.4.1.37476.3.4.1.1408)<br>weid:pen:SX0-3-4-1-134-6 |                                                      |
| 0017 | OID RDAP Extension                       | Reserved              |             | tbd                          |                                                      |

## Product specific standards

**OID**:	`{ iso(1) identified-organization(3) dod(6) internet(1) private(4) enterprise(1) 37476 products(2) ... }`

**WEID**:	`weid:pen:SX0-2-...`

Not an official standard, because it’s too product-specific?? Should they get a "ViaThinkSoft Standard ID-Number" anyways...??
-	“Level file with optional savegame, for SpaceMission version 1.2”, OID { viathinksoft products(2) spacemission(8) file-format(1) lev-sav-v12(1) }
-	“File format of OIDplus 1.0, internal codename "Volcano"”, OID { viathinksoft products(2) oidplus(5) v1(1) volcano(1) }
-	OIDplus 2.0 XML/JSON Plugin Schema, OIDs { viathinksoft products(2) oidplus(5) v2(2) xmlSchema(5) }, { viathinksoft products(2) oidplus(5) v2(2) jsonSchema(7) }
-	“OIDplus Nostalgia OID Definition File”, OID { viathinksoft products(2) oidplus(5) nostalgia(3) file-formats(1) oid-file(1) }
-	“OIDplus Nostalgia RA Definition File”, OID { viathinksoft products(2) oidplus(5) nostalgia(3) file-formats(1) ra-file(2) }
-	“VNag JSON Data that is embedded in an HTML page”, OID { viathinksoft products(2) vnag(3) jsondata(1) }
-	(De)Coder 3.x File Format, OID { viathinksoft products(2) decoder(2) fileformat(1) dc3(3) … }
-	[(De)Coder 4.x/5.x File Format](https://github.com/danielmarschall/decoder/blob/master/Decoder50/Private/DC4-Format-Specification.txt), Latest Revision 2024-05-27, OID { viathinksoft products(2) decoder(2) fileformat(1) dc4(4) … }
