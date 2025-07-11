# Site verify

The Site Verification module verifies ownership of a site for use with search
engines. It assists with the site/domain ownership authentication/verification
for search engines.

The module supports two types site verification supported: meta tags on the
front page, and text or HTML files served from the site root.

To get started, install the module and navigate to:

  [your.site]/admin/config/search/verifications

Additional help is available if you have the help module installed.

* For a full description of the module, visit this page:
https://www.drupal.org/project/site_verify

* To submit bug reports and feature suggestions, or to track changes:
https://www.drupal.org/project/issues/site_verify

## Table of contents

- Requirements
- Installation
- Configuration
- Maintainers

## Requirements

This module requires no modules outside of Drupal core.


## Installation

Install as you would normally install a contributed Drupal module. For further
information, see
[Installing Drupal Modules](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules).


## Configuration

### To Add a verification to a site:

1. Navigate to Administration > Configuration > Search > Verifications.
2. To add a verification select "Add site verification".
3. Enter a Label and Description, displayed in the management interface.  
   Optionally customise the generated machine name.
4. Using one of the entry methods below, provide the verification data
    - Manual entry
    - Parse a full meta tag
    - Upload a verification file
5. Save.

#### Manual entry

This is the default entry mode. Both the Meta Tag parser and File upload will
transform their input into the manual entry form.

Choose the verification type: Meta tag or File

For a file, enter the filename into the name field, and file contents (if any)
into the content field.

For a meta tag, enter the name and content attributes into their respective
fields.

#### Paste a meta tag

A validations service can provide a full meta tag to copy'n'paste.

From the "Add site verification" form, choose "Paste a meta tag". Paste the
full meta tag in the field and click Save.

#### Upload a file

In the event a verification file is provided, it can be uploaded and parsed.

From the "Add site verification" form, choose "Upload a file".

The file upload uses the standard Drupal managed file field, which can handle
dragging a file into the box or navigating your system to find a file. Once
selected and uploaded, click Save.

Note that the file field will not be pre-filled after a verification has been
saved. The temporary file is removed after parsing into the site verification
fields.

### To Edit an existing verification:

1. Navigate to Administration > Configuration > Search > Verifications.
2. Select Edit next to the site verification to be edited.
3. Make appropriate edits using any of the input modes.
4. Save.

## Example verifications

The following is a incomplete list of site verifications services. Any service
which uses a meta tag or served file for validation should work.

### Google

Create a Google Webmaster Tools Account:
* https://www.google.com/webmasters/tools/home
* https://support.google.com/webmasters/answer/35179

### Bing

Create a Bing Webmaster Tools Account:
* http://www.bing.com/toolbox/webmaster
* http://www.bing.com/webmaster/help/how-to-verify-ownership-of-your-site-afcfefc6

### Yandex

Create Yandex webmaster account:
* https://webmaster.yandex.com
* https://yandex.com/support/webmaster/service/rights.html

### Yahoo

Yahoo verification is considered obsolete.
* Visit: https://www.drupal.org/node/1412198


## Maintainers

* Jim.M - https://www.drupal.org/u/jimm
* Dave Reid - https://www.drupal.org/u/dave-reid
* Kevin Reynen - https://www.drupal.org/u/kreynen
* afinnarn - https://www.drupal.org/u/afinnarn
* Jeremy Sparks - https://www.drupal.org/u/jcsparks
* CU Boulder - https://www.drupal.org/u/university-of-colorado-boulder
* Eric Sembrat - https://www.drupal.org/u/webbeh
* Ted Cooper - https://www.drupal.org/u/elc
* Jake Bell - https://www.drupal.org/u/jacobbell84
* Joachim Noreiko - https://www.drupal.org/u/joachim
* GT - https://www.drupal.org/u/ramblinwreck
* Tim Tripp - https://www.drupal.org/u/timurtripp
* James Fuller - https://www.drupal.org/u/fullerja
* Kevin Crafts - https://www.drupal.org/u/kevincrafts
* owenpm3 - https://www.drupal.org/u/owenpm3
