<?php
require_once 'prepend.inc';
commonHeader("Cool PHP Tips");

function tipTitle($title,$author='',$date='') {
	echo hdelim();
	echo "<big><b>" . $title . "</b></big><br>\n";
	if ($author || $date) {
		echo "<small>\n";
		if ($author) {
			echo "Submitted by " . $author . "<br>\n";
		}
		if ($date) {
			echo $date . "<br>\n";
		}
		echo "</small>\n";
	}
	echo "<br>\n";
}

?>

<h1>Cool PHP Tips and Tricks</h1>

<p>
This page is going to contain a collection of "neat" tips and tricks 
related to PHP. They aren't necessarily be related to actually coding
in PHP (as our first example shows), but they are, in our opinion,
pretty cool.
</p>

<p>
Send your suggestions for tips
to <a href="mailto:webmaster@php.net">webmaster@php.net</a>.
</p>

<?php tipTitle('Quick Reference for KDE 2.1', 'Christoph Luehr', '10-Mar-2001');?>

<p>
With <a href="http://www.kde.org/">KDE</a> 2.1, it is possible
to configure the Konqueror web browser to recognize quick reference
URIs, for example: "php:mysql_connect".
</p>

<p>
Just open the Konqueror menu "Settings-&gt;Configure Konqueror",
select the tab "Enhanced Browsing", check "Enable Web Shortcuts".
</p>

<p>
Then click on "Add..." and fill the dialog:
</p>

<ul>
 <li>Search provider name: <b>"PHP Manual Quick Reference"</b></li>
 <li>Search URI: <b>http://www.php.net/manual-lookup.php?function=\1</b></li>
 <li>URI Shortcuts:  <b>php</b></li>
</ul>

<p>
Voila!
</p>

<?php tipTitle('Shortcut URLs for the Manual', '', '08-Mar-2001');?>

<p>
You can go directly to PHP manual pages by using a URL such as:
<a href="/strlen">http://www.php.net/strlen</a>.
</p>

<?php tipTitle('Adding the Quick Reference to most Javascript-capable Browsers', '', '07-Mar-2001'); ?>

<p>
Just right-click (control-click or click-and-hold for Macintosh users)
on this link: <a href="javascript:q=document.getSelection();if(!q)void(q=prompt('PHP Reference:',''));if(q)location.href='http://www.php.net/manual-lookup.php?lang=en&function='+escape(q)" title="PHP Quick Reference">PHP Quick Reference</A>
and add it to your bookmarks. With some browsers, you may need to edit
your bookmarks manually to give the bookmark an easy-to-remember title.
You can also edit the bookmark to change the default language by changing
'lang=en' to whatever language you want to use by default. (For example,
to pull up the German translation of the manual, you would replace
"lang=en" with "lang=de".)
</p>

<?php tipTitle('Adding the Quick Reference to Mozilla and Netscape 6', 'Andr&eacute; Langhorst', '16-Aug-2000'); ?>

<p>
Quick access to PHP documentation and site search for all Mozilla
and Netscape 6 users:
</p>

<ol>
  <li>Click "Bookmarks -&gt; Manage Bookmarks"</li>
  <li>Create a bookmark in a folder of your choice on
      the following URL: http://www.php.net/manual-lookup.php?function=%s
      (or mirror site of your choice)
    <ul>
      <li>Choose a name for your bookmark.</li>
    </ul>
  </li>
  <li>Right click the bookmark you�ve created and select "Properties..."</li>
  <li>Choose a "custom keyword" you want to enter in the URL bar,
  eg. "phpman" and fill it in.</li>
  <li>Click "ok" and open a new browser window.</li>
  <li>Finished. Now you�re able to enter eg. "phpman fgets" to look
  up the manual entry on the function fgets() or eg. "phpman building
  PHP 4" to search all available information how to build PHP 4.</li>
</ol>

<?php tipTitle('Adding the Quick Reference to Internet Explorer 5', 'Colin Viebrock', '28-Jul-2000'); ?>

<ol>
  <li>If you don't already have the IE5 Tools package, download and install it from
  <a href="http://www.microsoft.com/Windows/IE/WebAccess/ie5tools.asp" target="_blank"
  >www.microsoft.com/Windows/IE/WebAccess/ie5tools.asp</a></li>
  <li>Launch the QuickSearch utility (you'll find it on your Links bar)</li>
  <li>Add a new search shortcut by clicking on "New" and use the
  following settings:
    <ul>
      <li>Shortcut: <b>php</b></li>
      <li>Search: <b>Custom URL</b></li>
      <li>URL: <b>http://www.php.net/manual-lookup.php?function=%s</b></li>
    </ul>
  ... or substitute your favorite mirror site instead of <b>www.php.net</b><br>
  <div align="center">
  <img src="gifs/tips-quickref.gif" width="317" height="293" border="0" alt="Edit shortcut"><br>
  </div></li>
  <li>Click "Ok", then click "Save" to keep your new settings</li>
  <li>That's it! Try it by typing "php strlen" in the IE Address bar.
  You should jump right to the manual entry for strlen. And because the
  QuickRef code on the PHP site is smart, you can use it to do general
  searches of the PHP site. For example, try typing "php file upload"
  in your browser.</li>
</ol>

<?php tipTitle('Adding the Quick Reference to Netscape on Linux', 'David Rose', '28-Jul-2000'); ?>

<p>
Further to the example above for Windows/IE users, here's something Linux folk can do:
</p>

<ol>
  <li>Create a file called <b>phpfind</b> somewhere on an executable path</li>
  <li>In that file, write the following code (substituting the path to Netscape,
  if necessary):
<pre>
#!/bin/sh
/usr/bin/netscape http://www.php.net/manual-lookup.php?function=$1
</pre></li>
  <li>Save it and type <b>chmod +x phpfind</b> to make it executable</li>
  <li>That's it. When you type "phpfind funcionname" on your command line, 
  Netscape will open the proper URL for you.</li>
</ol>

<?php tipTitle('Quick Reference for Gnome Users', 'Benjamin Curtis', '29-Jul-2000'); ?>

<p>
Here's another search option for Linux users who use Gnome. This is a macro
for gnome's mini-commander panel applet (modified from the Yahoo search that
comes with the applet):
<p>

<p>
<b>Regex:</b><br>
^php: *(.*)$
</p>

<p>
<b>Macro:</b><br>
gnome-moz-remote --newwin http://www.php.net/manual-lookup.php?function=$(echo<br>
'\1'|sed -e ': p;s/+/%2B/;t p;: s;s/\ /+/;t s;: q;s/\"/%22/;t q')
</p>

<?php commonFooter(); ?>
