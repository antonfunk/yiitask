<div id="mainmenu">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <?php
                $count = count($menu);
                foreach ($menu as $m) {
                    echo '<li>' . CHtml::link($m['label'], $m['url']) . '</li>';
                }
                ?>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>
</div>