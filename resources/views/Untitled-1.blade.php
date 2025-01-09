<div>
    <div class="tab-content">
        <div id="#tba-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <?php

                $sql = "SELECT image,text,description,price FROM `tbl_menu_item`";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die('invalid query!');
                } ?>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">


                            <img class="mb-3" src="../back-end/<?php echo $row['image'] ?>"
                                style="height:50px; width:50px;">


                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span><?php echo $row['text'] ?></span>
                                    <span class="text-primary">₹<?php echo $row['price'] ?></span>
                                </h5>
                                <small class="fst-italic"><?php echo $row['description'] ?></small>
                            </div>
                        </div>
                    </div>
                <?php } ?>





                <div id="" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <?php
                        $sql = "SELECT image,text,description,price FROM `tbl_menu_item`";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            die('invalid query!');
                        } ?>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="mb-3" src="../back-end/<?php echo $row['image'] ?>"
                                        style="height:50px; width:50px;">
                                    <!-- <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;"> -->
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span><?php echo $row['text'] ?></span>
                                            <span class="text-primary">₹<?php echo $row['price'] ?></span>
                                        </h5>
                                        <small class="fst-italic"><?php echo $row['description'] ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
