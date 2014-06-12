<?php
$record = $_REQUEST['record'];
$product = CRMEntity::getInstance('Products');
$product->retrieve_entity_info($record, 'Products');
$product->insertIntoAttachment($record, 'Products');

