<?php

$store = array(
    array("alert-success", "Success"),
    array("alert-info", "Info"),
    array("alert-warning", "Warning"),
    array("alert-danger", "Danger")
);

if ($this->editmode) {
    if ($this->select("type")->isEmpty()) {
        $this->select("type")->setDataFromResource("alert-success");
    }

    echo $this->select("type", array("reload" => true, "store" => $store));

    ?><br/><?php

    ?><label>Dismissable</label><?php
    echo $this->checkbox("dismissable");
}

$type = $this->select("type")->getData();
$dismissable = $this->checkbox("dismissable")->isChecked();
?>

<div class="alert <?= $type ?> <?= $dismissable ? "alert-dismissable" : "" ?>">

    <?php if ($dismissable) { ?>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php } ?>

    <?= $this->areablock('a-' . $this->brick->getIndex()) // TODO: , array("excludeBricks" => array("alert", "panel", "accordion"))) ?>
</div>
