Drupal Embedded Crocodoc Viewer module:
------------------------------------------
Maintainer:
  Prince Mishra (http://drupal.org/user/940208)
Requires - Drupal 7
License - GPL (see LICENSE)

The Embedded Crocodoc Viewer is a module which
adds a formatter to core's File field. The formatter
uses Crocodoc's embeddable Crocodoc viewer to render
Adobe Acrobat pdf files, and Microsoft Word, Excel, and 
Powerpoint files (i.e. files suffixed with .pdf, .doc,
.docx, .xls, .xlsx, .ppt, or .pptx).

After adding a File field to a Drupal content type,
the Embedded Crocodoc Viewer formatter may be selected
for use on the content type's "Manage Display" tab.

N.B.: Only files that are public may use this formatter - 
Crocodoc must be able to access the file in order to
render and display it. In other words, it won't work on 
a typical development laptop, or if your server is
behind a firewall where Crocodoc can't access it.