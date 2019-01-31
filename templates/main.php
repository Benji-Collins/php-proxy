<!DOCTYPE html>
<html>
<head>

<title>Sneaky Sneaky</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
* {
	box-sizing: border-box;
}
.title {
    text-align: center;
    cursor: default;
}
body {
	padding-top: 15em;
	color: #FFFFFF;
	font-family: Arial,Helvetica,sans-serif;
}
a {
	color: #93A1A1;
}
.url:focus,
.url:active,
.go:focus,
.go:active {
	outline: none;
}
.url {
	width: 88%;
	margin-right: 2%;
	background-color: #0000004D;
	color: #FFFFFF;
	border: none;
	outline: none;
	font-size: 14px;
	padding: .5em;
}
.go {
	width: 10%;
	background-color: #0000004D;
	color: #FFFFFF;
	cursor: pointer;
}
.url,
.go {
	display: block;
	padding: .5em;
	float: left;
	border: none;
	font-size: 14px;
	outline: none;
}
.container {
	padding: 1em;
	margin: 1em auto;
	width: 40em;
	background-color: #073642;
	background: #00000040;
	z-index: 2;
}
.container:after {
	display: table;
	content: '';
	clear: both;
}
canvas {
    position: absolute;
    top: 0;
    z-index: -1;
	left: 0;
}
.notice {
    text-align: center;
    padding-top: 3em;
    cursor: default;
}
#error {
	text-align: center;
    padding-top: 1em;
	font-size: 14px;
	color: #ff5151;
}
/* Links */
a {
    color: #FFFFFF;
    cursor: pointer;
	text-decoration: underline;
}
a:link {
    color: #FFFFFF; 
    background-color: transparent; 
    text-decoration: underline;
}

a:visited {
    color: #FFFFFF;
    background-color: transparent;
    text-decoration: underline;
}

a:hover {
    color: #FFFFFF;
    background-color: transparent;
    text-decoration: underline;
}

a:active {
    color: #FFFFFF;
    background-color: transparent;
    text-decoration: underline;
}
/* For transparency */
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #bfbfbf;
    opacity: 1; /* Firefox */
}
::-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #bfbfbf;
}
::-ms-input-placeholder { /* Microsoft Edge */
    color: #bfbfbf;
}
#invisible {
	color: #ffffff00;
}
</style>

</head>

<body>


<div class="container">
	<div class="title">
		<h1>Sneaky Sneaky</h1>
	</div>
	
	<div id="frm">
		<form action="index.php" method="post">
			<input class="url" name="url" type="text" autocomplete="off" placeholder="URL or search" />
			<input class="go" type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
	</div>

	<div class="notice">
		🌽🌽🌽
	</div>

	<?php if(isset($error_msg)){ ?>
		<div id="error">
			<p><?php echo $error_msg; ?></p>
		</div>
	<?php } ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/1.1.0/trianglify.min.js"></script>
<script>
    var colours = ["YlGn", "YlGnBu", "GnBu", "BuGn", "PuBuGn", "PuBu", "BuPu", "RdPu", "Purples", "Blues", "Greens", "RdYlBu", "Spectral", "RdYlGn"];
    var pattern = Trianglify({
        width: window.innerWidth,
        height: window.innerHeight,
        cell_size: 60 + Math.random() * 100,
        x_colors: colours[Math.floor(Math.random()*colours.length)],
        y_colors: 'match_x',
        stroke_width: 2
    });
    document.body.appendChild(pattern.canvas())
</script>
</body>
</html>
