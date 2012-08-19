Drupal Embedded Crocodoc Viewer module based on Embedded Google Docs Viewer (http://drupal.org/project/gdoc_field):
------------------------------------------
Maintainer:
  Prince Mishra (http://drupal.org/user/940208)
Requires - Drupal 7
License - GPL (see LICENSE)

Overview
========
The Embedded Crocodoc Viewer module adds a new formatter
to the File field using the Field API. This formatter displays
PDFs, Microsft Word documents, Powerpoint presentations, or 
Excel spreadsheets directly within a Drupal node.

Requirements
============
The Embedded Crocodoc Viewer is a custom formatter for the 
Core "Field" module - therefore the "Field" module must be enabled.

Any files to be formatted/rendered by this module must be 
accessible on the open web - Crocodoc needs to be able to 
access them in order for Crocodoc to be able to format them. 
so your Drupal system must not be behind a firewall, must be
reachable by normal web users, and your system must store the
files as "public:".

Tutorials
=========

Crocodoc is an extension to the core field module,
which must be enabled.

1. Unpack the crocodoc folder and contents in the 
appropriate modules directory of your Drupal installation.
This is probably
   sites/all/modules/
---------------------

2. In Crocodoc.php file, give out your crocodoc api key

3. Enable the crocodoc module in the administration tools.
It appears in the Modules list as "Embedded Crocodoc Viewer."

4. add a "File" field to one of your site's Content Types.

5. Under the "Manage Fields" tab, add appropriate 
"Allowed file extensions," i.e. one or more of 
pdf, doc, docx, xls, xlsx, ppt, or pptx.

6. Then under the "Manage Display" tab, select 
"Embedded Crocodoc Docs Viewer" as the field formatter. 
From then on you will be able to upload/add and display pdfs, 
etc. to the content type to which you added the new field.

When displaying a page containing an Embedded Crocodoc Docs field, 
the formatter builds an iframe within the current node using the url
of the file to construct a larger url for Crocodoc's embeddable Crocodoc
viewer. That combined Crocodoc url is the source for the iframe's 
content. The iframe is stylable (as much as any iframe is) using the 
CSS selector ".crocodoc". The default values for .crocodoc are 
included in the project's file "crocodoc.css."