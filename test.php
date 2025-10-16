<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>AJAX Test</title>
</head>
<body>

<div class="menu-actions">
  <form id="sample_form">
    <input type="hidden" name="nub" value="1" class="form_data">
    <input type="hidden" name="pop" value="2" class="form_data">
    <input type="hidden" name="cod" value="ABC123" class="form_data">
    <input type="hidden" name="code" value="EMAIL123" class="form_data">
    <input type="hidden" name="dod" value="ProductName" class="form_data">
    <input type="hidden" name="vop" value="image.jpg" class="form_data">
    <input type="hidden" name="tod" value="2025-10-06" class="form_data">

    <button type="submit" id="submit">+</button>
  </form>
</div>

<div id="message"></div>

<script>
document.getElementById('sample_form').addEventListener('submit', function(e) {
    e.preventDefault();                // 🔴 stop the page reload
    const btn = document.getElementById('submit');
    btn.disabled = true;

    const formData = new FormData(this);

    fetch('rod5.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById('message').innerHTML = data;
        btn.disabled = false;
    })
    .catch(err => {
        document.getElementById('message').innerHTML = 'Error: ' + err;
        btn.disabled = false;
    });
});
</script>

</body>
</html>
