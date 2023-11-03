SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00040102005004883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.11940217018127

SHOW TABLES FROM `ospos` 
 Execution Time:0.004472017288208

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.015990972518921

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.020313024520874

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00082707405090332

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054287910461426

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00057411193847656

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00052618980407715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0006709098815918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.050065994262695

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.018003940582275

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.036731958389282

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036089420318604

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00078392028808594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065112113952637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050711631774902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00096392631530762

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00062298774719238

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00032782554626465

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00053906440734863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059795379638672

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042891502380371

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00084495544433594

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030989646911621

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00050497055053711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0013689994812012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070810317993164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059103965759277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048184394836426

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.017194032669067

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.016489028930664

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00078606605529785

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.015413999557495

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00037217140197754

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.073147773742676

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0091462135314941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053906440734863

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00031709671020508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0003361701965332

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.011248111724854

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00046205520629883

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.013620138168335

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.0055201053619385

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0013229846954346

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.012290000915527

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0036280155181885

SHOW TABLES FROM `ospos` 
 Execution Time:0.0039920806884766

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00096297264099121

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.002932071685791

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021600723266602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080394744873047

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011899471282959

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064301490783691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00074005126953125

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00042605400085449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0010559558868408

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011000633239746

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036258697509766

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0050868988037109

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00087499618530273

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0030431747436523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0051629543304443

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013890266418457

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010490417480469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.010049819946289

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.024194002151489

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.030659914016724

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0019989013671875

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.00042605400085449

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00032281875610352

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18' 
 Execution Time:0.00064301490783691

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount - cash_refund) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00082302093505859

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0019989013671875

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.0087218284606934

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00079202651977539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069308280944824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010371208190918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011970996856689

SHOW TABLES FROM `ospos` 
 Execution Time:0.0059919357299805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00066113471984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0008389949798584

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069999694824219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063991546630859

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00079512596130371

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00080609321594238

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00035500526428223

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.33851790428162

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.018194913864136

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00035214424133301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038981437683105

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00027203559875488

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00052380561828613

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00063991546630859

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00038409233093262

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00078606605529785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006251335144043

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0010039806365967

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030100345611572

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048494338989258

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00075411796569824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017290115356445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067687034606934

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066900253295898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013539791107178

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00092911720275879

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.028770923614502

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%i%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00062084197998047

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%i%' ESCAPE '!'
OR  `item_kit_number` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.012992858886719

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0047950744628906

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.0003058910369873

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0003972053527832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00066804885864258

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0015668869018555

SHOW TABLES FROM `ospos` 
 Execution Time:0.0041460990905762

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0010161399841309

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.001215934753418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050711631774902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '6' 
 Execution Time:0.00099897384643555

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00099611282348633

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 6
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  2 
 Execution Time:0.051959991455078

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00031018257141113

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.014266967773438

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.0029361248016357

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.000885009765625

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00080013275146484

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00032591819763184

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.01695990562439

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0065321922302246

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.014109134674072

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050616264343262

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041794776916504

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00045204162597656

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00037908554077148

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00057601928710938

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00076794624328613

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.0002899169921875

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00039887428283691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063204765319824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00083589553833008

SHOW TABLES FROM `ospos` 
 Execution Time:0.013028144836426

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0083069801330566

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.010621070861816

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.006242036819458

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0045349597930908

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0080001354217529

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0037908554077148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0064959526062012

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00095891952514648

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00084900856018066

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.55829215049744

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.027384042739868

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00095200538635254

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0031559467315674

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00042891502380371

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0063700675964355

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0070080757141113

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00085997581481934

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00047612190246582

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00029897689819336

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0090939998626709

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.029335975646973

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.0005791187286377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067806243896484

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.0011730194091797

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064611434936523

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00039792060852051

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00072503089904785

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00068402290344238

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0031049251556396

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.0012860298156738

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00049901008605957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0026078224182129

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0013270378112793

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086712837219238

SHOW TABLES FROM `ospos` 
 Execution Time:0.0045759677886963

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003969669342041

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061893463134766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040316581726074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039887428283691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063395500183105

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00080299377441406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058197975158691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007789134979248

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00046205520629883

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00036787986755371

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.026188135147095

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.033921003341675

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00052118301391602

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00070500373840332

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2023-10-18 07:59:02', NULL, '1', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.0023820400238037

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `cash_adjustment`, `employee_id`) VALUES (13, 'Cash', 1000, 0, 0, '1') 
 Execution Time:0.0016930103302002

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.009486198425293

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0043230056762695

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.050249814987183

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.014256000518799

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '6'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.01810097694397

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (13, '6', 1, '', '', 1, '0', '0', '900.00', '1000.00', '1', 0) 
 Execution Time:0.00229811668396

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00037193298339844

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00031805038452148

UPDATE `ospos_item_quantities` SET `quantity` = 631, `item_id` = '6', `location_id` = '1'
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.0019071102142334

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-18 07:59:02', '6', '1', '1', 'POS 13', -1) 
 Execution Time:0.071852922439575

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			SELECT '6', definition_id, attribute_id, 13
			FROM ospos_attribute_links
			WHERE item_id = '6' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.002453088760376

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00047707557678223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00075984001159668

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00051784515380859

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00097107887268066

