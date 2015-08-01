<div class="row">
    <?php

    $store = array(
        array("column_12", "1 Column"),
        array("column_6_6", "2 Columns (50%)"),
        array("column_4_4_4", "3 Columns (33%)"),
        array("column_3_3_3_3", "4 Columns (25%)"),

        array("column_4_8", "2 Columns (1/3 and 2/3)"),
        array("column_8_4", "2 Columns (2/3 and 1/3)"),

        array("column_3_9", "2 Columns (1/4 and 3/4)"),
        array("column_9_3", "2 Columns (3/4 and 1/4)"),

        array("column_5_2_5", "2 Columns (5/2/5)"),
        array("column_2_5_5", "2 Columns (2/5/5)"),
        array("column_5_5_2", "2 Columns (5/5/2)")
    );

    if ($this->editmode) {
        if ($this->select("type")->isEmpty()) {
            $this->select("type")->setDataFromResource("column_12");
        } ?>

        <div class="col-xs-12">
            <?= $this->select("type", array("reload" => true, "store" => $store)); ?>
        </div>
    <?php
    }

    $type = $this->select("type")->getData();

    if ($type) {
        $type = explode("_", $type);

        $type_partial = $type[0];
        $columns = array_splice($type, 1);

        $params = array(
            "columns" => $columns
        );

        $this->template("bootstrap/columns/" . $type_partial . ".php", $params);
    } ?>
</div>
