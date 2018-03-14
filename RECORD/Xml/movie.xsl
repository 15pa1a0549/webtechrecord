<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>Movies</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Title</th>
      <th>Description</th>
      <th>Category</th>
      <th>Release</th>
      <th>Runningtime</th>
      <th>Language</th>
      <th>Userreview</th>
     </tr>
    <xsl:for-each select="movieinfo/movie">
    <tr>
      <td><xsl:value-of select="Title"/></td>
      <td><xsl:value-of select="Description"/></td>
      <td><xsl:value-of select="Category"/></td>
      <td><xsl:value-of select="Release"/></td>
      <td><xsl:value-of select="Runningtime"/></td>
	  <td><xsl:value-of select="Language"/></td>
	  <td><xsl:value-of select="Userreview"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