SHOW TABLES FROM `ospos` 
 Execution Time:0.0047111511230469

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0013720989227295

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011699199676514

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064706802368164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0017750263214111

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080490112304688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010409355163574

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00089597702026367

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00085902214050293

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0006260871887207

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00043296813964844

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.019266843795776

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0066571235656738

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005488395690918

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0017201900482178

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00059318542480469

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00060105323791504

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00063204765319824

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00031018257141113

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00052714347839355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0034158229827881

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0019490718841553

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016169548034668

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038151741027832

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00087904930114746

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0015099048614502

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0097930431365967

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0019419193267822

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001629114151001

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012710094451904

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%t%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00067305564880371

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%t%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0014419555664062

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%t%' ESCAPE '!'
OR  `item_kit_number` LIKE '%t%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0023951530456543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0007779598236084

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00038313865661621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00055909156799316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001737117767334

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00060796737670898

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086784362792969

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026848316192627

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00077009201049805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011827945709229

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056886672973633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007929801940918

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '6' 
 Execution Time:0.00058507919311523

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00068783760070801

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 6
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  2 
 Execution Time:0.0007331371307373

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00036311149597168

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00031495094299316

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.0032539367675781

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00059008598327637

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0018258094787598

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0022609233856201

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.090178966522217

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0074360370635986

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00089788436889648

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00084900856018066

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00033307075500488

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00041007995605469

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00043296813964844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00063800811767578

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00033092498779297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00079798698425293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052785873413086

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00030899047851562

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00078606605529785

SHOW TABLES FROM `ospos` 
 Execution Time:0.0039379596710205

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00033688545227051

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013940334320068

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012118816375732

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016109943389893

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072407722473145

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.0040199756622314

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00085997581481934

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0005028247833252

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0010371208190918

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00053310394287109

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.040763854980469

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.20298099517822

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055313110351562

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00041484832763672

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00066113471984863

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00052499771118164

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00054597854614258

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00036787986755371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060820579528809

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00085783004760742

SHOW TABLES FROM `ospos` 
 Execution Time:0.0028171539306641

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040102005004883

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046992301940918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064587593078613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005500316619873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056195259094238

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0031719207763672

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0011072158813477

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.044301986694336

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0077979564666748

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0003960132598877

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0060949325561523

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0066611766815186

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00040698051452637

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0020570755004883

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00094199180603027

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00026988983154297

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0068290233612061

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0068919658660889

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.0004267692565918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015749931335449

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.0004420280456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00097012519836426

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00042295455932617

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0010700225830078

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00060892105102539

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063014030456543

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00057291984558105

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0011889934539795

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026988983154297

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006568431854248

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077605247497559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011200904846191

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0023651123046875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016169548034668

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0057740211486816

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025758743286133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0022220611572266

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00092387199401855

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00066208839416504

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.020998954772949

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.007498025894165

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0016241073608398

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2023-10-18 07:59:19', NULL, '1', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.0010600090026855

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `cash_adjustment`, `employee_id`) VALUES (14, 'Cash', 22000, 0, 0, '1') 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00057482719421387

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00049591064453125

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0095059871673584

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.007159948348999

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '6'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00096511840820312

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (14, '6', 1, '', '', 22, 0, '0', '900.00', 1000, '1', 0) 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.0020749568939209

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00056004524230957

UPDATE `ospos_item_quantities` SET `quantity` = 609, `item_id` = '6', `location_id` = '1'
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00081610679626465

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-18 07:59:19', '6', '1', '1', 'POS 14', -22) 
 Execution Time:0.0004279613494873

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			SELECT '6', definition_id, attribute_id, 14
			FROM ospos_attribute_links
			WHERE item_id = '6' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00049591064453125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00049781799316406

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00037312507629395

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00047087669372559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062298774719238

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00060486793518066

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00084400177001953

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026957988739014

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00091791152954102

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052595138549805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077581405639648

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0020370483398438

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00071406364440918

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00044703483581543

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.047455072402954

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0081071853637695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00038003921508789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0018818378448486

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00042510032653809

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00053787231445312

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00050997734069824

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00045108795166016

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00040793418884277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051784515380859

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042390823364258

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0028941631317139

SHOW TABLES FROM `ospos` 
 Execution Time:0.0062220096588135

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043416023254395

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00064301490783691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015430450439453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046110153198242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065898895263672

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00085282325744629

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00057506561279297

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00035309791564941

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.045006990432739

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.020204067230225

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055909156799316

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037193298339844

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00028181076049805

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.0070281028747559

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00043392181396484

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00060701370239258

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00036787986755371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053906440734863

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00083303451538086

SHOW TABLES FROM `ospos` 
 Execution Time:0.0065720081329346

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0007021427154541

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0004878044128418

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080108642578125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049781799316406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044822692871094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0053648948669434

