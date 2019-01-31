<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" indent="yes" doctype-public="-//W3C//DTD HTML 4.01 Transitional//EN" doctype-system="http://www.w3.org/TR/html4/loose.dtd"/>

<!-- Language,theme,footer -->
<xsl:param name="language" select="/response/user/language"/>
<xsl:param name="lng" select="document(concat('../language/', $language, '/default.xml'))/l"/>
<xsl:param name="theme" select="/response/user/theme"/>
<xsl:include href="../../generic/templates/footer.xsl"/>
<xsl:include href="../../generic/templates/header.xsl"/>

<xsl:param name="date_filter" select="/response/date_filter"/>
<xsl:param name="type" select="/response/type"/>
<xsl:param name="display" select="/response/display"/>
<xsl:param name="limit" select="/response/limit + 1"/>
<xsl:template match="/response">
    <!-- <!DOCTYPE html> -->
    <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><xsl:value-of select="$lng/module_name"/></title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
      <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body>
      <div id="wrapper">
    		<div id="header">
    			<xsl:value-of select="$lng/loghistory"/>
    		</div>
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Log History</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <tr>
          					<td class="h t1"><xsl:value-of select="$lng/date"/></td>
          				<xsl:if test="type='error'">
          					<td class="ha t1"><xsl:value-of select="$lng/status"/></td>
          				</xsl:if>
          					<td class="ha t1"><xsl:value-of select="$lng/method"/></td>
          					<td class="ha t1"><xsl:value-of select="$lng/message"/></td>
          				<xsl:if test="/response/type='error'">
          					<td class="ha t1"><xsl:value-of select="$lng/gotorequestlog"/></td>
          				</xsl:if>
          				</tr>
          	<xsl:choose>
          		<xsl:when test="log">
          			<xsl:for-each select="log">
          				<tr>
          					<td class="h2b t2"><xsl:value-of select="date"/></td>
          				<xsl:if test="/response/type='error'">
          					<td class="h2c t1"><xsl:value-of select="status"/></td>
          				</xsl:if>
          					<td class="h2c t2"><xsl:value-of select="method"/></td>
          					<td class="h2c t2"><pre class="t2"><xsl:value-of select="message"/></pre></td>
          				<xsl:if test="/response/type='error'">
          					<td class="h2c t2"><a href="main.php?module=log&amp;function=display&amp;displaytype=request&amp;date_filter={date}"><xsl:value-of select="$lng/gotorequestlog"/></a></td>
          				</xsl:if>
          				</tr>
          			</xsl:for-each>
          				<tr>
          					<td class="h2b" colspan="5">
          						<xsl:if test="$display &gt; 1">
          							<a href="main.php?module=log&amp;function=display&amp;displaytype={$type}&amp;displaypage=1&amp;date_filter={$date_filter}"><img src="./theme/{$theme}/icon/first.gif" border="0" alt="First" hspace="1" align="absmiddle"/></a>
          							<xsl:variable name="previous" select="$display - 1"/>
          							<a href="main.php?module=log&amp;function=display&amp;displaytype={$type}&amp;displaypage={$previous}&amp;date_filter={$date_filter}"><img src="./theme/{$theme}/icon/left.gif" border="0" alt="Previous" hspace="1" align="absmiddle"/></a>
          						</xsl:if>
          						<xsl:call-template name="display_counter">
                  					<xsl:with-param name="counter" select="1"/>
                					</xsl:call-template>
          						<xsl:if test="$display &lt; $limit">
          							<xsl:variable name="next" select="$display + 1"/>
          							<a href="main.php?module=log&amp;function=display&amp;displaytype={$type}&amp;displaypage={$next}&amp;date_filter={$date_filter}"><img src="./theme/{$theme}/icon/right.gif" border="0" alt="Next" hspace="1" align="absmiddle" /></a>
          							<a href="main.php?module=log&amp;function=display&amp;displaytype={$type}&amp;displaypage={$limit}&amp;date_filter={$date_filter}"><img src="./theme/{$theme}/icon/last.gif" border="0" alt="Last" hspace="1" align="absmiddle"/></a>
          						</xsl:if>
          	  				</td>
          				</tr>
          		</xsl:when>
          		<xsl:otherwise>
          				<tr>
          					<td class="h2b" colspan="3"><xsl:value-of select="$lng/nolog"/></td>
          				</tr>
          		</xsl:otherwise>
          	</xsl:choose>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
        <!-- /.row -->
      </section>
    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <!-- <script language = "javascript">
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script> -->
    </body>
    </html>
  </xsl:template>
  <xsl:template name="display_counter">
  	<xsl:param name="counter"/>
  	<xsl:if test="$counter &lt; $limit">
  		<xsl:choose>
  			<xsl:when test="$counter = $display">
  				<xsl:value-of select="$counter"/>
  			</xsl:when>
  			<xsl:otherwise>
  				<a href="main.php?module=log&amp;function=display&amp;displaytype={$type}&amp;displaypage={$counter}"><b><xsl:value-of select="$counter"/></b></a>
  			</xsl:otherwise>
  		</xsl:choose>
  		<xsl:call-template name="display_counter">
  			<xsl:with-param name="counter" select="$counter + 1"/>
  		</xsl:call-template>
  		<xsl:value-of select='" "'/>
  	</xsl:if>
  </xsl:template>

  </xsl:stylesheet>
