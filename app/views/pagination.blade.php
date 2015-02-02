<?php
    $presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);

    $trans = $environment->getTranslator();
?>

@if ($paginator->getLastPage() > 1)
    <ul class="list-unstyled">
        {{ $presenter->getPrevious($trans->trans('<img class="pull-left" src="http://localhost:8000/images/btn/previous.png" alt="Previous Page">')) }}

        {{ $presenter->getNext($trans->trans('<img class="pull-right" src="http://localhost:8000/images/btn/next.png" alt="Next Page">')) }}
    </ul>
@endif