SELECT *
FROM `ospos_sales`
WHERE `invoice_number` = '2' 
 Execution Time:0.015648126602173

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%2%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0017080307006836

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%2%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%2%' ESCAPE '!'
OR  `item_kit_number` LIKE '%2%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00071406364440918

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00048995018005371

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.0005180835723877

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079202651977539

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00095510482788086

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026149749755859

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076413154602051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021538734436035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012261867523193

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067591667175293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_sales`
WHERE `invoice_number` = '2' 
 Execution Time:0.00043797492980957

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '2' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00068497657775879

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 2
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  2 
 Execution Time:0.00089192390441895

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00032496452331543

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00029397010803223

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.0038080215454102

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.0003669261932373

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00042390823364258

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00092601776123047

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00031399726867676

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.02810001373291

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.012866020202637

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00032806396484375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00027608871459961

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00055503845214844

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0026109218597412

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00077509880065918

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00055789947509766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00061297416687012

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00099396705627441

SHOW TABLES FROM `ospos` 
 Execution Time:0.0030028820037842

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00038480758666992

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052809715270996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091004371643066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052189826965332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073695182800293

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00030398368835449

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.01820707321167

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0107421875

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00051784515380859

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00052499771118164

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0003509521484375

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0068871974945068

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0084419250488281

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00039005279541016

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00038003921508789

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00034618377685547

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0049581527709961

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.011150121688843

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00032806396484375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046205520629883

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00031399726867676

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00060510635375977

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00049901008605957

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0010309219360352

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00034594535827637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00065803527832031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00094389915466309

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026340484619141

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044512748718262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00066685676574707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052380561828613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055909156799316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075602531433105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006558895111084

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00098896026611328

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056195259094238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00041103363037109

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.44456791877747

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.15451002120972

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0046751499176025

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2023-10-18 07:59:35', NULL, '1', '', 0, NULL, NULL, NULL, NULL, 4) 
 Execution Time:0.0034358501434326

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `cash_adjustment`, `employee_id`) VALUES (15, 'Cash', -110, 0, 0, '1') 
 Execution Time:0.011564970016479

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.022758007049561

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00031805038452148

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.44496011734009

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.016769170761108

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '2'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00087308883666992

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (15, '2', 1, '', '', -1, '0', '0', '100.00', '110.00', '1', 0) 
 Execution Time:0.00040888786315918

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.0054237842559814

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00039505958557129

UPDATE `ospos_item_quantities` SET `quantity` = 106, `item_id` = '2', `location_id` = '1'
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00042510032653809

UPDATE `ospos_items` SET `deleted` = 0
WHERE `item_id` = '2' 
 Execution Time:0.00031304359436035

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-18 07:59:35', '2', '1', '1', 'POS 15', 1) 
 Execution Time:0.00030708312988281

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			SELECT '2', definition_id, attribute_id, 15
			FROM ospos_attribute_links
			WHERE item_id = '2' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.0018119812011719

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00050210952758789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0022280216217041

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.0003509521484375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00043010711669922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053310394287109

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00084900856018066

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026979446411133

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043821334838867

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013389587402344

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007171630859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00069284439086914

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0053648948669434

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0018019676208496

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00069999694824219

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.083620071411133

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.021868944168091

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050091743469238

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00034093856811523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0003199577331543

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00066113471984863

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00052618980407715

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0011470317840576

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00087499618530273

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0010740756988525

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0040910243988037

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0006868839263916

SHOW TABLES FROM `ospos` 
 Execution Time:0.0034618377685547

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045299530029297

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048089027404785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055885314941406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051379203796387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051379203796387

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062704086303711

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021710395812988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00052213668823242

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00047421455383301

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00053811073303223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00038599967956543

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00065398216247559

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026447772979736

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00038909912109375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00036716461181641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00073504447937012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055503845214844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042581558227539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098609924316406

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00069785118103027

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0081760883331299

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0011889934539795

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0013339519500732

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.00029897689819336

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00054311752319336

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18' 
 Execution Time:0.00074982643127441

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount - cash_refund) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.0006871223449707

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0027868747711182

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00036287307739258

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00042891502380371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014941692352295

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.001162052154541

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0016129016876221

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018880367279053

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00099802017211914

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0010020732879639

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040507316589355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053310394287109

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00076007843017578

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00038695335388184

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00024795532226562

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.018537044525146

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0075399875640869

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012390613555908

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00036287307739258

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00037097930908203

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00052809715270996

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00032997131347656

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00042200088500977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053191184997559

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046014785766602

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00028300285339355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00066304206848145

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00023198127746582

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019350051879883

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00060200691223145

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052189826965332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006258487701416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012350082397461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053596496582031

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0027170181274414

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0012919902801514

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.017374038696289

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00724196434021

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064492225646973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043416023254395

SELECT *
FROM `ospos_tax_codes`
WHERE `tax_code_id` = ''
AND `deleted` = 0 
 Execution Time:0.0244460105896

SHOW COLUMNS FROM `ospos_tax_codes` 
 Execution Time:0.0047769546508789

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.018075942993164

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = -1
				GROUP BY sale_id
			) 
 Execution Time:0.00079202651977539

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = -1
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00050687789916992

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00029706954956055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009770393371582

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00073695182800293

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00030303001403809

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00038790702819824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048303604125977

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00036907196044922

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00083589553833008

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00036883354187012

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00036001205444336

SHOW TABLES FROM `ospos` 
 Execution Time:0.0039119720458984

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043106079101562

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052809715270996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051116943359375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055885314941406

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_people`.`email` = 'rehman.qayyum17@gmail.com'
AND `ospos_customers`.`deleted` = 0 
 Execution Time:0.0033760070800781

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00053095817565918

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00040817260742188

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00042581558227539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:0.00040388107299805

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00082302093505859

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00027298927307129

SHOW TABLES FROM `ospos` 
 Execution Time:0.003493070602417

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00036501884460449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00036001205444336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039482116699219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041794776916504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007789134979248

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00051188468933105

