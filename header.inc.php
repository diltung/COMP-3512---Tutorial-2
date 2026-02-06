<header class="header">  
  <div class="header__wrapper">
    <h1 class="header__heading">Art Store</h1>
    <nav class="navigation">
      <ul class="navigation__list">
        <?php
        foreach ($links as $link) {
            echo "<li class='navigation__list-item'>
                    <a href='{$link['url']}'>{$link['label']}</a>
                  </li>";
        }
        ?>
      </ul>
    </nav>  
  </div>
</header>