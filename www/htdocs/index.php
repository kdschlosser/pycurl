<?php // vi:ts=4:et
$version = "7.10.1";
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <title>PycURL Home Page</title>
  <meta name="author" content="Kjetil Jacobsen, Markus F.X.J. Oberhumer" />
  <meta name="description" content="PycURL Homepage" />
  <meta name="keywords" content="pycurl, curl, libcurl, python, wget, file transfer" />
  <meta name="revisit-after" content="30 days" />
  <meta name="robots" content="index, follow" />
</head>

<body bgcolor="#ffffff" link="#0000ee" vlink="#551a8b" alink="#0000ee">

<center>
  <a href="http://curl.haxx.se/libcurl/"><img src="http://curl.haxx.se/libcurl/big.jpg" width="416" height="115" border="0" alt="libcurl"></img></a>
</center>

<h1><font face="Courier New, Courier, mono">PYCURL <?php echo $version ?></font></h1>

<p>
&gt;&gt;&gt; import pycurl<br />
&gt;&gt;&gt; print pycurl.__doc__
</p>

<p>
PycURL is a
<a href="http://www.python.org/">Python</a> module interface to the
<a href="http://curl.haxx.se/libcurl/">cURL library</a>.
PycURL can be used to fetch documents identified by a URI
from within a Python program.
</p>

<h2>Overview</h2>
<ul>
  <li>
    <a href="http://curl.haxx.se/libcurl/">libcurl</a>
    is a free and easy-to-use client-side URL transfer library,
    supporting FTP, FTPS, HTTP, HTTPS, GOPHER, TELNET, DICT, FILE and LDAP.
    libcurl supports HTTPS certificates, HTTP POST, HTTP PUT, FTP uploading,
    kerberos, HTTP form based upload, proxies, cookies, user+password
    authentication, file transfer resume, http proxy tunneling and more!
  </li>
  <li style="list-style: none"><br /></li>
  <li>
    libcurl is highly portable, it builds and works identically on numerous
    platforms, including Solaris, Net/Free/Open BSD, Darwin, HPUX, IRIX,
    AIX, Tru64, Linux, Windows, Amiga, OS/2, BeOs, Mac OS X, Ultrix,
    QNX, OpenVMS, RISC OS and more...
  </li>
  <li style="list-style: none"><br /></li>
  <li>
    libcurl is thread-safe, IPv6 compatible and fast.
  </li>
</ul>


<h2>Download</h2>

<p>
<a href="download/pycurl-7.10.1.tar.gz">Download</a>
PycURL sources version <?php echo $version ?> (Oct 16 2002)
or try the code from
<a href="http://sourceforge.net/cvs/?group_id=28236">the CVS repository</a>.
</p>

<p>
You can get older versions as well as prebuilt Win32 modules from the
<a href="download/?M=D">download area</a>.
Please note that the prebuilt versions are <b>unsupported</b>
and provided for your convenience only - use them at your own risk!
</p>

<?php if (0) { ?>
<p>
Please note that the prebuilt versions are provided for your convenience
and do not contain extras like
<a href="http://www.openssl.org/">SSL</a> and
<a href="http://www.gzip.org/zlib/">zlib</a> support - you have to grab
all relevant sources and compile them by yourself if you have such special
requirements.
</p>
<?php } ?>

<p>
Official packages are available for
<a href="http://packages.debian.org/python2.2-pycurl">Debian</a>,
and PycURL is also in the
<a href="http://www.freebsd.org/ports/">ports</a>
collection for FreeBSD and in the
<a href="http://www.netbsd.org/Documentation/software/packages.html">packages</a>
collection for NetBSD.
</p>


<h2>License</h2>
<pre>
LICENSE
-------
Copyright (c) 2001-2002 by Kjetil Jacobsen
Copyright (c) 2001-2002 by Markus F.X.J. Oberhumer

PycURL is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.
</pre>


<hr />
<div align="right">
  <table align="right">
    <tr align="right">
      <td><a href="http://curl.haxx.se/"><img
      src="http://curl.haxx.se/pix/powered_by_curl.gif"
      width="88" height="31" border="0" alt="" /></a>
      </td>

      <td><a href="http://sourceforge.net/"><img
      src="http://sourceforge.net/sflogo.php?group_id=28236&amp;type=1"
      width="88" height="31" border="0" alt="" /></a>
      </td>

      <td><a href="http://validator.w3.org/check/referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0!"
      width="88" height="31" border="0" /></a>
      </td>
    </tr>
  </table>
</div>

<font size="-1"><i>
  <?php echo 'Last modified ' . date('D M d H:i:s T Y', getlastmod()) . '.'; ?>
</i></font>

</body>
</html>