INSERT INTO `ospos_people` (`first_name`, `last_name`, `gender`, `email`, `phone_number`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`) VALUES ('Abdulrehman', 'Malik', '1', 'rehman.qayyum17@gmail.com', '03217440116', 'Jamia masjid makki, abadi mir muzaffer', 'Jamia masjid makki, abadi mir muzaffer', 'Gujranwala', '', '50250', 'Pakistan', '') 
 Execution Time:0.001032829284668

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00037503242492676

INSERT INTO `ospos_customers` (`consent`, `account_number`, `tax_id`, `company_name`, `discount`, `discount_type`, `package_id`, `taxable`, `date`, `employee_id`, `sales_tax_code_id`, `person_id`) VALUES (1, NULL, '', NULL, 0, '0', NULL, 1, '2023-10-18 08:02:35', '1', NULL, 6) 
 Execution Time:0.0017008781433105

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00081014633178711

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00032806396484375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00058388710021973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075006484985352

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0010931491851807

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0022480487823486

SHOW TABLES FROM `ospos` 
 Execution Time:0.0038039684295654

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0055389404296875

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0017170906066895

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0036380290985107

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012779235839844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000701904296875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010020732879639

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0005497932434082

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00046706199645996

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00078701972961426

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.0025379657745361

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00084090232849121

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.0028171539306641

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0020499229431152

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0014181137084961

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006098747253418

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00052189826965332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049591064453125

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0003969669342041

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.0010268688201904

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0017831325531006

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00055503845214844

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00035309791564941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00050783157348633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068402290344238

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045609474182129

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00086402893066406

SHOW TABLES FROM `ospos` 
 Execution Time:0.0025210380554199

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040984153747559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063180923461914

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057101249694824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049614906311035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005948543548584

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0023219585418701

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%i%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00059008598327637

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%i%' ESCAPE '!'
OR  `item_kit_number` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00034999847412109

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00070500373840332

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00044584274291992

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00058817863464355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005037784576416

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00036191940307617

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00079011917114258

SHOW TABLES FROM `ospos` 
 Execution Time:0.0021231174468994

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00038790702819824

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040197372436523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00081801414489746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065398216247559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036501884460449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048494338989258

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00067996978759766

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '6' 
 Execution Time:0.0025811195373535

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.001060962677002

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 6
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  2 
 Execution Time:0.0028719902038574

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00036406517028809

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.0012130737304688

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.0029199123382568

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00029706954956055

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00041890144348145

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00034189224243164

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.0004119873046875

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00052404403686523

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00030303001403809

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00039100646972656

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00049304962158203

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00037479400634766

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00091886520385742

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00024986267089844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029897689819336

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00030708312988281

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00061202049255371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00041913986206055

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00054287910461426

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00035905838012695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00058698654174805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058293342590332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00093698501586914

SHOW TABLES FROM `ospos` 
 Execution Time:0.0035619735717773

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00059604644775391

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0006868839263916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053882598876953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049686431884766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066304206848145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045895576477051

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0020959377288818

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%i%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00054311752319336

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%i%' ESCAPE '!'
OR  `item_kit_number` LIKE '%i%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0008690357208252

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00070095062255859

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00024986267089844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00033378601074219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001093864440918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00084400177001953

SHOW TABLES FROM `ospos` 
 Execution Time:0.0036897659301758

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00049495697021484

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082206726074219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.002349853515625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0011649131774902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052785873413086

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0010440349578857

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.001823902130127

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00091409683227539

SELECT *
FROM `ospos_item_kits`
WHERE `item_kit_number` = '2' 
 Execution Time:0.00034880638122559

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00069594383239746

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 2
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND definition_flags &  2 
 Execution Time:0.0033540725708008

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00052785873413086

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.0014839172363281

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.0036759376525879

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00044798851013184

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00047779083251953

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00076794624328613

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0010089874267578

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00038504600524902

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00064301490783691

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00079703330993652

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00034809112548828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051093101501465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00030803680419922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013270378112793

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0033760070800781

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00082898139953613

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00049114227294922

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0045990943908691

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00027704238891602

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00042891502380371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005791187286377

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00075197219848633

SHOW TABLES FROM `ospos` 
 Execution Time:0.0023300647735596

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00054097175598145

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040102005004883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047206878662109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053501129150391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039196014404297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043010711669922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059294700622559

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.0023400783538818

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0006861686706543

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0011541843414307

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.0022079944610596

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0012638568878174

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00054121017456055

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00063705444335938

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0005040168762207

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00036787986755371

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005950927734375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054788589477539

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00043511390686035

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00059390068054199

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00055408477783203

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0012118816375732

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00075507164001465

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00060820579528809

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00058698654174805

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0006709098815918

SHOW TABLES FROM `ospos` 
 Execution Time:0.0055840015411377

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00035905838012695

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056195259094238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070691108703613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003969669342041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062894821166992

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.0041210651397705

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00033307075500488

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00043892860412598

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00047206878662109

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00044417381286621

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00023007392883301

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00037598609924316

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00087499618530273

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00047993659973145

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00037789344787598

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.0003511905670166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036287307739258

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00047802925109863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00066280364990234

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00035500526428223

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00045108795166016

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00056982040405273

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00036478042602539

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080609321594238

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005958080291748

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00071001052856445

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018420219421387

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00041794776916504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00068306922912598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047898292541504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047421455383301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055098533630371

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00066709518432617

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00038695335388184

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00046420097351074

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00049805641174316

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00040316581726074

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00042510032653809

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00046896934509277

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00050902366638184

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00054693222045898

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00034093856811523

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00041794776916504

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00058603286743164

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00084090232849121

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.0010759830474854

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00049710273742676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050520896911621

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00034999847412109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043892860412598

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00041794776916504

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00041484832763672

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00046420097351074

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00050020217895508

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00036716461181641

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006258487701416

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00082612037658691

SHOW TABLES FROM `ospos` 
 Execution Time:0.0042479038238525

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043916702270508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065994262695312

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056004524230957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045013427734375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057387351989746

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00056695938110352

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00038695335388184

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00055694580078125

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0007178783416748

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00040507316589355

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00042200088500977

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00055408477783203

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00049018859863281

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00040102005004883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044608116149902

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00043106079101562

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00039815902709961

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00055193901062012

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00058412551879883

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00037407875061035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00053119659423828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00064396858215332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00048112869262695

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00097513198852539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0044047832489014

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041007995605469

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005030632019043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051093101501465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074410438537598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048613548278809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039291381835938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050091743469238

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00055718421936035

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00042295455932617

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00057697296142578

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00062084197998047

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00030183792114258

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00041604042053223

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00071310997009277

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00046491622924805

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00028586387634277

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00025296211242676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040793418884277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.001068115234375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057387351989746

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00044703483581543

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00047707557678223

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00048112869262695

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00062799453735352

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00035810470581055

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00043892860412598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074410438537598

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00053000450134277

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00084996223449707

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019280910491943

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00041007995605469

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052595138549805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00072407722473145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040793418884277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007178783416748

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00072216987609863

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00070691108703613

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00076198577880859

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00058102607727051

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00043606758117676

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00052094459533691

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00049614906311035

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00047183036804199

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00053501129150391

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00049805641174316

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00031208992004395

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00039911270141602

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0005800724029541

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00039386749267578

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00034308433532715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042891502380371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00034785270690918

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00045418739318848

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0005338191986084

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00053501129150391

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00037097930908203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006711483001709

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00045490264892578

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00072193145751953

SHOW TABLES FROM `ospos` 
 Execution Time:0.002000093460083

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00047588348388672

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052690505981445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062990188598633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052905082702637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044894218444824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00056290626525879

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0017871856689453

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0014140605926514

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00076103210449219

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00061202049255371

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.0003509521484375

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00041294097900391

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00051784515380859

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00038409233093262

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00043487548828125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046300888061523

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00036096572875977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00054597854614258

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00035810470581055

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00044512748718262

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00049090385437012

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00065398216247559

SELECT GET_LOCK('53c8090645d3cc4b9ddf872281ade59e', 300) AS ci_session_lock 
 Execution Time:0.00036716461181641

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00042605400085449

UPDATE `ospos_sessions` SET `timestamp` = 1697630612, `data` = '__ci_last_regenerate|i:1697630612;person_id|s:1:\"1\";menu_group|s:4:\"home\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";cash_rounding|i:0;cash_mode|i:0;sales_cart|a:2:{i:1;a:25:{s:7:\"item_id\";s:1:\"6\";s:13:\"item_location\";s:1:\"1\";s:10:\"stock_name\";s:5:\"stock\";s:4:\"line\";i:1;s:4:\"name\";s:6:\"item b\";s:11:\"item_number\";N;s:16:\"attribute_values\";N;s:18:\"attribute_dtvalues\";N;s:11:\"description\";s:0:\"\";s:12:\"serialnumber\";s:0:\"\";s:21:\"allow_alt_description\";s:1:\"0\";s:13:\"is_serialized\";s:1:\"0\";s:8:\"quantity\";d:65;s:8:\"discount\";d:0;s:13:\"discount_type\";s:1:\"0\";s:8:\"in_stock\";s:7:\"609.000\";s:5:\"price\";d:1000;s:10:\"cost_price\";s:6:\"900.00\";s:5:\"total\";s:10:\"65000.0000\";s:16:\"discounted_total\";s:10:\"65000.0000\";s:12:\"print_option\";i:0;s:10:\"stock_type\";s:1:\"0\";s:9:\"item_type\";s:1:\"0\";s:8:\"hsn_code\";s:0:\"\";s:15:\"tax_category_id\";s:1:\"0\";}i:2;a:25:{s:7:\"item_id\";s:1:\"2\";s:13:\"item_location\";s:1:\"1\";s:10:\"stock_name\";s:5:\"stock\";s:4:\"line\";i:2;s:4:\"name\";s:5:\"item2\";s:11:\"item_number\";s:4:\"item\";s:16:\"attribute_values\";N;s:18:\"attribute_dtvalues\";N;s:11:\"description\";s:0:\"\";s:12:\"serialnumber\";s:0:\"\";s:21:\"allow_alt_description\";s:1:\"0\";s:13:\"is_serialized\";s:1:\"0\";s:8:\"quantity\";d:70;s:8:\"discount\";d:0;s:13:\"discount_type\";s:1:\"0\";s:8:\"in_stock\";s:7:\"106.000\";s:5:\"price\";d:110;s:10:\"cost_price\";s:6:\"100.00\";s:5:\"total\";s:9:\"7700.0000\";s:16:\"discounted_total\";s:9:\"7700.0000\";s:12:\"print_option\";i:0;s:10:\"stock_type\";s:1:\"0\";s:9:\"item_type\";s:1:\"0\";s:8:\"hsn_code\";s:0:\"\";s:15:\"tax_category_id\";s:1:\"0\";}}sales_customer|s:1:\"6\";sales_mode|s:4:\"sale\";sales_payments|a:2:{s:4:\"Cash\";a:4:{s:12:\"payment_type\";s:4:\"Cash\";s:14:\"payment_amount\";d:50000;s:11:\"cash_refund\";i:0;s:15:\"cash_adjustment\";i:0;}s:3:\"Due\";a:4:{s:12:\"payment_type\";s:3:\"Due\";s:14:\"payment_amount\";d:22700;s:11:\"cash_refund\";i:0;s:15:\"cash_adjustment\";i:0;}}'
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.0036759376525879

SELECT RELEASE_LOCK('53c8090645d3cc4b9ddf872281ade59e') AS ci_session_lock 
 Execution Time:0.00025010108947754

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'iqjhdvqt3o0i8g5avntc557f88ni8gsh'
AND `ip_address` = '::1' 
 Execution Time:0.00041389465332031

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00021696090698242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00047993659973145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053095817565918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00041389465332031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00073385238647461

SHOW TABLES FROM `ospos` 
 Execution Time:0.0021498203277588

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00057888031005859

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00074911117553711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048708915710449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045585632324219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00040602684020996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00071597099304199

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00063490867614746

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004270076751709

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00061416625976562

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00032401084899902

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00032591819763184

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00043511390686035

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2023-10-18 08:03:32', '6', '1', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.0018160343170166

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `cash_adjustment`, `employee_id`) VALUES (16, 'Cash', 50000, 0, 0, '1') 
 Execution Time:0.0019559860229492

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `cash_adjustment`, `employee_id`) VALUES (16, 'Due', 22700, 0, 0, '1') 
 Execution Time:0.00032997131347656

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00054097175598145

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '6'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00067782402038574

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (16, '6', 1, '', '', 65, 0, '0', '900.00', 1000, '1', 0) 
 Execution Time:0.00193190574646

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00036907196044922

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00029897689819336

UPDATE `ospos_item_quantities` SET `quantity` = 544, `item_id` = '6', `location_id` = '1'
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00094890594482422

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-18 08:03:32', '6', '1', '1', 'POS 16', -65) 
 Execution Time:0.0023069381713867

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			SELECT '6', definition_id, attribute_id, 16
			FROM ospos_attribute_links
			WHERE item_id = '6' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.0004580020904541

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '2'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00070500373840332

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (16, '2', 2, '', '', 70, 0, '0', '100.00', 110, '1', 0) 
 Execution Time:0.00035810470581055

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00031495094299316

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00028896331787109

UPDATE `ospos_item_quantities` SET `quantity` = 36, `item_id` = '2', `location_id` = '1'
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00034117698669434

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2023-10-18 08:03:32', '2', '1', '1', 'POS 16', -70) 
 Execution Time:0.00033187866210938

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			SELECT '2', definition_id, attribute_id, 16
			FROM ospos_attribute_links
			WHERE item_id = '2' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00043892860412598

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.0030457973480225

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00034379959106445

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0016710758209229

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0013830661773682

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0017068386077881

SHOW TABLES FROM `ospos` 
 Execution Time:0.0019359588623047

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00048279762268066

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00047993659973145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00074410438537598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005180835723877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0006260871887207

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0029010772705078

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '16'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0047118663787842

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.014239072799683

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, MAX(IFNULL(payments.sale_cash_adjustment, 0)) AS cash_adjustment, MAX(IFNULL(payments.sale_cash_refund, 0)) AS cash_refund, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(IFNULL(payments.sale_payment_amount, 0)) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '16'
GROUP BY `sales`.`sale_id`
ORDER BY `sales`.`sale_time` ASC 
 Execution Time:0.00091099739074707

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, `items`.`name` AS `name`, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '16'
ORDER BY `line` ASC 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.0027358531951904

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 6
AND `sale_id` = '16'
AND definition_flags &  2 
 Execution Time:0.00075197219848633

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00052595138549805

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00036406517028809

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.0021350383758545

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 2
AND `sale_id` = '16'
AND definition_flags &  2 
 Execution Time:0.00065803527832031

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00040197372436523

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '16' 
 Execution Time:0.00040316581726074

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00036811828613281

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00050711631774902

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.0003669261932373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003969669342041

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00035786628723145

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00033998489379883

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.0003199577331543

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00043511390686035

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00069308280944824

SELECT `item_id`, `name`, `percent`
FROM `ospos_sales_items_taxes`
WHERE `sale_id` = '16'
AND `item_id` = '6' 
 Execution Time:0.00082921981811523

SELECT `item_id`, `name`, `percent`
FROM `ospos_sales_items_taxes`
WHERE `sale_id` = '16'
AND `item_id` = '2' 
 Execution Time:0.00041389465332031

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '16'
ORDER BY `print_sequence` ASC 
 Execution Time:0.013374090194702

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00050592422485352

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00055694580078125

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00032305717468262

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00046515464782715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050210952758789

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00043892860412598

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00075197219848633

SHOW TABLES FROM `ospos` 
 Execution Time:0.0024831295013428

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043821334838867

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00065517425537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058317184448242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050902366638184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061893463134766

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00090122222900391

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '16'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0034410953521729

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.004878044128418

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, MAX(IFNULL(payments.sale_cash_adjustment, 0)) AS cash_adjustment, MAX(IFNULL(payments.sale_cash_refund, 0)) AS cash_refund, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(IFNULL(payments.sale_payment_amount, 0)) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '16'
GROUP BY `sales`.`sale_id`
ORDER BY `sales`.`sale_time` ASC 
 Execution Time:0.00089216232299805

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, `items`.`name` AS `name`, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '16'
ORDER BY `line` ASC 
 Execution Time:0.00057792663574219

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.002230167388916

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 6
AND `sale_id` = '16'
AND definition_flags &  2 
 Execution Time:0.00072312355041504

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00037288665771484

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.00034499168395996

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.0022330284118652

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 2
AND `sale_id` = '16'
AND definition_flags &  2 
 Execution Time:0.00066995620727539

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0003659725189209

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00033998489379883

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '16' 
 Execution Time:0.00040411949157715

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00040197372436523

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00036001205444336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041103363037109

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00055885314941406

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.0003821849822998

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00042009353637695

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00026988983154297

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00034499168395996

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00047993659973145

SELECT `item_id`, `name`, `percent`
FROM `ospos_sales_items_taxes`
WHERE `sale_id` = '16'
AND `item_id` = '6' 
 Execution Time:0.00045394897460938

SELECT `item_id`, `name`, `percent`
FROM `ospos_sales_items_taxes`
WHERE `sale_id` = '16'
AND `item_id` = '2' 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '16'
ORDER BY `print_sequence` ASC 
 Execution Time:0.00038003921508789

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00043988227844238

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00058698654174805

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00035905838012695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057077407836914

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0006711483001709

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00073099136352539

SHOW TABLES FROM `ospos` 
 Execution Time:0.0029940605163574

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00050091743469238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062203407287598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00083613395690918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053691864013672

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00053286552429199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00062799453735352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042080879211426

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00060296058654785

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00025010108947754

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057411193847656

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00046610832214355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00077581405639648

SHOW TABLES FROM `ospos` 
 Execution Time:0.0026400089263916

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00036191940307617

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040102005004883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044703483581543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033998489379883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048398971557617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00048112869262695

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.006417989730835

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00066900253295898

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.001054048538208

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.00045514106750488

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00039100646972656

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18' 
 Execution Time:0.00072097778320312

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount - cash_refund) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00080680847167969

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00054693222045898

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00037407875061035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055193901062012

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0005190372467041

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00072813034057617

SHOW TABLES FROM `ospos` 
 Execution Time:0.0018870830535889

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00069904327392578

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00061798095703125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00057697296142578

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009150505065918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000640869140625

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00075507164001465

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '16'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0029990673065186

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0054068565368652

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, MAX(IFNULL(payments.sale_cash_adjustment, 0)) AS cash_adjustment, MAX(IFNULL(payments.sale_cash_refund, 0)) AS cash_refund, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(IFNULL(payments.sale_payment_amount, 0)) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '16'
GROUP BY `sales`.`sale_id`
ORDER BY `sales`.`sale_time` ASC 
 Execution Time:0.00092816352844238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052905082702637

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '16' 
 Execution Time:0.0004570484161377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00063204765319824

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00062012672424316

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00042295455932617

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00066184997558594

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00080394744873047

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0029060840606689

SHOW TABLES FROM `ospos` 
 Execution Time:0.012814044952393

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0023860931396484

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00086116790771484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00082612037658691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00053882598876953

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0027871131896973

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00090789794921875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0007469654083252

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0072610378265381

UPDATE `ospos_inventory` SET `trans_date` = '2023-10-18 08:03:32'
WHERE `trans_comment` = 'POS 16' 
 Execution Time:0.00088691711425781

UPDATE `ospos_sales` SET `sale_time` = '2023-10-18 08:03:32', `customer_id` = '6', `employee_id` = '1', `comment` = '', `invoice_number` = NULL
WHERE `sale_id` = '16' 
 Execution Time:0.00050091743469238

UPDATE `ospos_sales_payments` SET `payment_type` = 'Cash', `payment_amount` = '50000.00', `cash_refund` = '0.00', `cash_adjustment` = 0
WHERE `payment_id` = '16' 
 Execution Time:0.00037288665771484

UPDATE `ospos_sales_payments` SET `payment_type` = 'Cash', `payment_amount` = '22700.00', `cash_refund` = '0.00', `cash_adjustment` = 0
WHERE `payment_id` = '17' 
 Execution Time:0.0020289421081543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00080704689025879

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00025796890258789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.002126932144165

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00079178810119629

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0007021427154541

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0014798641204834

SHOW TABLES FROM `ospos` 
 Execution Time:0.003000020980835

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0071260929107666

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0028839111328125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0014479160308838

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0025689601898193

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00051498413085938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0015249252319336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0021839141845703

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0046188831329346

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00088882446289062

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
GROUP BY `sales`.`sale_id` 
 Execution Time:0.0010280609130859

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.00057601928710938

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00060606002807617

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18' 
 Execution Time:0.00081300735473633

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount - cash_refund) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE DATE(sales.sale_time) BETWEEN '2023-10-18' AND '2023-10-18'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00071215629577637

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.0092830657958984

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.15343904495239

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00059199333190918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046396255493164

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00040888786315918

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00063896179199219

SHOW TABLES FROM `ospos` 
 Execution Time:0.0017819404602051

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00036811828613281

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00059795379638672

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00091695785522461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0009620189666748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0031168460845947

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00077104568481445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00058794021606445

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00095415115356445

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '16'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0045468807220459

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0045809745788574

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, MAX(IFNULL(payments.sale_cash_adjustment, 0)) AS cash_adjustment, MAX(IFNULL(payments.sale_cash_refund, 0)) AS cash_refund, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(IFNULL(payments.sale_payment_amount, 0)) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '16'
GROUP BY `sales`.`sale_id`
ORDER BY `sales`.`sale_time` ASC 
 Execution Time:0.0010910034179688

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00058102607727051

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.0003359317779541

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076889991760254

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00057196617126465

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0008089542388916

SHOW TABLES FROM `ospos` 
 Execution Time:0.0027740001678467

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00038290023803711

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003511905670166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.001101016998291

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067901611328125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039505958557129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00098299980163574

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(ROUND(sales_items_taxes.item_tax_amount, 2)) AS tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS internal_tax,
					SUM(ROUND(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END, 2)) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0012040138244629

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					SUM(CASE WHEN payments.cash_adjustment = 0 THEN payments.payment_amount ELSE 0 END) AS sale_payment_amount,
					SUM(CASE WHEN payments.cash_adjustment = 1 THEN payments.payment_amount ELSE 0 END) AS sale_cash_adjustment,
					SUM(payments.cash_refund) AS sale_cash_refund,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '16'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.0043139457702637

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '16'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0053300857543945

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, MAX(IFNULL(payments.sale_cash_adjustment, 0)) AS cash_adjustment, MAX(IFNULL(payments.sale_cash_refund, 0)) AS cash_refund, ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0) AS amount_due, MAX(IFNULL(payments.sale_payment_amount, 0)) AS amount_tendered, (MAX(payments.sale_payment_amount)) - (ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.quantity_purchased * sales_items.item_unit_price - ROUND(sales_items.quantity_purchased * sales_items.item_unit_price * sales_items.discount / 100, 2) ELSE sales_items.quantity_purchased * (sales_items.item_unit_price - sales_items.discount) END), 2) + IFNULL(SUM(sales_items_taxes.sales_tax), 0) + IFNULL(SUM(payments.sale_cash_adjustment), 0)) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '16'
GROUP BY `sales`.`sale_id`
ORDER BY `sales`.`sale_time` ASC 
 Execution Time:0.0010159015655518

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, `items`.`name` AS `name`, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '16'
ORDER BY `line` ASC 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '6'
OR `ospos_items`.`item_id` = 6
 )
 LIMIT 1 
 Execution Time:0.0030131340026855

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 6
AND `sale_id` = '16'
AND definition_flags &  2 
 Execution Time:0.0024571418762207

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0010080337524414

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '6'
AND `location_id` = '1' 
 Execution Time:0.0012178421020508

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.003154993057251

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%m/%d/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `item_id` = 2
AND `sale_id` = '16'
AND definition_flags &  2 
 Execution Time:0.0017738342285156

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00037193298339844

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00034785270690918

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '16' 
 Execution Time:0.00048208236694336

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00041389465332031

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0004279613494873

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00046801567077637

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00038003921508789

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.0003361701965332

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '16' 
 Execution Time:0.00053906440734863

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00059700012207031

SELECT `item_id`, `name`, `percent`
FROM `ospos_sales_items_taxes`
WHERE `sale_id` = '16'
AND `item_id` = '6' 
 Execution Time:0.00049686431884766

SELECT `item_id`, `name`, `percent`
FROM `ospos_sales_items_taxes`
WHERE `sale_id` = '16'
AND `item_id` = '2' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '16'
ORDER BY `print_sequence` ASC 
 Execution Time:0.00040912628173828

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00088191032409668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00076103210449219

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00074601173400879

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00063300132751465

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00045108795166016

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.000701904296875

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.00027680397033691

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00062990188598633

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00055885314941406

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00044512748718262

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00089693069458008

SHOW TABLES FROM `ospos` 
 Execution Time:0.0031249523162842

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00043892860412598

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005958080291748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038290023803711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033903121948242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052022933959961

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0013539791107178

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00071096420288086

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00041294097900391

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00031304359436035

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.021955013275146

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0064229965209961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045204162597656

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00030303001403809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038290023803711

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00037813186645508

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00087094306945801

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00053811073303223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.0065429210662842

SELECT GET_LOCK('b4f4e5beff1dfdae513fb91e9c1f840b', 300) AS ci_session_lock 
 Execution Time:0.16604804992676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'uvvbo4l4cpei5pp3ucdq375u7gqstaj5'
AND `ip_address` = '::1' 
 Execution Time:0.00048995018005371

SHOW TABLES FROM `ospos` 
 Execution Time:0.003291130065918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0004580020904541

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00048017501831055

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0061118602752686

SELECT GET_LOCK('e4238e11d6fe3f192886ea6c6e574126', 300) AS ci_session_lock 
 Execution Time:0.00038003921508789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3mosfkqgcpafbm65rt9do9ut164bu5u4'
AND `ip_address` = '::1' 
 Execution Time:0.00059318542480469

SHOW TABLES FROM `ospos` 
 Execution Time:0.086078882217407

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.015573024749756

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.026633024215698

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00047588348388672

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0015659332275391

