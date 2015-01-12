<?php
	require_once(dirname(__FILE__) . "/functions.php");
	
	if(isset($_REQUEST['page']))
		$view = $_REQUEST['page'];
	else
		$view = "";
	
	global $pmpro_ready, $msg, $msgt;
	$pmpro_ready = pmpro_is_ready();
	if(!$pmpro_ready)
	{
		global $pmpro_level_ready, $pmpro_gateway_ready, $pmpro_pages_ready;		
		if(!isset($edit))
		{
			if(isset($_REQUEST['edit']))
				$edit = $_REQUEST['edit'];
			else
				$edit = false;
		}
		
		if(empty($msg))
			$msg = -1;		
		if(empty($pmpro_level_ready) && empty($edit))
			$msgt .= " <a href=\"?page=pmpro-membershiplevels&edit=-1\">" . __("Add a membership level to get started.", "pmpro") . "</a>";
		elseif($pmpro_level_ready && !$pmpro_pages_ready && $view != "pmpro-pagesettings")
			$msgt .= " <a href=\"?page=pmpro-pagesettings\">" . __("Setup the membership pages", "pmpro") . "</a>.";		
		elseif($pmpro_level_ready && $pmpro_pages_ready && !$pmpro_gateway_ready && $view != "pmpro-paymentsettings")
			$msgt .= " <a href=\"?page=pmpro-paymentsettings\">" . __("Setup your SSL certificate and payment gateway", "pmpro") . "</a>.";
			
		if(empty($msgt))
			$msg = false;
	}
	
	if(!pmpro_checkLevelForStripeCompatibility())
	{		
		$msg = -1;
		$msgt = __("The billing details for some of your membership levels is not supported by Stripe.", "pmpro");
		if($view == "pmpro-membershiplevels" && !empty($_REQUEST['edit']) && $_REQUEST['edit'] > 0)
		{
			if(!pmpro_checkLevelForStripeCompatibility($_REQUEST['edit']))
			{
				global $pmpro_stripe_error;
				$pmpro_stripe_error = true;
				$msg = -1;
				$msgt = __("The billing details for this level are not supported by Stripe. Please review the notes in the Billing Details section below.", "pmpro");				
			}			
		}
		elseif($view == "pmpro-membershiplevels")
			$msgt .= " " . __("The levels with issues are highlighted below.", "pmpro");
		else
			$msgt .= " <a href=\"?page=pmpro-membershiplevels\">" . __("Please edit your levels", "pmpro") . "</a>.";			
	}
	
	if(!pmpro_checkLevelForPayflowCompatibility())
	{				
		$msg = -1;
		$msgt = __("The billing details for some of your membership levels is not supported by Payflow.", "pmpro");
		if($view == "pmpro-membershiplevels" && !empty($_REQUEST['edit']) && $_REQUEST['edit'] > 0)
		{
			if(!pmpro_checkLevelForPayflowCompatibility($_REQUEST['edit']))
			{
				global $pmpro_payflow_error;
				$pmpro_payflow_error = true;
				$msg = -1;
				$msgt = __("The billing details for this level are not supported by Payflow. Please review the notes in the Billing Details section below.", "pmpro");
			}			
		}
		elseif($view == "pmpro-membershiplevels")
			$msgt .= " " . __("The levels with issues are highlighted below.", "pmpro");
		else
			$msgt .= " <a href=\"?page=pmpro-membershiplevels\">" . __("Please edit your levels", "pmpro") . "</a>.";			
	}
	
	if(!pmpro_checkLevelForBraintreeCompatibility())
	{		
		$msg = -1;
		$msgt = __("The billing details for some of your membership levels is not supported by Braintree.", "pmpro");
		if($view == "pmpro-membershiplevels" && !empty($_REQUEST['edit']) && $_REQUEST['edit'] > 0)
		{
			if(!pmpro_checkLevelForBraintreeCompatibility($_REQUEST['edit']))
			{
				global $pmpro_braintree_error;
				$pmpro_braintree_error = true;
				$msg = -1;
				$msgt = __("The billing details for this level are not supported by Braintree. Please review the notes in the Billing Details section below.", "pmpro");
			}			
		}
		elseif($view == "pmpro-membershiplevels")
			$msgt .= " " . __("The levels with issues are highlighted below.", "pmpro");
		else
			$msgt .= " <a href=\"?page=pmpro-membershiplevels\">" . __("Please edit your levels", "pmpro") . "</a>.";			
	}
	
	if(!pmpro_checkLevelForTwoCheckoutCompatibility())
	{		
		$msg = -1;
		$msgt = __("The billing details for some of your membership levels is not supported by TwoCheckout.", "pmpro");
		if($view == "pmpro-membershiplevels" && !empty($_REQUEST['edit']) && $_REQUEST['edit'] > 0)
		{
			if(!pmpro_checkLevelForTwoCheckoutCompatibility($_REQUEST['edit']))
			{
				global $pmpro_twocheckout_error;
				$pmpro_twocheckout_error = true;
								
				$msg = -1;
				$msgt = __("The billing details for this level are not supported by 2Checkout. Please review the notes in the Billing Details section below.", "pmpro");				
			}			
		}
		elseif($view == "pmpro-membershiplevels")
			$msgt .= " " . __("The levels with issues are highlighted below.", "pmpro");
		else
			$msgt .= " <a href=\"?page=pmpro-membershiplevels\">" . __("Please edit your levels", "pmpro") . "</a>.";			
	}
	
	if(!empty($msg))
	{
	?>
		<div id="message" class="<?php if($msg > 0) echo "updated fade"; else echo "error"; ?>"><p><?php echo $msgt?></p></div>
	<?php
	}		

