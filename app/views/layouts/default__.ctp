<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title_for_layout?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script> var path = '<?php echo $path;?>';</script>
    <!-- Include external files and scripts here (See HTML helper for more info.) -->
    <?php //echo $scripts_for_layout
             
        echo $this->Html->css(array('superfish', 'style'));
        echo $this->Html->script(array('jquery','superfish'));
        //echo "controller: ".$this->params->params['controller']."<br />";
        //echo "action: ".$this->params->params['action']."<br />";
                    
        if($this->params->params['controller'] == 'lancamentos' and $this->params->params['action']=='index'){
            //echo "entrou";
            echo $this->Html->script(array('lista_lancamentos'));
            
        }elseif ($this->params->params['controller'] == 'lancamentos'){
            
            echo $this->Html->css(array('ui-lightness/jquery-ui-1.8.14.custom'));
            echo $this->Html->script(array('hoverIntent',  'ui/jquery-ui-1.8.14.custom',
                                           'ui/jquery.ui.datepicker', 'ui/jquery.ui.core', 'lancamentos'));
        
        }elseif($this->params->params['controller'] == 'graficos' and $this->params->params['action']=='index'){
            
            echo $this->Html->script(array('graficos'));
            
        }elseif($this->params->params['controller'] == 'statuses'){
            //echo "importou<br />";            
            echo $this->Html->script(array('colorpicker/mColorPicker', 'colorpicker/color'));
        }
    ?>    
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        
        <h1><a href="<?php echo $this->webroot; ?>painels"><span style="color: #ffffff">:: Caixa Família :: .</span></a></h1>
      </div>
      <div class="menu_nav">
          <?php 
                //if($this->Session->check('Auth.User')){
                    echo $this->element('menu');
                //}
           ?>
        <!--<ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="support.html">Support</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul> -->
      </div>
      <div class="clr"></div>
      <?php echo $this->Html->image('bannerBalancosFinanceiros');?>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
     <?php
     $e = $this->Session->flash();
     if (!empty($e)){ ?>
         <span class="message"><?php echo $e; ?></span>
     <?php
     } 
     ?>

    <div class="content_resize">
      <br />
      <span class="titulos"><?php echo $title_for_layout?></span>
      <br />
      <!-- Here's where I want my views to be displayed -->
      <?php echo $content_for_layout ?>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>. <span>Design by Hot <a href="http://www.hotwebsitetemplates.net/" title="Website Templates">Website Templates</a></span></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
<?php //echo $this->element('sql_dump'); ?>
