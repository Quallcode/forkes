<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Dashboard | BlueWhale Admin</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css_dashboard/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css_dashboard/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css_dashboard/css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css_dashboard/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css_dashboard/css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="<?=base_url()?>includes/css_dashboard/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url()?>includes/css_dashboard/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="<?=base_url()?>includes/css_dashboard/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>includes/css_dashboard/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>includes/css_dashboard/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>includes/css_dashboard/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css_dashboard/css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?=base_url()?>includes/css_dashboard/js/jqPlot/jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?=base_url()?>includes/css_dashboard/js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?=base_url()?>includes/css_dashboard/js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?=base_url()?>includes/css_dashboard/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?=base_url()?>includes/css_dashboard/js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?=base_url()?>includes/css_dashboard/js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <!-- END: load jqplot -->
    <script src="<?=base_url()?>includes/css_dashboard/js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();


        });
    </script>
</head>
<body>
    <div class="container_12">
        <?php $this->load->view('header');?>
        <div class="clear">
        </div>
        <?php $this->load->view('body/dashboard/dsp');?>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
      <?php $this->load->view('footer');?>
</body>
</html>