?>
<div class="wrap pmpro_admin">	
	<div class="pmpro_banner">
		<a class="pmpro_logo" title="Paid Subscriptions - Membership Plugin for WordPress" target="_blank" href="<?php echo pmpro_https_filter(PMPRO_SUPPORT)?>"><img src="<?php echo PMPRO_URL?>/images/Paid-Subscriptions.png" width="350" height="75" border="0" alt="Paid Subscriptions(c) - All Rights Reserved" /></a>	
		<div class="pmpro_meta"><span class="pmpro_tag-grey">v<?php echo PMPRO_VERSION?></span><a target="_blank" class="pmpro_tag-blue" href="<?php echo pmpro_https_filter(PMPRO_SUPPORT)?>"><?php _e('Plugin Support', 'pmpro');?></a></div>
		
		<br style="clear:both;" />
	</div>	
		
	<div id="pmpro_notifications">
	</div>
	<script>
		jQuery(document).ready(function() {
			jQuery.get('<?php echo get_admin_url(NULL, "/admin-ajax.php?action=pmpro_notifications"); ?>', function(data) {
				if(data && data != 'NULL')
					jQuery('#pmpro_notifications').html(data);		 
			});
		});
	</script>
	
	<?php
		//Set all default pages and allow them to be filtered and added
		$settings_tabs = array(
			"pmpro-membershiplevels" => __('Membership Levels', 'pmpro'),
			"pmpro-pagesettings" => __('Pages', 'pmpro'),
			"pmpro-paymentsettings" => __('Payment Gateway &amp; SSL', 'pmpro'),
			"pmpro-emailsettings" => __('Email', 'pmpro'),
			"pmpro-advancedsettings" => __('Advanced', 'pmpro'),
			"pmpro-addons" => __('Add Ons', 'pmpro'),
		);

		$settings_tabs = apply_filters( 'pmpro_admin_settings_tabs', $settings_tabs);

		if(array_key_exists($view, $settings_tabs))
		{
	?>
	<h3 class="nav-tab-wrapper">
		<?php foreach ($settings_tabs as $pageid => $menutext) { ?>
			<a href="admin.php?page=<?php echo $pageid; ?>" class="nav-tab<?php if($view == $pageid) { ?> nav-tab-active<?php } ?>"><?php echo $menutext;?></a>
		<?php } ?>
	</h3>
	<?php } ?>
