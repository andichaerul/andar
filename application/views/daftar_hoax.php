<?php
foreach ($daftar_hoax as $row) {
echo "
<li>
      <a href='".$row->URL."' class='item-link item-content'>
        <div class='item-inner'>
          <div class='item-title-row'>
            <div class='item-title'>".getTitle($row->URL)."</div>
          </div>
          <div class='item-text'>".$row->URL."</div>
        </div>
      </a>
    </li>
";
}
?>