# ViaThinkSoft Modular Crypt Format 1.0 (VTS MCF1)

## ViaThinkSoft/Webfan Standards Header


```
VIATHINKSOFT/WEBFAN                                         D. Marschall
SPECIFICATION No. 4                                         ViaThinkSoft
First Draft: 2023                                          20 April 2026


        === ViaThinkSoft Modular Crypt Format 1.0 (VTS MCF1) ===

Abstract

  This document describes the Modular Crypt Format "VTS MCF1", which
  allows arbitrary hash values to be expressed and stored using the
  standardized MCF string structure.

Identification of this Document

   Revision:  2026-04-20
   State:     In Force
   Filename:  viathinksoft-std-0004-mcf1.txt
   URN:       urn:x-viathinksoft:std:0004:2026-04-20
   OID:       1.3.6.1.4.1.37476.3.0.1.1
              { iso(1) identified-organization(3) dod(6) internet(1)
                private(4) enterprise(1) 37476 specifications(3)
                misc(0) modular-crypt-format(1) vts-crypt-v1(1) }
   WEID:      P-SX0-3-0-1-1-5
   IETF/RFC:  (None)

Attachments

   Reference implementation in PHP:
   https://github.com/danielmarschall/php_utils/blob/master/
   vts_crypt.inc.php

Copyright Notice

   Copyright (c) 2023-2026 ViaThinkSoft and the persons identified as
   the document authors.  All rights reserved.

   Licensed under the terms of the Apache 2.0 License.

Terminology

   The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT",
   "SHOULD", "SHOULD NOT", "RECOMMENDED", "NOT RECOMMENDED", "MAY", and
   "OPTIONAL" in this document are to be interpreted as described in
   BCP 14 [RFC2119] [RFC8174] when, and only when, they appear in all
   capitals, as shown here.
```

## Introduction: Modular Crypt Format (MCF)

The **Modular Crypt Format (MCF)** is a standardized string format used to store password hashes in a self-describing way.
Instead of just storing a raw hash, MCF encodes not only the hash itself but also the algorithm, parameters, and salt—all in a single structured string.
This makes it easier for software systems to verify passwords without needing external metadata.

### Structure and Components

An MCF string typically follows this general structure:

```
$id$parameters$salt$hash

```

-   **`$id$`**: Identifies the hashing algorithm used
-   **`parameters`**: Optional settings such as iteration count or memory cost
-   **`salt`**: A random value to prevent precomputed attacks (e.g., rainbow tables)
-   **`hash`**: The resulting hashed password

Not all algorithms use every field, but the structure remains consistent enough to allow parsers to interpret it correctly.

### How MCF Works

When a password is hashed using MCF:

1.  A hashing algorithm is selected (e.g., MD5, SHA-512, bcrypt).
2.  A random salt is generated.
3.  Optional parameters (like cost factors) are applied.
4.  The hash is computed.
5.  All of this information is encoded into a single MCF string.

During verification, the system reads the `$id$` and parameters from the stored string, recomputes the hash using the same configuration, and compares the results.

### Standardized Identifiers

MCF relies on standardized identifiers to specify the hashing algorithm. Some commonly used ones include:

-   `$1$`: MD5-based crypt
-   `$2a$`, `$2b$`, `$2y$`: bcrypt variants
-   `$5$`: SHA-256 crypt
-   `$6$`: SHA-512 crypt

These identifiers ensure that systems can correctly interpret which algorithm to use when validating a password.

### Examples

Here are a few example MCF strings:

-   **MD5 (crypt)**
    
    ```
    $1$salt123$Wq6u6ZyX1H3QzZ8zYz8Qv/
    
    ```
    
-   **SHA-512 (crypt)**
    
    ```
    $6$rounds=5000$salt123$abcdefghijk...
    
    ```
    
-   **bcrypt**
    
    ```
    $2b$12$e9N1uGkR1l5v9kK3QeJ8eO7uYv5lZk1yYz
    
    ```
    

Each example embeds all required information for verification directly in the string.

### OID-Based Identification

In addition to traditional identifiers like `$1$`, a more formal approach to defining MCF schemes is described in a book that assigns each format a unique **Object Identifier (OID)**.

An **OID** is a globally unique hierarchical identifier used to name objects in a standardized way.

By associating each MCF variant with an OID, this system ensures there are no naming conflicts between different hashing schemes, even across independent implementations or future extensions.


## Introduction: About ViaThinkSoft Modular Crypt Format 1.x (VTS MCF1)

## ViaThinkSoft Modular Crypt Format

The **ViaThinkSoft Modular Crypt Format** is a Modular Crypt Format (MCF) variant identified by the Object Identifier (OID) **1.3.6.1.4.1.37476.3.0.1.1**.

-   ViaThinkSoft MCF was introduced to represent existing password hashes in a standardized MCF string form. Legacy hashes (e.g., salted MD5) can be converted into the `$...$...$` structure, allowing them to be stored alongside other MCF-based passwords in the same data structure. This supports uniform handling of both legacy and newer formats and enables gradual migration, where old hashes remain valid until they are replaced with stronger ones upon successful authentication.

-   It also allows the use of algorithms that do not have a predefined MCF identifier. For example, hashes such as SHA3-512 can be encoded using ViaThinkSoft MCF 1.x, making it possible to store them in MCF notation together with other password hashes.

### Format of VTS MCF1:

#### Structure
```
	$1.3.6.1.4.1.37476.3.0.1.1$a=<algo>[,ai=<algo-internal>],m=<mode>[,i=<iterations>]$<salt>$<hash>
```

