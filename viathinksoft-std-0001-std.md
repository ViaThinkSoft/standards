# ViaThinkSoft/Webfan Standard Specification

## ViaThinkSoft/Webfan Standards Header

```
VIATHINKSOFT/WEBFAN                                         D. Marschall
SPECIFICATION No. 1                                         ViaThinkSoft
First Draft: 2024                                      17 September 2024


           === ViaThinkSoft/Webfan Standard Specification ===

Abstract

   This document describes how the standards for ViaThinkSoft and Webfan
   are defined, written, and published.

Identification of this Document

   Revision:  2026-01-03
   State:     In Force
   Filename:  viathinksoft-std-0001-std.txt
   URN:       urn:x-viathinksoft:std:0001:2026-01-03
   OID:       1.3.6.1.4.1.37476.3.0.0
              { iso(1) identified-organization(3) dod(6) internet(1)
                private(4) enterprise(1) 37476 specifications(3)
                misc(0) viathinksoft-webfan-standard(0) }
   WEID:      P-SX0-3-0-0-5
   IETF/RFC:  (None)

Attachments

   (None)

Copyright Notice

   Copyright (c) 2024 ViaThinkSoft and the persons identified as the
   document authors.  All rights reserved.

   Licensed under the terms of the Apache 2.0 License.

Terminology

   The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT",
   "SHOULD", "SHOULD NOT", "RECOMMENDED", "NOT RECOMMENDED", "MAY", and
   "OPTIONAL" in this document are to be interpreted as described in
   BCP 14 [RFC2119] [RFC8174] when, and only when, they appear in all
   capitals, as shown here.
```

## 1  Introduction

The current standards are published here:
https://viathinksoft.de/std/

The source files are published at GitHub: 
https://github.com/ViaThinkSoft/standards

### 1.1  General Rules

Each document receives a sequential number.

Documents can be changed (unless RFCs).  If the change is minor
(like, fixing a typo), the revision date does not need to be changed.

Each document can be identified with the URN "urn:x-
viathinksoft:std:(nnnn):(yyyy-mm-dd)".  This URN can be extended by
components (delimited with colon), e.g. to get an URN for a XML
schema identifier.  The prefix "x-" for the second URN component
defines an experimental namespace not registered at IANA, as defined
in [RFC 3406], section 3.1.

## 2  Standards V1 Schema (RFC-Like, deprecated)

### 2.1  Tool Chain

The documents should be written in Nroff Internet Draft Editor by 3xA
Security. It can be downloaded here:
https://aaa-sec.com/nroffedit/
https://misc.daniel-marschall.de/patches/nroffedit/ ("year 2020"
patch)

### 2.2  General Structure

The overall structure, style, and look-and-feel of a
ViaThinkSoft/Webfan standard should be similar to the IETF Internet
Drafts.  Note that the documentation and style of some standards are
not yet done, and hence these standards look a bit "rough" and a lot
of IETF rules are currently broken.

A key difference between an IETF Internet Draft and a VTS/WF Standard
is the first page and the header and footer lines of the pages.

The chapters and their order is similar to the structure of a RFC /
Internet Draft, with the difference that the section "IANA
Considerations" is replaced with "RA Considerations".  These RA
considerations (usually OID Allocations that consists of OID, WEID,
ASN1, and IRI) are definitions that shall be entered in the OIDplus
Database of ViaThinkSoft and/or Webfan.

### 2.3  First Page Structure

Title Page Header Left Top:
- Line 1:  VIATHINKSOFT/WEBFAN
- Line 2:  SPECIFICATION No. (Number)
- Line 3:  First Draft: (Date)

Title Page Header Center:
- Empty

Title Page Header Right Top:
- Line 1:  Main Author(s)
- Line 2:  Organization (ViaThinkSoft or Webfan)
- Line 3:  Current Revision (Date)

"Title" (Short title, not a sentence)

"Identification of this Document"
- Line 1:  "Revision" in format yyyy-mm-dd
- Line 2:  "State" is either "In Force" or "Work In Progress" or "Deprecated"
- Line 3:  "Filename" is the name of the TXT file.
- Line 4:  "URN" is urn:x-viathinksoft:std:(nnnn):(yyyy-mm-dd)
- Line 5:  "OID" is the base OID of the standard, in dot-notation and ASN.1 notation
- Line 6:  "WEID" is the WEID notation (Spec Change 16+) of the base OID of the standard, without URN prefix.
- Line 7:  "IETF/RFC" is filled with the RFC or I-D name, in case this revision is in-sync with IETF.

"Attachments"
- Either "(None)" or a list of titles and their URLs

"Copyright Notice"
- Should be an OSS license like Apache 2

Footer Left:
- Author Family Name

Footer Center:
- Empty

Footer Right:
- "[Page (n)]"

### 2.4  Other Pages Structure

Header Left:
- "VTS/WF STD. (n)"

Header Center:
- Short Title

Header Right:
- Current Revision Date

Footer Left:
- Author Family Name

Footer Center:
- Empty

Footer Right:
- "[Page (n)]"

## 3  Standards V2 Schema (MarkDown, recommended for new standards)

### 3.1  Tool Chain

Any editor capable of editing MarkDown files can be used.

For converting MarkDown to HTML, a converter can be used.

### 3.2  General Structure

The chapters and their order is similar to the structure of a RFC /
Internet Draft, with the difference that the section "IANA
Considerations" is replaced with "RA Considerations".  These RA
considerations (usually OID Allocations that consists of OID, WEID,
ASN1, and IRI) are definitions that shall be entered in the OIDplus
Database of ViaThinkSoft and/or Webfan.
Also, the sections "Authors Addresses" and "Acknowledges" should not be used
in the MarkDown files.

### 3.3  "First Page" Structure

The first chapter should be named "ViaThinkSoft/Webfan Standards Header"
and contains a source-code-block what contains the first
page in RFC style as defined in chapter 2.3, followed by the IETF Terminology chapter
(not including any Terminology extension required by the current specification!).

## 4  Security Considerations

None.

## 5  RA Considerations

```
OID:  1.3.6.1.4.1.37476.3.0.0
WEID: P-SX0-3-0-0-5
ASN1: { iso(1) identified-organization(3) dod(6) internet(1)
private(4) enterprise(1) 37476 specifications(3) misc(0)
viathinksoft-webfan-standard(0) }
IRI:  /.../Specifications/Misc/ViaThinkSoft-Webfan-Standard
```

## 6  References

### 6.1  Normative References

[RFC2119]  Bradner, S., "Key words for use in RFCs to Indicate
		  Requirement Levels", BCP 14, RFC 2119,
		  DOI 10.17487/RFC2119, March 1997,
		  <https://www.rfc-editor.org/info/rfc2119>.

[RFC3406]  Daigle, L., van Gulik, D., Iannella, R., and P. Faltstrom,
		  "Uniform Resource Names (URN) Namespace Definition
		  Mechanisms", RFC 3406, DOI 10.17487/RFC3406, October 2002,
		  <https://www.rfc-editor.org/info/rfc3406>.

### 6.2  Informative References

None
