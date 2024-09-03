# ViaThinkSoft/Webfan Standards Collection

## Product independent standards

**OID**:	`{ iso(1) identified-organization(3) dod(6) internet(1) private(4) enterprise(1) 37476 specifications(3) ... }`

**WEID**:	`weid:pen:SX0-3-...`

| No.  | Title                                      | State            | Revision   | OID                         | Resources                                                                           |
|------|--------------------------------------------|------------------|------------|-----------------------------|-------------------------------------------------------------------------------------|
| 0001 | ViaThinkSoft/Webfan Standard Specification | In Force         | 2024-09-02 | 1.3.6.1.4.1.37476.3.0.0     | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0001-std.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0001-std.nroff) |
| 0002 | OID Information Protocol (OID-IP)          | In Force         | 2024-09-02 | 1.3.6.1.4.1.37476.3.5.10    | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.nroff) / [JSON-Schema](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.json) / [XML-Schema](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0002-oidip.xsd) / [IETF I-D](https://datatracker.ietf.org/doc/draft-viathinksoft-oidip/10/) |
| 0003 | Wehowski Identifier (WEID)                 | In Force         | 2024-09-03 | 1.3.6.1.4.1.37553.8.1.8.1.6 | [TXT](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0003-weid.txt) / [NROFF](https://github.com/ViaThinkSoft/standards/blob/main/viathinksoft-std-0003-weid.nroff) / [Website](https://co.weid.info/spec.html) |
| 0004 | Example OID                              | Reserved / Deprecated |             | tbd                          | [Web](https://misc.daniel-marschall.de/drafts/example-oid/) |
| 0005 | ViaThinkSoft Modular Crypt Format 1.0    | Reserved              |             | 1.3.6.1.4.1.37476.3.0.1.1    |                                                      |
| 0006 | Checkum String for PHAR archives of VNag | Reserved              |             | 1.3.6.1.4.1.37476.3.0.2      |                                                      |
| 0007 | Illegality Rules Definition File         | Reserved              | (2024)      | 1.3.6.1.4.1.37476.3.1.5      |                                                      |
| 0008 | ViaThinkSoft MultiDump (VMD) 2011        | Reserved              | (2011/2019) | 1.3.6.1.4.1.37476.3.1.6.2011 |                                                      |
| 0009 | ViaThinkSoft MultiDump (VMD) 2019        | Reserved              | 2024-09-29  | 1.3.6.1.4.1.37476.3.1.6.2019 | [Web](https://misc.daniel-marschall.de/projects/vmd2019/) |
| 0010 | File Format Definition File              | Reserved              |             | 1.3.6.1.4.1.37476.3.1.7      |                                                      |
| 0011 | Marschall Hash (MHA)                     | Reserved / Deprecated | 2011-07-21  | 1.3.6.1.4.1.37476.3.2.1.1    | [Web](https://misc.daniel-marschall.de/crypto/mha/)  |
| 0012 | Marschall Hash 2 (MHA2)                  | Reserved / Deprecated | 2014-11-28  | 1.3.6.1.4.1.37476.3.2.1.2    | [Web](https://misc.daniel-marschall.de/crypto/mha2/) |
| 0013 | Marschall Hash 3 (MHA3)                  | Reserved              | 2018-05-04  | 1.3.6.1.4.1.37476.3.2.1.3    | [Web](https://misc.daniel-marschall.de/crypto/mha3/) |
| 0014 | StN (String to Number) algorithm         | Reserved              |             | 1.3.6.1.4.1.37476.3.2.3.1    |                                                      |
| 0015 | Pyrascript 1408                          | Reserved              | 2014-08     | 1.3.6.1.4.1.37476.3.4.1.1408 |                                                      |
| 0016 | OID RDAP Extension                       | Reserved              |             | tbd                          |                                                      |

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