#### Parameter `a=<algo>` and `ai=<algo-internal>`
`a` and `ai` are any valid hash algorithm (name scheme of PHP `hash_algos()` preferred), e.g.
- `sha3-512`
- `sha3-384`
- `sha3-256`
- `sha3-224`
- `sha512`
- `sha512/256`
- `sha512/224`
- `sha384`
- `sha256`
- `sha224`
- `sha1`
- `md5`

NOT possible with VTS MCF are these hashes (because they have a special salt-handling and output their own crypt format):
- `bcrypt` [Standardized crypt identifier `2`, `2a`, `2b`, `2x`, or  `2y`]
- `argon2i` [Crypt identifier `argon2i`, not standardized]
- `argon2id` [Crypt identifier `argon2id`, not standardized]

`ai=<algo-internal>` is only required if `m=<mode>` uses the `hash[...]` formula (see below) and can be omitted if it is equal to `a=<algo>`.

#### Parameter `m=<mode>`
In VTS MCF 1.0, the mode can be one of these:
- `sp`: salt + password
	- Deprecated. Use instead: `hash[sp]`, it behaves equal if `i=0`
- `ps`: password + salt
	- Deprecated. Use instead: `hash[ps]`, it behaves equal if `i=0`
- `sps`: salt + password + salt
	- Deprecated. Use instead: `hash[sps]`, it behaves equal if `i=0`
- `shp`: salt + Hash(password)
	- Deprecated. Use instead: `hash[shbx(p)]`, it behaves equal if `i=0` and `a=ai`
- `hps`: Hash(password) + salt
	- Deprecated. Use instead: `hash[hbx(p)s]`, it behaves equal if `i=0` and `a=ai`
- `shps`: salt + Hash(password) + salt
	- Deprecated. Use instead: `hash[shbx(p)s]`, it behaves equal if `i=0` and `a=ai`
- `hmac`: HMAC (salt is the key)
	-  Deprecated. Use instead: `hmac[s;p]`, it behaves equal if `i=0`
- `pbkdf2`: PBKDF2-HMAC
	- Deprecated. Use instead: `pbkdf2[s;p]`
	- Additional param `i` contains the number of iterations)

In MCF 1.1, the following modes were added:

- `hmac[<formula for key>;<formula for payload>]`
- `pbkdf2[<formula for salt>;<formula for payload>]`
- `hash[<formula for payload>]`
	- Note: The algorithm for these nested hashes is `<algo-internal>` and not `<algo>`
	
The formulas for the new modes in VTS MCF 1.1 can be any custom formula with the following elements:
- `hbx(...)` means hash binary
- `hhu(...)` means hash hex upper
- `hhl(...)` means hash hex lower
- `h64(...)` means hash base64
- `s` means salt
- `p` means password

Example: `m=hash[shbx(sp)]` means that the hash will be `Hash(Salt+Hash(Salt+Password))`.

#### Parameter `i=<iterations>`
The parameter `i` can be omitted if 0.

It is required for `m=pbkdf2` and `m=pbkdf2[...]`.

For other modes it is optional, and implemented as follows:
- For VTS MCF 1.0 (modes `sp`, `ps`, `sps`, `shp`, `hps`, `shps`, or `hmac`): It repeats the hash/hmac operation with the password being replaced with the previous hash output concatenated with the iteration number starting with 0.
- For VTS MCF 1.1 (modes `hash[...]`, `hmac[...]`, or `pbkdf2[...]`): It repeats the hash/hmac operation with the password being replaced with the previous hash output.

#### Alphabet of salt and hash

Like most Crypt-hashes, <salt> and <hash> are Radix64 coded with alphabet './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' and no padding.

### Links

Link to the online specification:
	https://www.viathinksoft.de/std/viathinksoft-std-0004-mcf1.html

Reference implementation in PHP:
	https://github.com/danielmarschall/php_utils/blob/master/vts_crypt.inc.php


### Test Vectors

Test vector 1:
- Input: `Hello World`
- Hash: `$1.3.6.1.4.1.37476.3.0.1.1$a=sha3- 256,m=sp$$2Ud0hUTh//swVxoilAltWQ/9LQ189eZcdJ/hA5HkV/C`
- Algorithm: SHA3-256
- Mode: sp (Salt || Password)
- Salt: None

Test vector 2:
- Input: Hello World
- Hash: `$1.3.6.1.4.1.37476.3.0.1.1$a=sha3- 256,m=sp$CAT/9cvgCuS$dqNf5hJf0p09lYx.9rvI/c96swTz58tGhipuhobl8Ke`
- Algorithm: SHA3-256
- Mode: sp (Salt || Password)
- Salt: 8 Bytes

## Security Considerations

Hash values play a crucial role in various security contexts, such as password verification. For detailed guidance on securely managing hashes, please consult the relevant literature or documentation. Marschall [Page 4]

## RA Considerations

- OID: `1.3.6.1.4.1.37476.3.0.1.1`
- ASN1: `{ iso(1) identified-organization(3) dod(6) internet(1) private(4) enterprise(1) 37476 specifications(3) misc(0) modular-crypt-format(1) vts-crypt-v1(1) }`
- IRI: `/.../Specifications/Misc/ModularCryptFormat/VtsCryptV1`
- WEID: `P-SX0-3-0-1-1-5`

## References

### Normative References

[RFC2119] Bradner, S., "Key words for use in RFCs to Indicate Requirement Levels", [BCP 14](https://datatracker.ietf.org/doc/html/bcp14), [RFC 2119](https://datatracker.ietf.org/doc/html/rfc2119), DOI 10.17487/RFC2119, March 1997, <[https://www.rfc-editor.org/info/rfc2119](https://www.rfc-editor.org/info/rfc2119)>.

### Informative References

None

