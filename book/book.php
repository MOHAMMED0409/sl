<div class="bookcontainer">
<?php
$files = scandir("");
foreach($files as $file) {
    if($file !== "." && $file !== "..") {
        echo '<div class="book">';
        echo '<div class="bookpic" style="background-image: url(\'https://raw.githubusercontent.com/Poojavpatel/BookStoreApp/master/img/book-cover.jpg\');"></div>';
        echo '<div class="bookinfo">';
        echo '<div class="title">'.basename($file).'</div>';
        echo '<div class="author"></div>';
        echo '<div class="stars"></div>';
        echo '<ul class="controls">';
        echo '<li class="control">';
        echo '<a href="pdf_folder_path/'.$file.'" target="_blank">';
        echo '<svg class="icon icon--2x"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#download">';
        echo '<span class="invisible">Home</span></a></li>';
        echo '<li class="control">';
        echo '<a href="#"><svg class="icon icon--2x"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#edit">';
        echo '<span class="invisible">Search</span></a></li>';
        echo '<li class="control deletebutton">';
        echo '<a href="#"><svg class="icon icon--2x deletesvg"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#delete">';
        echo '<span class="invisible">Products</span></a></li>';
        echo '</ul><!--ul.controls ends-->';
        echo '</div><!--bookinfo ends-->';
        echo '</div><!--book end-->';
    }
}
?>
</div>

<!-- svg Data -->
<svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="download" viewBox="0 0 24 24"><path d="M21 14c-0.6 0-1 0.4-1 1v4c0 0.6-0.4 1-1 1h-14c-0.6 0-1-0.4-1-1v-4c0-0.6-0.4-1-1-1s-1 0.4-1 1v4c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-4c0-0.6-0.4-1-1-1z"></path>
    <path d="M11.3 15.7c0.1 0.1 0.2 0.2 0.3 0.2 0.1 0.1 0.3 0.1 0.4 0.1s0.3 0 0.4-0.1c0.1-0.1 0.2-0.1 0.3-0.2l5-5c0.4-0.4 0.4-1 0-1.4s-1-0.4-1.4 0l-3.3 3.3v-9.6c0-0.6-0.4-1-1-1s-1 0.4-1 1v9.
