
  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ROOT_MENU_TYPE" => "bottom",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "Y",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap<br/>Copyright © Blackrock Digital LLC. Code released under the MIT license.</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
	<script src="<?=SITE_TEMPLATE_PATH?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="<?=SITE_TEMPLATE_PATH?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- Custom scripts for this template -->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/creative.min.js"></script>

</body>

</html>
