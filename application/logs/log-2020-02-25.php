<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-25 19:20:02 --> 404 Page Not Found: admin/Images/favicon.png
ERROR - 2020-02-25 19:20:06 --> 404 Page Not Found: admin/App/images
ERROR - 2020-02-25 19:20:16 --> Query error: Unknown column 'images' in 'where clause' - Invalid query: SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = images) as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = 'images' AND cost_sheet_category.sub_cat_id IS NULL
