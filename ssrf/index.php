<?php
if(isset($_GET['image'])) {
  header("content-type: image/jpeg");
  file_get_contents($_GET['image']);
}
else {
?>
<p><a href='/ssrf/?image=lights_at_the_sea.jpg' target="_blank">Посмотреть картинку</a></p>
<p><a href='/ssrf/?image=file:///home/projects/hse2/lights_at_the_sea.jpg' target="_blank">Применение SSRF - локальный файл</a></p>
<p><a href='/ssrf/?image=https://www.hse.ru/pubs/share/direct/1132084150.jpg' target="_blank">Применение SSRF - remote файл</a></p>
<?php
}