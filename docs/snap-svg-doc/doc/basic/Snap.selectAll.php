<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.selectAll()';
	include('../_include/header.php'); 
?>
</head>

<body>
<?php 
	include('../_include/nav.php'); 
?>

<div id="zxxBody" class="zxx_body">
	<div id="zxxSlide" class="zxx_side">
    	<?php include('../_include/slide.php'); ?>
    </div>
    <div class="zxx_api_detail">
    	<div class="zxx_api_content">
        	<h1 class="zxx_api_h1"><sub>Snap.svg demo之</sub><?php echo $key; ?></h1>
        	<h2>Snap.selectAll(query)</h2>
        	<p>包裹指定的CSS选择器的DOM元素们，使其可以使用文档中<code>Element</code>的方法。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>query</code> 字符串。CSS选择器。</li>
            </ul>
            <h3>返回值</h3>
            <p>元素。返回当前元素。</p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>

</script>
</body>
</html>