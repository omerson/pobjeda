<?php foreach ($parameters as $pl) { ?>   
         <?php echo $pl; ?>  
<?php } ?>


<?php if ($itemClass == 'Order') { ?>    
    <?php $v17712916021iterated = false; ?><?php $v17712916021iterator = $page->items; $v17712916021incr = 0; $v17712916021loop = new stdClass(); $v17712916021loop->length = count($v17712916021iterator); $v17712916021loop->index = 1; $v17712916021loop->index0 = 1; $v17712916021loop->revindex = $v17712916021loop->length; $v17712916021loop->revindex0 = $v17712916021loop->length - 1; ?><?php foreach ($v17712916021iterator as $item) { ?><?php $v17712916021loop->first = ($v17712916021incr == 0); $v17712916021loop->index = $v17712916021incr + 1; $v17712916021loop->index0 = $v17712916021incr; $v17712916021loop->revindex = $v17712916021loop->length - $v17712916021incr; $v17712916021loop->revindex0 = $v17712916021loop->length - ($v17712916021incr + 1); $v17712916021loop->last = ($v17712916021incr == ($v17712916021loop->length - 1)); ?><?php $v17712916021iterated = true; ?>
        <?php if ($v17712916021loop->first) { ?>
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Created by user</th>
                    <th>Created At</th>
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?php echo $this->tag->linkTo(array('items/order/' . $item->idOrder, $item->idOrder, 'class' => 'btn')); ?></td>                    
                    <td><?php echo $this->tag->linkTo(array('users/edit/' . $item->User, $this->auth->getUserNameById($item->User), 'class' => 'btn')); ?></td>
                    <td><?php echo date('Y-m-d H:i:s', $item->createdAt); ?></td> 
                </tr>
            </tbody>
        <?php if ($v17712916021loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=order', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=order&page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=order&page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=order&page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                            <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <?php } ?>
    <?php $v17712916021incr++; } if (!$v17712916021iterated) { ?>
    No items are recorded
    <?php } ?>

<?php } ?>

<?php if ($itemClass == 'PackingList') { ?>
    <?php $v17712916021iterated = false; ?><?php $v17712916021iterator = $page->items; $v17712916021incr = 0; $v17712916021loop = new stdClass(); $v17712916021loop->length = count($v17712916021iterator); $v17712916021loop->index = 1; $v17712916021loop->index0 = 1; $v17712916021loop->revindex = $v17712916021loop->length; $v17712916021loop->revindex0 = $v17712916021loop->length - 1; ?><?php foreach ($v17712916021iterator as $item) { ?><?php $v17712916021loop->first = ($v17712916021incr == 0); $v17712916021loop->index = $v17712916021incr + 1; $v17712916021loop->index0 = $v17712916021incr; $v17712916021loop->revindex = $v17712916021loop->length - $v17712916021incr; $v17712916021loop->revindex0 = $v17712916021loop->length - ($v17712916021incr + 1); $v17712916021loop->last = ($v17712916021incr == ($v17712916021loop->length - 1)); ?><?php $v17712916021iterated = true; ?>
        <?php if ($v17712916021loop->first) { ?>
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Packing list Id</th>
                    <th>Shipment number</th>
                    <th>Shipment date</th>
                    <th>Delivery note</th>
                    <th>Sender name</th>
                    <th>Sender code</th>
                    <th>Receiver name</th>
                    <th>Receiver code</th>
                    <th>Item type</th>
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?php echo $this->tag->linkTo(array('items/packingList/' . $item->idPacking_List, $item->idPacking_List, 'class' => 'btn')); ?></td>
                    <td><?php echo $item->Shipment_Number; ?></td>
                    <td><?php echo $item->Shipment_Date; ?></td>
                    <td><?php echo $item->Delivery_Note; ?></td>
                    <td><?php echo $item->Sender_Name; ?></td>
                    <td><?php echo $item->Sender_Code; ?></td>
                    <td><?php echo $item->Receiver_Name; ?></td>
                    <td><?php echo $item->Receiver_Code; ?></td>
                    <td><?php echo $item->Item_Type; ?></td>
                </tr>
            </tbody>
        <?php if ($v17712916021loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=packinglist', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=packinglist&page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=packinglist&page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=packinglist&page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                            <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <?php } ?>
    <?php $v17712916021incr++; } if (!$v17712916021iterated) { ?>
    No items are recorded
    <?php } ?>
    
<?php } ?>

<?php if ($itemClass == 'Palete') { ?>

    <?php $v17712916021iterated = false; ?><?php $v17712916021iterator = $page->items; $v17712916021incr = 0; $v17712916021loop = new stdClass(); $v17712916021loop->length = count($v17712916021iterator); $v17712916021loop->index = 1; $v17712916021loop->index0 = 1; $v17712916021loop->revindex = $v17712916021loop->length; $v17712916021loop->revindex0 = $v17712916021loop->length - 1; ?><?php foreach ($v17712916021iterator as $item) { ?><?php $v17712916021loop->first = ($v17712916021incr == 0); $v17712916021loop->index = $v17712916021incr + 1; $v17712916021loop->index0 = $v17712916021incr; $v17712916021loop->revindex = $v17712916021loop->length - $v17712916021incr; $v17712916021loop->revindex0 = $v17712916021loop->length - ($v17712916021incr + 1); $v17712916021loop->last = ($v17712916021incr == ($v17712916021loop->length - 1)); ?><?php $v17712916021iterated = true; ?>
        <?php if ($v17712916021loop->first) { ?>
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Palete Id</th>
                    <th>GS1_Code</th>
                    <th>Item type</th>
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?php echo $this->tag->linkTo(array('items/palete/' . $item->idPalete, $item->idPalete, 'class' => 'btn')); ?></td>
                    <td><?php echo $item->GS1_Code; ?></td>
                    <td><?php echo $item->Item_Type; ?></td>
                </tr>
            </tbody>
        <?php if ($v17712916021loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=palete', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=palete&page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=palete&page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=palete&page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                            <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <?php } ?>
    <?php $v17712916021incr++; } if (!$v17712916021iterated) { ?>
    No items are recorded
    <?php } ?>

<?php } ?>

<?php if ($itemClass == 'Artupal') { ?>

    <?php $v17712916021iterated = false; ?><?php $v17712916021iterator = $page->items; $v17712916021incr = 0; $v17712916021loop = new stdClass(); $v17712916021loop->length = count($v17712916021iterator); $v17712916021loop->index = 1; $v17712916021loop->index0 = 1; $v17712916021loop->revindex = $v17712916021loop->length; $v17712916021loop->revindex0 = $v17712916021loop->length - 1; ?><?php foreach ($v17712916021iterator as $item) { ?><?php $v17712916021loop->first = ($v17712916021incr == 0); $v17712916021loop->index = $v17712916021incr + 1; $v17712916021loop->index0 = $v17712916021incr; $v17712916021loop->revindex = $v17712916021loop->length - $v17712916021incr; $v17712916021loop->revindex0 = $v17712916021loop->length - ($v17712916021incr + 1); $v17712916021loop->last = ($v17712916021incr == ($v17712916021loop->length - 1)); ?><?php $v17712916021iterated = true; ?>
        <?php if ($v17712916021loop->first) { ?>
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Artupal Id</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Lot number</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>
                    <th>Count of units</th>
                    <th>Item type</th>                    
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?php echo $this->tag->linkTo(array('items/artupal/' . $item->idArtupal, $item->idArtupal, 'class' => 'btn')); ?></td>
                    <td><?php echo $item->Product_Code; ?></td>
                    <td><?php echo $item->Description; ?></td>
                    <td><?php echo $item->Lot_Number; ?></td>
                    <td><?php echo $item->Quantity; ?></td>
                    <td><?php echo $item->Unit_Of_Measure; ?></td>
                    <td><?php echo $item->Count_Of_Units; ?></td>
                    <td><?php echo $item->Item_Type; ?></td>
                </tr>
            </tbody>
        <?php if ($v17712916021loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=artupal&', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=artupal&page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=artupal&page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=artupal&page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                            <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <?php } ?>
    <?php $v17712916021incr++; } if (!$v17712916021iterated) { ?>
    No items are recorded
    <?php } ?>

<?php } ?>

<?php if ($itemClass == 'Paketi') { ?>

    <?php $v17712916021iterated = false; ?><?php $v17712916021iterator = $page->items; $v17712916021incr = 0; $v17712916021loop = new stdClass(); $v17712916021loop->length = count($v17712916021iterator); $v17712916021loop->index = 1; $v17712916021loop->index0 = 1; $v17712916021loop->revindex = $v17712916021loop->length; $v17712916021loop->revindex0 = $v17712916021loop->length - 1; ?><?php foreach ($v17712916021iterator as $item) { ?><?php $v17712916021loop->first = ($v17712916021incr == 0); $v17712916021loop->index = $v17712916021incr + 1; $v17712916021loop->index0 = $v17712916021incr; $v17712916021loop->revindex = $v17712916021loop->length - $v17712916021incr; $v17712916021loop->revindex0 = $v17712916021loop->length - ($v17712916021incr + 1); $v17712916021loop->last = ($v17712916021incr == ($v17712916021loop->length - 1)); ?><?php $v17712916021iterated = true; ?>
        <?php if ($v17712916021loop->first) { ?>
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Paketi Id</th>
                    <th>Item number</th>
                    <th>Item type</th>   
                    <th>Unique number</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Production date</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>                    
                    <th>Count of units</th>
                    <th>Number of items</th>
                    <th>GS1 code</th>
                    <th>Country code</th>                    
                    <th>Site code</th>                    
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?php echo $this->tag->linkTo(array('items/paketi/' . $item->idPaketi, $item->idPaketi, 'class' => 'btn')); ?></td>
                    <td><?php echo $item->Item_Number; ?></td>
                    <td><?php echo $item->Item_Type; ?></td>
                    <td><?php echo $item->Unique_Number; ?></td>
                    <td><?php echo $item->Product_Code; ?></td>
                    <td><?php echo $item->Description; ?></td>
                    <td><?php echo $item->Production_Date; ?></td>
                    <td><?php echo $item->Quantity; ?></td>
                    <td><?php echo $item->Unit_Of_Measure; ?></td>
                    <td><?php echo $item->Count_Of_Units; ?></td>
                    <td><?php echo $item->Number_Of_Items; ?></td>
                    <td><?php echo $item->GS1_Code; ?></td>
                    <td><?php echo $item->Country_Code; ?></td>
                    <td><?php echo $item->Site_Code; ?></td>
                </tr>
            </tbody>
        <?php if ($v17712916021loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=paketi', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=paketi&page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=paketi&page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=paketi&page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                            <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <?php } ?>
    <?php $v17712916021incr++; } if (!$v17712916021iterated) { ?>
    No items are recorded
    <?php } ?>

<?php } ?>

<?php if ($itemClass == 'Mikro') { ?>

 <?php $v17712916021iterated = false; ?><?php $v17712916021iterator = $page->items; $v17712916021incr = 0; $v17712916021loop = new stdClass(); $v17712916021loop->length = count($v17712916021iterator); $v17712916021loop->index = 1; $v17712916021loop->index0 = 1; $v17712916021loop->revindex = $v17712916021loop->length; $v17712916021loop->revindex0 = $v17712916021loop->length - 1; ?><?php foreach ($v17712916021iterator as $item) { ?><?php $v17712916021loop->first = ($v17712916021incr == 0); $v17712916021loop->index = $v17712916021incr + 1; $v17712916021loop->index0 = $v17712916021incr; $v17712916021loop->revindex = $v17712916021loop->length - $v17712916021incr; $v17712916021loop->revindex0 = $v17712916021loop->length - ($v17712916021incr + 1); $v17712916021loop->last = ($v17712916021incr == ($v17712916021loop->length - 1)); ?><?php $v17712916021iterated = true; ?>
        <?php if ($v17712916021loop->first) { ?>
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Mikro Id</th>
                    <th>Item number</th>
                    <th>Item type</th>   
                    <th>Unique number</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Production date</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>                    
                    <th>Count of units</th>
                    <th>Number of items</th>
                    <th>GS1 code</th>
                    <th>Country code</th>                    
                    <th>Site code</th>                    
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?php echo $this->tag->linkTo(array('items/mikro/' . $item->idMikro, $item->idMikro, 'class' => 'btn')); ?></td>
                    <td><?php echo $item->Item_Number; ?></td>
                    <td><?php echo $item->Item_Type; ?></td>
                    <td><?php echo $item->Unique_Number; ?></td>
                    <td><?php echo $item->Product_Code; ?></td>
                    <td><?php echo $item->Description; ?></td>
                    <td><?php echo $item->Production_Date; ?></td>
                    <td><?php echo $item->Quantity; ?></td>
                    <td><?php echo $item->Unit_Of_Measure; ?></td>
                    <td><?php echo $item->Count_Of_Units; ?></td>
                    <td><?php echo $item->Number_Of_Items; ?></td>
                    <td><?php echo $item->GS1_Code; ?></td>
                    <td><?php echo $item->Country_Code; ?></td>
                    <td><?php echo $item->Site_Code; ?></td>
                </tr>
            </tbody>
        <?php if ($v17712916021loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=mikro', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=mikro&page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=mikro&page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=mikro&page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                            <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <?php } ?>
    <?php $v17712916021incr++; } if (!$v17712916021iterated) { ?>
    No items are recorded
    <?php } ?>

<?php } ?>

<?php if ($itemClass == 'Jedinicno') { ?>

 <?php $v17712916021iterated = false; ?><?php $v17712916021iterator = $page->items; $v17712916021incr = 0; $v17712916021loop = new stdClass(); $v17712916021loop->length = count($v17712916021iterator); $v17712916021loop->index = 1; $v17712916021loop->index0 = 1; $v17712916021loop->revindex = $v17712916021loop->length; $v17712916021loop->revindex0 = $v17712916021loop->length - 1; ?><?php foreach ($v17712916021iterator as $item) { ?><?php $v17712916021loop->first = ($v17712916021incr == 0); $v17712916021loop->index = $v17712916021incr + 1; $v17712916021loop->index0 = $v17712916021incr; $v17712916021loop->revindex = $v17712916021loop->length - $v17712916021incr; $v17712916021loop->revindex0 = $v17712916021loop->length - ($v17712916021incr + 1); $v17712916021loop->last = ($v17712916021incr == ($v17712916021loop->length - 1)); ?><?php $v17712916021iterated = true; ?>
        <?php if ($v17712916021loop->first) { ?>
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>Jedinicno Id</th>
                    <th>Item number</th>
                    <th>Item type</th>   
                    <th>Unique number</th>
                    <th>Product code</th>
                    <th>Description</th>
                    <th>Production date</th>
                    <th>Quantity</th>
                    <th>Unit of measure</th>                    
                    <th>Count of units</th>
                    <th>Number of items</th>
                    <th>GS1 code</th>
                    <th>Country code</th>                    
                    <th>Site code</th>                    
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?php echo $this->tag->linkTo(array('items/jedinicno/' . $item->idJedinicno, $item->idJedinicno, 'class' => 'btn')); ?></td>
                    <td><?php echo $item->Item_Number; ?></td>
                    <td><?php echo $item->Item_Type; ?></td>
                    <td><?php echo $item->Unique_Number; ?></td>
                    <td><?php echo $item->Product_Code; ?></td>
                    <td><?php echo $item->Description; ?></td>
                    <td><?php echo $item->Production_Date; ?></td>
                    <td><?php echo $item->Quantity; ?></td>
                    <td><?php echo $item->Unit_Of_Measure; ?></td>
                    <td><?php echo $item->Count_Of_Units; ?></td>
                    <td><?php echo $item->Number_Of_Items; ?></td>
                    <td style="word-break:break-all;"><?php echo $item->GS1_Code; ?></td>
                    <td><?php echo $item->Country_Code; ?></td>
                    <td><?php echo $item->Site_Code; ?></td>
                </tr>
            </tbody>
        <?php if ($v17712916021loop->last) { ?>
            <tbody>
                <tr>
                    <td colspan="10" align="right">
                        <div class="btn-group">
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=jedinicno', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=jedinicno&page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=jedinicno&page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                            <?php echo $this->tag->linkTo(array('items/search?itemtype=jedinicno&page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                            <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <?php } ?>
    <?php $v17712916021incr++; } if (!$v17712916021iterated) { ?>
    No items are recorded
    <?php } ?>

<?php } ?>


