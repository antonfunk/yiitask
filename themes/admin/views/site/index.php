<h4>&Uuml;bersicht Artikel</h4>

<div class="row">
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Verzeichnisse <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i>&nbsp;Neuen Ordner</a></div>
            <div class="panel-body">
                <?php echo implode(PHP_EOL,$trees);?>
            </div>
        </div>

    </div>


    <div class="col-sm-3 col-sm-push-6">

        <div class="panel panel-default">
            <div class="panel-heading">Ordner-Eigenschaften</div>
            <div class="panel-body">

                <ul class="list-group">
                    <li class="list-group-item">Eigenschaft 1</li>
                    <li class="list-group-item">Eigenschaft 2</li>
                    <li class="list-group-item">Eigenschaft 3</li>
                    <li class="list-group-item">Eigenschaft 4</li>
                    <li class="list-group-item">Eigenschaft 5</li>
                    <li class="list-group-item">Eigenschaft 6</li>
                    <li class="list-group-item">Eigenschaft 7</li>
                </ul>

            </div>
        </div>
    </div>


    <div class="col-sm-6  col-sm-pull-3">
        <div class="panel panel-default">
            <div class="panel-heading">Artikel</div>
            <div class="panel-body">

                <?php for ($i=0; $i<=10; $i++) { ?>
                <div class="panel panel-warning">
                    <div class="panel-heading">Titel eines Artikels</div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-sm-12">
                        Lorem Ipsum sit Amet, der Fuchs rennt durch den Wald Lorem Ipsum sit Amet, der Fuchs rennt durch den WaldLorem Ipsum sit Amet, der Fuchs rennt durch den WaldLorem Ipsum sit Amet, der Fuchs rennt durch den Wald
                        </div>
                        </div>
<hr>
                        <div class="row">
                        <div class="col-sm-12">
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

                            <a href="#" class="btn btn-success btn-xs"><i class="fa fa-play"></i></a>
                            <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-stop"></i></a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pause"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <?php } ?>


                </div>
            </div>

    </div>




</div>
