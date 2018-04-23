<!DOCTYPE html>
<html>
	<head>
		<title>Code Dynamic Websites</title>
        <base href="http://localhost/CodeDynamicWebsite/">
	</head>
	<body>
		<h1><?php print('Code Dynamic Websites - Root Testing'); ?></h1>
        <ul>
            <li>
                <p>$_SERVER['DOCUMENT_ROOT']: <?php echo $_SERVER['DOCUMENT_ROOT'] ?></p>
            </li>
            <li>
                <p>basename(__FILE__): <?php echo basename(__FILE__) ?></p>
            </li>
        </ul>
	</body>
</html>