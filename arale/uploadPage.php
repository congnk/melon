<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Uploader</title>
  <!--script type="text/javascript" src="http://static.alipayobjects.com/seajs/1.3.0/sea.js"></script-->
  <script charset="utf-8" id="seajsnode"src="	
	http://static.alipayobjects.com/??seajs/seajs/2.1.1/sea.js,
seajs/seajs-combo/1.0.0/seajs-combo.js,
seajs/seajs-debug/1.0.0/seajs-debug.js,
seajs/seajs-style/1.0.0/seajs-style.js,
seajs/seajs-health/0.1.0/seajs-health.js,
jquery/jquery/1.7.2/jquery.js">
</script>
  <style type="text/css">
    .container {
      margin: 0 auto;
      width: 80%;
      max-width: 680px;
      padding: 60px 0;
    }
  </style>
  <script type="text/javascript">
    seajs.config({
      alias: {'$': 'jquery/jquery/1.7.2/jquery'}
    });
  </script>
</head>
<body>
<div class="container">
  <h1>Uploader DEMO</h1>

  <p>This is a project by <a href="http://lepture.com">Hsiaoming Yang</a>.</p>

  <h2>Select and Upload</h2>

  <div class="cell">
    <button id="uploader-1" href="#">Upload</button>
  </div>

  <h2>Select then upload</h2>

  <div class="cell">
    <p>
		<form enctype="multipart/form-data" action="upload.php" method="post">
			<input type="file" name="Filedata"  />
			<input type="submit" value="提交"/> 
		</form>
      <button id="uploader-2" href="#">Select</button>
      <span id="upload-2-text"></span></p>
    <p>
      <button id="submit-2" href="#">Upload</button>
    </p>
  </div>
  <h2>Only upload image</h2>

  <div class="cell">
    <button id="uploader-3" href="#">Upload</button>
  </div>

  <h2>Disable upload</h2>
  <div class="cell">
    <p><button id="uploader-4" href="#">Select</button>
      <span id="upload-4-text"></span></p>
    <p><button id="disable" href="#">Disable</button><button id="submit-4" href="#">Upload</button></p>
  </div>
</div>
<script type="text/javascript">
  seajs.use(['$', 'arale/upload/1.1.1/upload'], function($, Uploader) {
    new Uploader({
      trigger: '#uploader-1',
      action: 'upload.php',
	  name: "Filedata",
      progress: function() {
        console.log(arguments);
      }
    }).success(function(data) {
      alert(data);
    });

    var uploader = new Uploader({
      trigger: '#uploader-2',
      action: 'upload.php',
	  name: "Filedata",
    }).change(function(filename) {
      $('#upload-2-text').text(filename);
    }).success(function(data) {
      alert(data);
    });
    $('#submit-2').click(function() {
      uploader.submit();
      return false;
    });

    new Uploader({
      trigger: '#uploader-3',
      accept: 'image/*',
      action: 'upload.php',
	  name: "Filedata"
    }).success(function(data) {
      alert(data);
    });

    var uploaderCanBeDisabled = new Uploader({
      trigger: '#uploader-4',
      action: 'upload.php',
	  name: "Filedata"
    }).change(function(filename) {
      $('#upload-4-text').text(filename);
    }).success(function(data) {
      alert(data);
    });
    $('#disable').click(function() {
      var txt = $(this).html();
      uploaderCanBeDisabled[txt === 'Disable'? 'disable': 'enable']();
      $(this).html(txt === 'Disable'? 'Enable': 'Disable');
      return false;
    });

    $('#submit-4').click(function() {
      uploaderCanBeDisabled.submit();
      return false;
    });
  });
</script>
</body>
</html>
