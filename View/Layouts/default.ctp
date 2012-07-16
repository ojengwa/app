<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CakeBin : <?php echo $title_for_layout;?></title>
<?php echo $this->Html->charset();?>
<link rel="icon" href="<?php echo $this->request->webroot . 'favicon.ico';?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $this->request->webroot . 'favicon.ico';?>" type="image/x-icon" />
<?php echo $this->Html->css('cake.generic');?>
<?php echo $this->Html->css('cakebin');?>

<?php if(isset($javascript)):
		echo $javascript->link('prototype');
		echo $javascript->link('effects');
	endif;
?>
</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo">
			<h1>
				<?php echo $this->Html->link('CakeBin: <em>paste your code</em>', '/', null, false, false);?>
			</h1>
		</div>
		<div class="links">
			Pastes:
			<?php $css_class = ($this->name == 'Pastes' && $this->request->action == 'add') ? 'on' : null;?>
			<?php echo $this->Html->link('New', '/', array('class'=>$css_class)); ?>
			<?php $css_class = ($this->name == 'Pastes' && $this->request->action == 'index') ? 'on' : null;?>
			<?php echo $this->Html->link('Saved', '/list', array('class'=>$css_class)); ?>
		</div>
	</div>
	
	<?php //echo $this->renderElement('tabs');?>
	<div id="main">
		<div id="content" class="content<?php echo $this->request->action;?>">
			<?php if ($this->Session->check('Message.flash'))
					{
						$this->Session->flash();
					}
					echo $content_for_layout;
			?>
		</div>
		
		<?php 
			if($this->request->action == 'index' || $this->request->action == 'show' 
				|| $this->request->action == 'saved' || $this->request->action == 'search'):
				
				echo $this->renderElement('search');		
			endif;
		?>
		
		
		<?php 
			if(!empty($original)):
				echo $this->renderElement('versions');
			endif;
		?>
		
		<?php 
			if($this->request->action == 'index' || $this->request->action == 'show' 
				|| $this->request->action == 'saved' || $this->request->action == 'search'):		
			
				echo $this->renderElement('tag_cloud');
			endif;
		?>
	
		<?php 
			if(!empty($recent)):
				echo $this->renderElement('recent');
			endif;
		?>
		<?php 
			if($this->request->action == 'view' || $this->request->action == 'saved'):
				echo $this->renderElement('modify');
			endif;
		?>
	</div>
	<div class="clear"><!----></div>
	<div id="footer">
		<p>
			This is an alpha version of the CakeBin. You may find problems or errors.
			For now, you will have to put up with these problems unless you jump on #cakephp 
			and bug gwoo to fix it. 
		</p>
		<p>
			Features of CakeBin 1.0 Alpha: search by name and note, tagging, and 
			versioning of saved pastes 
		</p>
	</div>
	<a href="http://www.cakephp.org/" target="_new" style="float: right">
		<?php echo $this->Html->image('cake.power.png', array('alt'=>"CakePHP : Rapid Development Framework", 'border'=>"0"));?>
	</a>
</div>
</body>
</html>